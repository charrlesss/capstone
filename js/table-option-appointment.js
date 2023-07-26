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
            email,
            dateVisit,
            status,
            viewOption,
            idPicture
         } =  variables()
         createdAt.textContent = new Date(data.req_createdAt * 1000).toLocaleString()
         repName.textContent = data.fullname
         email.textContent = data.email
         dateVisit.textContent = `${data['date']}, ${data['time']}`
         purpose.textContent = data.purpose
         status.textContent = data.pending === "1" ? "Pending" : data.declined === "1" ? "Declined" :"Approved";
         status.className=`absolute border top-2 right-2 p-1 rounded-sm uppercase text-xs ${data.pending === "1" ? "border-amber-500 text-amber-700" : data.declined === "1" ? "border-red-500 text-red-700" : "border-green-500 text-green-700"}`
         idPicture.innerHTML = `<img class="object-fill h-48 w-96" src="${displayImageURL}${data.id_picture}" alt="id picture" />`

         viewOption.innerHTML = `
           ${
            data.approved === '1' ?
            `
            <button
            type="button"
            data-te-toggle="modal"
            data-te-target="#createRequestModal"
            data-te-ripple-init
            data-te-ripple-color="light"
            id="add-new-req" 
            class='border cursor-pointer'>
                <svg class="h-6 w-6 hover:text-green-500  text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="12" y1="5" x2="12" y2="19" />  <line x1="5" y1="12" x2="19" y2="12" /></svg>
            </button>
            <button id='get-qrcode' class='border'>
                <svg class="h-6 w-6 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/>
                </svg>
            </button>
            `:
            `
            <button
            type="button"
            data-te-toggle="modal"
            data-te-target="#createRequestModal"
            data-te-ripple-init
            data-te-ripple-color="light"
            id="add-new-req" 
            class='border cursor-pointer'>
                <svg class="h-6 w-6 hover:text-green-500  text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="12" y1="5" x2="12" y2="19" />  <line x1="5" y1="12" x2="19" y2="12" /></svg>
            </button>
            <button
            type="button"
            data-te-toggle="modal"
            data-te-target="#editRequestModal"
            data-te-ripple-init
            data-te-ripple-color="light"
            onclick='editRequestAppointment("${data.visitor_req_id}",${JSON.stringify(data)})'
            id="edit-new-req" 
            class='border'>
                <svg class="h-6 w-6 hover:text-green-500 text-indigo-500"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
            </button>
            <button
            onclick='deleteRequestAppointment("${data.visitor_req_id}")' 
            id="delete" 
            class='border'>
                <svg class="h-5 w-5 hover:text-green-500 text-indigo-500 cursor-pointer"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" />  <line x1="18" y1="9" x2="12" y2="15" />  <line x1="12" y1="9" x2="18" y2="15" /></svg>         
            </button>
            `

           }
         `
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
  
function approvedRequestAppointment(url,id){
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
              url:url+"/controller/administrative/visitor-management.php/approvedRequest/approved/"+id,
              type:"GET",
              success:function(res){
                const data = JSON.parse(res)
                $("#loading").hide()
                 Swal.fire(
                  'Approved!',
                  data.message,
                  'success'
                )
              }
            })
         
        }
    })
}

function declinedRequestAppointment(url,id){
  Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Declined it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $("#loading").show()
            $.ajax({
              url:url+id,
              type:"GET",
              success:function(res){
                const data = JSON.parse(res)
                $("#loading").hide()
                 Swal.fire(
                  'Declined!',
                  data.message,
                  'success'
                )
              }
            })
         
        }
    })

}

function pendingRequestAppointment(url,id){
  Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Pending it!'
      }).then((result) => {
        if (result.isConfirmed) {
            $("#loading").show()
            $.ajax({
              url:url+id,
              type:"GET",
              success:function(res){
                const data = JSON.parse(res)
                $("#loading").hide()
                 Swal.fire(
                  'Pending!',
                  data.message,
                  'success'
                )
              }
            })
         
        }
    })
}

function editRequestAppointment(url,imgURL,id,data){
    $('#fullname-edit').val(`${data.fullname}`)
      $('#date-edit').val(`${data.date}`)
      $('#time-edit').val(`${data.time}`)
      $('#purpose-edit').val(`${data.purpose}`)
      defaultValue($("#imgInp-2")[0],data.id_picture)
      const url_prof = imgURL + data.id_picture
      $("#img-con-2")[0].innerHTML =  `<img id="blah" src='${url_prof}' alt="your image"  class="w-full h-[150px] mb-2"/>`
    
      $("#edit-request-form").submit(function(e){
      e.preventDefault()
      $("#loading").show()
      const formData = new FormData(e.currentTarget)
      formData.append("visitor_id",data.visitor_acc_id)
      formData.append('email',data.email)
      formData.append('req_id',id)

        $.ajax({
          type:"POST",
          processData: false,
          contentType: false,
          url:url,
          data:formData,
          success:function(res){
            const data = JSON.parse(res)
                 if(data.success){
                    $("#loading").hide()

                   return   Swal.fire(
                        'Updated!',
                          data.message,
                        'success'
                      )
                 }
              Swal.fire({
                icon: 'error',
                title: data.message,
                showConfirmButton: false,
                timer: 1500
              })
          }
        })
      })
}

function deleteRequestAppointment(url,id){
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
          url:url + id,
          success:function(res){
            const data = JSON.parse(res)
                 if(data.success){
                    $("#loading").hide()
                   return   Swal.fire(
                        'Deleted!',
                          data.message,
                        'success'
                      )
                 }
             
          }
        })
      }
    })
}

function adddRequestAppointment(id,data,v_id,url,imgURL,addURL){
    $( "#datepicker" ).datepicker( "destroy" );
    $.ajax({
        type:"GET",
        url:url + v_id,
        success:function(res){
          const visitor_rq_info = JSON.parse(res)
          var getDateRequest = visitor_rq_info.appoint_req.reduce(function(s, a){
            s.push(a.date);
            return s;
          }, [])

          $("#fullname").val(data.fullname)
            defaultValue($("#imgInp")[0],data.id_picture)
           
            const url_prof = imgURL + data.id_picture
            $("#img-con")[0].innerHTML =  `<img id="blah" src='${url_prof}' alt="your image"  class="w-full h-[150px] mb-2"/>`

            $( "#datepicker" ).datepicker({
                changeDate: true,
                changeMonth: true,
                changeYear: true,
                minDate:new Date(),
                beforeShowDay: function(date){
                    var string = jQuery.datepicker.formatDate('mm/dd/yy', date);
                    return [ getDateRequest.indexOf(string) == -1 ]
                }
            });


            $("#request-form").submit(function(e){
                e.preventDefault()
                const formData = new FormData(e.currentTarget)
                formData.append("email",data.email)
                formData.append("visitor_id",data.visitor_id)
                $("#loading").show()

                $.ajax({
                    type:"POST",
                    processData: false,
                    contentType: false,
                    url:addURL,
                    data:formData,
                    success:function(res){
                      const data = JSON.parse(res)
                      if(data.success){
                             $("#loading").hide()
                              return Swal.fire({
                                icon: 'success',
                                title: data.message,
                                showConfirmButton: false,
                                timer: 1500
                              })
                           }
                        Swal.fire({
                          icon: 'error',
                          title: data.message,
                          showConfirmButton: false,
                          timer: 1500
                        })
                    }
                  })


            
            })

        }
      })

}


