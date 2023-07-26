

// used


function getElementById(id){
    return document.querySelector(`#${id}`)
  }
  
  function addLogVisitor(url){
     const availability =  getElementById("availability")
      $.ajax({
          type:"GET",
          url:url+"/controller/administrative/facility-reservation.php/getFacilityAvailability",
          success:function(res){
              res.availability.forEach((data) => {
                  availability.innerHTML += `<option value="${data.facility_availability_id }">${data.availability}</option>`    
                });
          }
      })
  
      $("#add-facility-form").submit(function(e){
        e.preventDefault()
        const formData = new FormData(e.currentTarget)
        $("#loading").show()
        $.ajax({
                  type:"POST",
                  processData: false,
                  contentType: false,
                  url:url+"/controller/administrative/facility-reservation.php/createFacility",
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
      
                  $("#add-facility-form")[0].reset()
  
      })
  
  }
  
  
  function handleSubmitedForm(url){
    //   addLogVisitor(url)
  }
  
  
  function viewFacilitySchedule(data,url){
    window.localStorage.setItem('facility_num',data.facility_id)
    const img = $("#view-facility-image")[0];
    img.src = `${url}/assets/facility/${data.facility_image}`
    img.alt = `${data.facility_image}`
    $("#view-facility-name").text(data.facility_name);
    $("#capacity_input").attr({
      "max" : parseInt(data.capacity)  
   });
    $("#capacity_datails").text(`Capacity : ${data.capacity}`)
    $("#available_datails").text(`Availability: ${data.availability}`)
    $("#location_datails").text(`Location : ${data.location}`)
  
    $.ajax({
      type:"GET",
      url:url +"/controller/administrative/facility-reservation.php/facilityScheduleById/"+data.facility_id,
      success:function(res){
        const data = res.schedule
          $("#sched-table").DataTable().clear().draw();
        $("#sched-table").DataTable().destroy();
        $("#sched-table").DataTable({
          data:data,
          columns:[
            {data:"recipient_name"},
            {data:"start_date"},
            {data:"end_date"},
            {data:"start_time"},
            {data:"end_time"},
            {data:"purpose"},
            {data:"participants"},
            {render:function(){
              return 'action'
            }}
  
          ]
        })
      }
    })
  
  
  }

  function calendarDisplay(id,url){
    $('#calendar').fullCalendar('removeEvents');

    $.ajax({
        url:url +"/controller/administrative/facility-reservation.php/getAllApprovedFacilitySchedule/0/0/1",
        type:"GET",
        success:function(res){
            $("#calendar").fullCalendar('render');
           res.schedule.filter((d)=>d.facility_id	== id).forEach((data,idx) => {
                const startDate = new Date(data.start_date);
                const endDate = new Date(data.end_date);
                var myEvent = {
                    title:`${data.purpose}\n start ${tConvert(data.start_time)}\n end ${tConvert(data.end_time)}`,
                    allDay: true,
                    start:  startDate,
                    end:  endDate.setDate(endDate.getDate() + 2),
                    id: idx,
                    color: `#${Math.floor(Math.random()*16777215).toString(16)}`
                  };
                  
                  $("#calendar").fullCalendar( 'renderEvent', myEvent );
                  
                });


                table = $('#reserve-table').DataTable({
                  data: res.schedule.filter((d)=>d.facility_id	== id),
                  columns:[
                    {data:"recipient_name"},
                    {render:function(_,__ ,data){
                      return  `
                        <td >
                            <div class="cursor-pointer text-center h-[105px]  w-[100px] bg-center bg-cover bg-[url('${url+"/assets/facility/"+data.facility_image}')] bg-no-repeat">
                            </div>
                        </td>`
                    } },
                    { data: 'facility_name' },
                    { data: 'start_date' },
                    {data:'end_date'},
                    { data: 'start_time' },
                    {data:'end_time'},
                    {data:'purpose'},
                    {data:'participants'},
                    {render:()=>'<p class="text-green-500 font-semibold">Approved</p>'},
                    { render:function(_,__,data){
                        return ` <td class="relative">
                              <button id="viewSchedule"  class=" ml-1 text-blue-500 text-sm  text-center p-1  transition-all " type="button">
                                 <svg class="h-4 w-4 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>       
                              </button>
                            </td>
                      `}}
                   ]
                });
           

        }
      })
      
  }
  
  function addSchedule(id,url){
   setTimeout(()=>{
    calendarDisplay(id,url)
   },500)

   $('.fc-today-button').click(function(){
    setTimeout(()=>{
        calendarDisplay(id,url)
       },500)
    });
    $('.fc-prev-button span').click(function(){
    setTimeout(()=>{
        calendarDisplay(id,url)
        },500)
    });
    
    $('.fc-next-button span').click(function(){
    setTimeout(()=>{
        calendarDisplay(id,url)
        },500)
    });

    $("#add-schedule-form").submit(function(e){
      e.preventDefault()
      $("#loading").show()
      const formData = new FormData(e.currentTarget)
      formData.append("facility_id",id)
      
  
      $.ajax({
        type:"POST",
        data:formData,
        processData: false,
        contentType: false,
        url:url +"/controller/administrative/facility-reservation.php/createScheduleFacility/",
        success:function(res){
            $("#loading").hide()
             Swal.fire({
              icon: 'success',
              title: res.message,
              showConfirmButton: false,
              timer: 1500
              })
        }
      })


  
      $("#add-schedule-form")[0].reset()
    })
  }

  function viewScheduleReport(data ,url){
    console.log(data)
    const imageCon = $("#image-container")[0];
    const facilityDetails = $("#facility-details")[0];

    imageCon.innerHTML = `<div class="cursor-pointer text-center h-[250px]  w-[250px] bg-center bg-cover bg-[url('${url+"/assets/facility/"+data.facility_image}')] bg-no-repeat">
    </div>`

    facilityDetails.innerHTML= `
      <ul class="border-t border-b py-5 my-5">
          <li>Facility Name : <span class="text-gray-500 font-semibold">${data.facility_name}</span></li>
          <li>Recipient Name : <span class="text-gray-500 font-semibold">${data.recipient_name}</span></li>
          <li>Start Date : <span class="text-gray-500 font-semibold">${data.start_date}</span></li>
          <li>End Date : <span class="text-gray-500 font-semibold">${data.end_date}</span></li>
          <li>Start Time : <span class="text-gray-500 font-semibold">${data.start_time}</span></li>
          <li>End Date : <span class="text-gray-500 font-semibold">${data.end_time}</span></li>
          <li>Participants : <span class="text-gray-500 font-semibold">${data.purpose}</span></li>
          <li>Purpose : <span class="text-gray-500 font-semibold">${data.recipient_name}</span></li>
          <li>Status : <span class="text-orange-500 font-semibold">Pending</span></li>
      </ul>
    `

    $("#submit-details").click(function(){
      
    imageCon.innerHTML = `<div class="cursor-pointer text-center mx-auto h-[250px]  w-[250px] bg-center bg-cover bg-[url('${url+"/assets/facility/"+data.facility_image}')] bg-no-repeat">
    </div>`
         facilityDetails.innerHTML= `
         <div class="border-t border-b py-5 my-5">
                <form class="space-y-2 mb-10" id="edit-schedule-pending-form">
                <div>
                    <label for="recipient_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Recipient Name</label>
                    <input type="text" id="recipient_name" name="recipient_name"  value="${data.recipient_name}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                    <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                    <input type="text" id="edit_start_date" name="start_date"  value="${data.start_date}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                    <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                    <input type="text" name="end_date"  value="${data.end_date}" id="edit_end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                    <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Time</label>
                    <input type="time" name="start_time"  value="${data.start_time}" id="start_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                    <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Time</label>
                    <input type="time" name="end_time"  value="${data.end_time}" id="end_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                    <label for="capacity_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Participants</label>
                    <input type="number" name="capacity_input"  value="${data.participants}" id="capacity_input" min="0" max="${data.capacity}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                    <label for="puspose" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puspose</label>
                    <input type="text" name="puspose"  value="${data.purpose}" id="puspose"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                
                <div class="flex justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agree to the terms and conditions policy?</label>
                    </div>
                </div>
            <button type="submit" class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </form>
         </div>
    `

    $("#edit_start_date").datepicker({
      changeDate: true,
      changeMonth: true,
      changeYear: true,
      minDate:new Date()
  });

  $("#edit_end_date").datepicker({
      changeDate: true,
      changeMonth: true,
      changeYear: true,
      minDate:new Date()
  });


    $("#edit-schedule-pending-form").submit(function(e){
      e.preventDefault()
      $("#loading").show()
      const formData = new FormData(e.currentTarget)
      formData.append("facility_id",data.schedule_facility_id);

      $.ajax({
        type:"POST",
        processData: false,
        contentType: false,
        url:url+"/controller/administrative/facility-reservation.php/editScheduleFacility",
        data:formData,
        success:function(res){

            if(res.success){
                    $("#loading").hide()
                  return Swal.fire({
                    icon: 'success',
                    title: res.message,
                    showConfirmButton: false,
                    timer: 1500
                    }).then(()=>{
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
    })

    
    $("#reset-details").click(function(e){
      imageCon.innerHTML = `<div class="cursor-pointer text-center h-[250px]  w-[250px] bg-center bg-cover bg-[url('${url+"/assets/facility/"+data.facility_image}')] bg-no-repeat">
      </div>`
  
      facilityDetails.innerHTML= `
      <ul class="border-t border-b py-5 my-5">
          <li>Facility Name : <span class="text-gray-500 font-semibold">${data.facility_name}</span></li>
          <li>Recipient Name : <span class="text-gray-500 font-semibold">${data.recipient_name}</span></li>
          <li>Start Date : <span class="text-gray-500 font-semibold">${data.start_date}</span></li>
          <li>End Date : <span class="text-gray-500 font-semibold">${data.end_date}</span></li>
          <li>Start Time : <span class="text-gray-500 font-semibold">${data.start_time}</span></li>
          <li>End Date : <span class="text-gray-500 font-semibold">${data.end_time}</span></li>
          <li>Participants : <span class="text-gray-500 font-semibold">${data.purpose}</span></li>
          <li>Purpose : <span class="text-gray-500 font-semibold">${data.recipient_name}</span></li>
          <li>Status : <span class="text-orange-500 font-semibold">Pending</span></li>
      </ul>
    `
    })

    
    $("#approved-details").click(function(e){
      alert('approved')
    })



  }
  
  
  
  