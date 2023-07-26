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

}
}

function display(data ,displayImageURL){
    const {
        purpose,
        createdAt,
        repName,
        dateVisit,
        status,
        viewOption,
        idPicture,
        email
     } =  variables()
     email.textContent =data.log_timein
     createdAt.textContent = data.log_date
     repName.textContent = data.log_fullname
     dateVisit.textContent = `${data.log_timeout != ''  ? data.log_timeout: "On going"}`
     purpose.textContent = data.log_purpose
     status.textContent = data.log_visitor_status_name;
     status.className=`absolute border top-2 right-2 p-1 rounded-sm uppercase text-xs border-green-500 text-green-700`
     idPicture.innerHTML = `<img class="object-fill h-48 w-96" src="${displayImageURL}/assets/request-appointment-id-picture/${data.log_id_picture}" alt="id picture" />`
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

    $("#imgInp-2").change(function(){
        readURL(this ,"#img-con-2");
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
  $("#edit-request-form")[0].reset()
  const edit_visitor_status =  getElementById("edit_visitor_status")
  edit_visitor_status.innerHTML = "";
   $.ajax({
       type:"GET",
       url:url+"/controller/administrative/visitor-management.php/getVisitorStatusOption",
       success:function(res){
           res.visitor_status.forEach((data) => {
               edit_visitor_status.innerHTML += `<option value="${data.log_visitor_status_id}">${data.log_visitor_status_name}</option>` 
             });
       }
   })


  if(data.log_timeout !== ''){
    $("#timeout-edit").val(data.log_timeout)
  }else{
    $("#timeout-edit").prop('readonly', true)
  }

  $('#edit_visitor_status').val(data.log_visitor_status)
  $('#fullname-edit').val(`${data.log_fullname}`)
  $('#date-edit').val(data.log_date)
  $('#time-edit').val(data.log_timein)
  $('#purpose-edit').val(`${data.log_purpose}`)
  defaultValue($("#imgInp-2")[0],data.log_id_picture)
  const url_prof = url+"/assets/request-appointment-id-picture/" + data.log_id_picture
  $("#img-con-2")[0].innerHTML =  `<img id="blah" src='${url_prof}' alt="your image"  class="w-full h-[150px] mb-2"/>`

    $("#date-edit").datepicker({
      changeDate: true,
      changeMonth: true,
      changeYear: true,
      minDate:new Date()
  });


  $("#edit-request-form").submit(function(e){
  e.preventDefault()
  $("#loading").show()
  const formData = new FormData(e.currentTarget)
  formData.append('log_id',id)
    $.ajax({
      type:"POST",
      processData: false,
      contentType: false,
      url:url+"/controller/administrative/visitor-management.php/editVisitorLog",
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
        url:url +"/controller/administrative/visitor-management.php/removeVisitorLog/" + id,
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

    const date = new Date(Date.now());
    $("#create_timein").val(`${date.getHours()}:${(date.getMinutes()< 10?'0':'')+ date.getMinutes()}`)
    $('#log_date').val(date.toLocaleDateString('en-US',{  year: 'numeric',month: '2-digit', day: '2-digit'}))

    $("#request-form").submit(function(e){
        e.preventDefault()
        const formData = new FormData(e.currentTarget)
        $("#loading").show()
        $.ajax({
            type:"POST",
            processData: false,
            contentType: false,
            url:url+"/controller/administrative/visitor-management.php/createVisitorLog",
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
}



