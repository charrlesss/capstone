<?php
  include("../../../dotenv.php");
  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("visible_for_integ.php");

?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <!-- datepicker start -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<!-- datepicker end -->


<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" rel="stylesheet" />
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Alata&family=Anek+Gurmukhi:wght@100;200;400&family=Barlow:ital,wght@1,200&family=Bebas+Neue&family=Pathway+Gothic+One&family=Plus+Jakarta+Sans:wght@200&family=Roboto&display=swap');
    .font-fam {
      font-family: 'Roboto', sans-serif;
      }
    .dataTables_length   select {
      font-family: 'Roboto', sans-serif;
      width: 75px;
    }
    .ui-datepicker { width: 17em; padding: .2em .2em 0; display: none; z-index: 2000 !important;}
    .swal2-container.swal2-backdrop-show, .swal2-container.swal2-noanimation {
      z-index: 20000 !important;
    }
    tbody .fc-day, .fc-day-top{
        cursor:pointer;
    }
    tbody .fc-day:hover{
        background:#a7f3d0;
    }
    .fc-daygrid-day-top a {
    color: #4f46e5;
    font-size:18px;
    font-weight:600
    }
</style>

</head>
<body>
<div class="min-h-screen flex ">

      <div id="loading" class="hidden bg-gray-100 backdrop-blur-sm overflow-hidden w-full h-full fixed z-[200] flex justify-center items-center">
          <div class="h-screen bg-white w-full">
              <div class="flex justify-center items-center h-full">
                  <img class="h-16 w-16" src="https://icons8.com/preloaders/preloaders/1488/Iphone-spinner-2.gif" alt="">
              </div>
          </div>
      </div>

    <?php include("$dir/layout/sidebar-nav.php") ?>
    <div class="bg-indigo-50 flex-grow flex flex-col ">
        <?php include("$dir/layout/header-nav.php");?>
          <div class="w-full  flex-1 bg-white  p-4 ">

                <div class=" md:w-[300px]">
                <label for="docu_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">Select Document Type</label>
                    <select id="docu_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value='legal'>Legal Documents</option>
                      <option value="transaction">Transactions</option>
                      <option value="v-req">Visitor Request</option>
                      <option value="v-acc">Visitors Accounts</option>
                      <option value="admin-acc">Admin Accounts</option>
                    </select>
                </div>
                <div class="relative w-full p-4 font-family-karla">
                          <div class="relative overflow-x-scroll">
                              <table id="documents" class=" text-sm text-left text-gray-500 dark:text-gray-400 " >
                                      <thead>
                                          <tr id="table-header-option">
                                              <th>User</th>
                                              <th>Contact Number</th>
                                              <th>Country</th>
                                              <th>Birthdate</th>
                                              <th>Gender</th>
                                              <th>Department</th>
                                              <th>Position</th>
                                              <th>Created</th>
                                          </tr>
                                      </thead>
                                        <tbody id="table-body" class="overflow-x-scroll ">
                                        </tbody>
                                      <tfoot>
                                          <tr id="table-header-option">
                                                <th>User</th>
                                                <th>Contact Number</th>
                                                <th>Country</th>
                                                <th>Birthdate</th>
                                                <th>Gender</th>
                                                <th>Department</th>
                                                <th>Position</th>
                                                <th>Created</th>
                                          </tr>
                                      </tfoot>
                                </table>
                            </div>
                        </div>
            </div>
      </div>
  </div>

  
<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>



<script>
let timeout = 0
async function fetchData(url,cb) {
    clearTimeout(timeout);
    const res =  await $.ajax({
      url:url,
      type:"GET"
    })
    if (res.affect > 0) {
      cb();
    }
    timeout = setTimeout(() => {
      fetchData(cb);
    }, 100);


    return res;
  }

  async function initializeDisplay(url,cb) {
    const data = await fetchData(url ,function (){
          initializeDisplay(cb)
      })
    cb(data)
  }

  async function initFetchRequestTable(url,cb) {
      initializeDisplay(url,cb)
  }
  
  function displayTable(data ,cb){
    const params_data = data;
    const url = "<?php echo $url?>"

   table = $('#documents').DataTable({
    responsive:true,
      data:data,
      columns:cb()
    });

  }


  function otherStaffForTable(data){
   $('#created-req-table tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
    });

    $('#created-req-table tbody tr').on('click', 'tr', function () {
        $(this).toggleClass('selected');
    });

    $('#select-all-button').click(function () {
      $("#created-req-table > tbody > tr").each(function () {
     
        $(this)[0].classList.toggle('selected') 
      });   

    });


    $("#remove-all-button").click(function(){
      if(table.rows('.selected').data().length <= 0){
        return Swal.fire({
                  icon: 'warning',
                  title: "You need to select row !",
                  showConfirmButton: true
              })
        }

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

                const allData = table.rows('.selected').data().toArray();
                const formData = JSON.stringify(allData);
                // $.ajax({
                //     url:"<?php echo "$url/controller/administrative/facility-reservation.php/removeAllFacility" ?>",
                //     type:"POST",
                //     data:{data:formData},
                //     cache: false,
                //     success:function(res){
                //         $("#loading").hide()
                //         Swal.fire(
                //           'Deleted!',
                //           'Your file has been deleted.',
                //           'success'
                //         )
                      
                //     }
                // })


              }
          })
    })
   
    $("#export-button").click(function(){
      if(table.rows('.selected').data().length <= 0){
        return Swal.fire({
                  icon: 'warning',
                  title: "You need to select row !",
                  showConfirmButton: true
              })
        }
          const allData = table.rows('.selected').data().toArray();
          const formData = JSON.stringify(allData);
           $.ajax({
                  url:"<?php echo "$url/controller/administrative/visitor-management.php/exportRequest" ?>",
                  type:"POST",
                  data:{data:formData},
                  cache: false,
                  success:function(res){
                    console.log(res.array)
                    console.log(allData)
                        const a = document.createElement('a');
                        a.href = res.file;
                        a.download = `file.xls`;
                        a.style.display = 'none';
                        document.body.appendChild(a);
                        a.click();
                }
            })

    })


  
}


  </script>

  <script>
    $(document).ready(function () { 
      const url = "<?php  echo $url."/controller/administrative/user-management.php/get_all_accounts"?>" 
      initFetchRequestTable(url ,function(res){
        const data = (JSON.parse(res)).accounts
        $("#documents").DataTable().clear().draw();
        $("#documents").DataTable().destroy();
        displayTable(data,function(){
        return [
              {render:function(_,__ ,data){
                return  `
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  <div class='flex gap-x-2'>
                      <img
                          class="p-1 md:w-8 md:h-8 w-6 h-6 rounded-full ring-2  ring-indigo-300 dark:ring-indigo-500"
                          src="<?php echo "$url/assets/profile/" ?>${data.profile}"
                          alt="logo"
                      />
                      <div>
                          <p>${data.firstname} ${ data.middlename} ${data.lastname}</p>
                          <p class='text-gray-400'>${data.email}</p>
                      </div>
                  </div>
                </td>`
              } },
              { data: 'contact_number' },
              { data: 'country'},
              { data: 'birthdate' },
              { data: 'gender' },
              { data: 'department_name' },
              { data: 'position_name' },
              { data: 'createdAt_account' }
            ]
        })
        otherStaffForTable(data)
    })    
  });

  $('#docu_type').on('change', function() {
 switch(this.value){
  case  "legal" :
    console.log(this.value)
    break
    case  "transaction" :
    console.log(this.value)
    break
    case  "v-req" :
    console.log(this.value)
    break
    case  "v-acc" :
    const logVisitorURL = "<?php  echo $url?>";

    const vAccUrl = "<?php echo "$url/controller/administrative/visitor-management.php/getAllVisitorsAccount" ?>" 
      initFetchRequestTable(vAccUrl ,function(res){
              console.log(res.request_created)
              $("#documents").DataTable().clear().draw();
        $("#documents").DataTable().destroy();
        displayTable(res.request_created,function(){
        return [
              {render:function(_,__ ,data){
                return  `
                  <td >
                      <div class="text-center flex justify-start w-full">
                        <img
                            class="object-cover h-16 w-auto"
                            src="${"<?php echo $url ?>" + "/assets/request-appointment-id-picture/"+data.IDpicture_filename}"
                            alt="logo"
                        />
                      </div>
                  </td>`
              } },
              { data: 'fullname' },
              { data: 'log_visitor_status_name' },
              { render:function(_,__,data){
                return (new Date(parseInt(data.createdAt) * 1000)).toLocaleString() 
              } },
              {render:function(_,__,data){
                return  `
                  <td >
                      <div class="text-center flex justify-start w-full">
                        <a href="${"<?php echo $url ?>" + "/assets/qr-code/"+data.qrcode_filename}" ">
                          <img
                              class="object-cover h-16 w-auto"
                              src="${"<?php echo $url ?>" + "/assets/qr-code/"+data.qrcode_filename}"
                              alt="logo"
                          />
                        </a>
                      </div>
                  </td>`
              }},
              { data: 'fullname' },
            ]
        })
        otherStaffForTable(res.request_created)
        }) 
    break
    case  "admin-acc" :
      const url = "<?php  echo $url."/controller/administrative/user-management.php/get_all_accounts"?>" 
      initFetchRequestTable(url ,function(data){
        $("#documents").DataTable().clear().draw();
        $("#documents").DataTable().destroy();
        displayTable(data,function(){
        return [
              {render:function(_,__ ,data){
                return  `
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  <div class='flex gap-x-2'>
                      <img
                          class="p-1 md:w-8 md:h-8 w-6 h-6 rounded-full ring-2  ring-indigo-300 dark:ring-indigo-500"
                          src="<?php echo "$url/assets/profile/" ?>${data.profile}"
                          alt="logo"
                      />
                      <div>
                          <p>${data.firstname} ${ data.middlename} ${data.lastname}</p>
                          <p class='text-gray-400'>${data.email}</p>
                      </div>
                  </div>
                </td>`
              } },
              { data: 'contact_number' },
              { data: 'country'},
              { data: 'birthdate' },
              { data: 'gender' },
              { data: 'department_name' },
              { data: 'position_name' },
              { data: 'createdAt_account' }
            ]
        })
        otherStaffForTable(data)
    }) 
    // console.log(this.value)
    break
 }
                     
  });


  </script>

</body>
</html>




