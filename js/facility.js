

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
    addLogVisitor(url)
    addSchedule(url)
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
            return '<p class="text-green-500 ">Approved</p>'
          }}

        ]
      })
    }
  })


}

function addSchedule(url){

  $("#add-schedule-form").submit(function(e){
    e.preventDefault()
    $("#loading").show()
    const formData = new FormData(e.currentTarget)
    formData.append("facility_id",window.localStorage.getItem('facility_num'))
    

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



