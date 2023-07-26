function getElementById(id){
    return document.querySelector(`#${id}`)
}
function variables(){
    return {
        createdAt:getElementById('ceatedAt'),
        repName:getElementById('rep-name'),
        email:getElementById('email-view'),
        dateVisit:getElementById('date-visit'),
        purpose:getElementById('purpose-view'),
        status:getElementById('status'),
        viewOption:getElementById('view-option'),
        idPicture:getElementById('id-picture'),
        qrcodePicture:getElementById('qrcode-picture')

}
}

function display(data ,displayImageURL){
    const {
        createdAt,
        repName,
        status,
        idPicture,
        qrcodePicture
     } =  variables()
     createdAt.textContent = data.createdAt
     repName.textContent = data.fullname
     status.textContent = data.log_visitor_status_name;
     status.className=`absolute border top-2 right-2 p-1 rounded-sm uppercase text-xs border-green-500 text-green-700`
     idPicture.innerHTML = `<img class="object-fill h-48 w-96" src="${displayImageURL}/assets/request-appointment-id-picture/${data.IDpicture_filename}" alt="id picture" />`
     qrcodePicture.innerHTML = `<img class="object-fill h-48 w-96" src="${displayImageURL}/assets/qr-code/${data.qrcode_filename}" alt="id picture" />`

}

function readURL(input,id) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $(id)[0].innerHTML =  `<img id="blah" src='${e.target.result}' alt="your image"  class="w-full h-[150px] mb-2"/>`
    }
    
    reader.readAsDataURL(input.files[0]);
}
}

function imageDefaultImageDisplay(){
    
    $("#imgInp").change(function(){
        readURL(this,"#img-con");
    });

    $("#edit-file").change(function(){
        readURL(this ,"#edit-img-con");
    });
}

function defaultValue (input,profile){
const myFile = new File(['Hello World!'],`${profile}`, {
        type: 'text/plain',
        lastModified: new Date(),
    });
    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(myFile);
    input.files = dataTransfer.files
}

function viewRequestAppointment(id,data ,displayImageURL){
  display(data ,displayImageURL)
}

function timeinVisitorLog(id,url){
  const date = new Date(Date.now())
  const timein = `${date.getHours()}:${(date.getMinutes()< 10?'0':'')+ date.getMinutes()}`
  const dateInput = `${date.toLocaleDateString('fr-CA', { year: 'numeric', month: '2-digit', day: '2-digit' })}`

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Time in it!'
  }).then((result) => {
    if (result.isConfirmed) {
        $("#loading").show()
        $.ajax({
          url:url+"/controller/administrative/visitor-management.php/visitorsTimein/"+id+"/"+timein+"/"+dateInput,
          type:"GET",
          success:function(res){
            console.log(res)
                $("#loading").hide()
                Swal.fire(
                'Time In!',
                res.message,
                'success'
                )
          }
        })
     
    }
})
}


function timeoutVisitorLog(id,url){
  const date = new Date(Date.now())
  const timeout = `${date.getHours()}:${(date.getMinutes()< 10?'0':'')+ date.getMinutes()}`
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Approved it!'
  }).then((result) => {
    if (result.isConfirmed) {
        $("#loading").show()
        $.ajax({
          url:url+"/controller/administrative/visitor-management.php/timeoutVisitorLog/"+id+"/"+timeout,
          type:"GET",
          success:function(res){
            console.log(res)
                $("#loading").hide()
                Swal.fire(
                'Time Out!',
                res.message,
                'success'
                )
          }
        })
     
    }
})
}

function editRequestAppointment(id,data,url){
  const defaultData = data;
  $("#edit-request-form")[0].reset()
  const edit_visitor_status =  getElementById("edit-visitor_status")
  edit_visitor_status.innerHTML = "";
   $.ajax({
       type:"GET",
       url:url+"/controller/administrative/visitor-management.php/getVisitorStatusOption",
       success:function(res){
           res.visitor_status.forEach((data) => {
                if(defaultData.log_visitor_status_id == data.log_visitor_status_id ){
                  edit_visitor_status.innerHTML += `<option selected value="${data.log_visitor_status_id}">${data.log_visitor_status_name}</option>` 
                  return;
                }
                edit_visitor_status.innerHTML += `<option value="${data.log_visitor_status_id}">${data.log_visitor_status_name}</option>` 

             });
       }
   })

   CapturingImageInput({
    video:"edit-video",
    canvas:"edit-canvas",
    capture:"edit-capture-btn",
    reset:"edit-reset-btn",
    input:"edit-file",
  })

  $('#edit-fullname').val(`${data.fullname}`)
  $('#edit-visitor_status').val(`${data.log_visitor_status_id}`)

  defaultValue($("#edit-file")[0],data.IDpicture_filename)
  const url_prof = url+"/assets/request-appointment-id-picture/" + data.IDpicture_filename
  $("#edit-img-con")[0].innerHTML =  `<img id="blah" src='${url_prof}' alt="your image"  class="w-full h-[150px] mb-2"/>`

  $("#edit-request-form").submit(function(e){
  e.preventDefault()
  $("#loading").show()
  const formData = new FormData(e.currentTarget)
  formData.append('visitors_id',id)


    $.ajax({
      type:"POST",
      processData: false,
      contentType: false,
      url:url+"/controller/administrative/visitor-management.php/editVisitorsAccount",
      data:formData,
      success:function(res){
           if(res.success){
                $("#loading").hide()
               return  Swal.fire(
                    'Updated!',
                      res.message,
                    'success'
                  ).then(()=>{
                      window.location.reload()
                  })
          }
          Swal.fire({
            icon: 'error',
            title: res.message,
            showConfirmButton: false,
            timer: 1500
          })
      }
    })
 
  })
}

function deleteRequestAppointment(id,url){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
      $("#loading").show()
      $.ajax({
        type:"GET",
        processData: false,
        contentType: false,
        url:url +"/controller/administrative/visitor-management.php/removeVisitorsAccount/" + id,
        success:function(res){
            if(res.success){
              $("#loading").hide()
              return   Swal.fire(
                  'Deleted!',
                    res.message,
                  'success'
                )
            }
        }
      })
    }
  })
}


function addLogVisitor(url){
   const visitor_status =  getElementById("visitor_status")
    $.ajax({
        type:"GET",
        url:url+"/controller/administrative/visitor-management.php/getVisitorStatusOption",
        success:function(res){
            res.visitor_status.forEach((data) => {
                visitor_status.innerHTML += `<option value="${data.log_visitor_status_id}">${data.log_visitor_status_name}</option>`    
              });
        }
    })


    $("#request-form").submit(function(e){
        e.preventDefault()
        const formData = new FormData(e.currentTarget)
        $("#loading").show()


        $.ajax({
            type:"POST",
            processData: false,
            contentType: false,
            url:url+"/controller/administrative/visitor-management.php/insertNewVisitorAccount",
            data:formData,
            success:function(res){
              console.log(res)

                if(res.success){
                        $("#loading").hide()
                      return Swal.fire({
                        icon: 'success',
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                        })
                    }
                Swal.fire({
                    icon: 'error',
                    title: res.message,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            })

            $("#request-form")[0].reset()
    
    })

}


function handleSubmitedForm(url){
    addLogVisitor(url)
    CapturingImageInput({
      video:"video",
      canvas:"canvas",
      capture:"capture-btn",
      reset:"reset-btn",
      input:"imgInp",
    })
}




function CapturingImageInput(idName){
  const video = document.getElementById(idName.video);
  const canvas = document.getElementById(idName.canvas);
  const captureBtn = document.getElementById(idName.capture);
  const resetBtn = document.getElementById(idName.reset);
  const input = document.getElementById(idName.input);
  const context = canvas.getContext('2d');

  async function createFile(url){
    let response = await fetch(url);
    let data = await response.blob();
    let metadata = {
        type: 'image/jpeg'
    };

    const dataTransfer = new DataTransfer()
    const file = new File([data], "capture.jpg", metadata);
    dataTransfer.items.add(file)
    input.files = dataTransfer.files
  }


  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (error) {
      console.log('Unable to access the camera:', error);
    });
  captureBtn.addEventListener('click', function () {
    video.pause()
    context.drawImage(video, 0, 0, canvas.width,canvas.height);
    const imageData = canvas.toDataURL('image/png');
    createFile(imageData);
  });

  resetBtn.addEventListener('click', function () {
    if(video.paused){
      video.play()
    }
    input.value = ""
   
  });
}
