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
<div id="loading" class="hidden bg-gray-100 backdrop-blur-sm overflow-hidden w-full h-full fixed z-[200] flex justify-center items-center">
          <div class="h-screen bg-white w-full">
              <div class="flex justify-center items-center h-full">
                  <img class="h-16 w-16" src="https://icons8.com/preloaders/preloaders/1488/Iphone-spinner-2.gif" alt="">
              </div>
          </div>
      </div>
<div class="min-h-screen flex ">
    <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow flex flex-col ">
        <?php include("$dir/layout/header-nav.php");?>
            <div class="w-full  flex-1 bg-white  p-4 ">
            <div class="w-full h-[50px]  mb-10 flex gap-x-2">
                <div class="w-[250px] h-auto relative ">
                  <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Select to generate document</option>
                    <option value="employee">Employee Contracts</option>
                    <option value="project">Project Contract</option>
                    <option value="complains">Complains </option>
                  </select>
                </div>
                <div>
                <button
                class=" flex  items-center whitespace-nowrap rounded  inline-block rounded bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                    data-te-toggle="modal"
                    data-te-target="#exampleModalLg"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    Request Document
                  </button>
                </div>
              </div>
              <div class="relative w-full p-4 font-fam mb-10">
               <h1 class="text-xl font-semibold my-10">Request Document</h1>
                          <div class="relative overflow-x-scroll">
                              <table id="legal_req_doc" class=" text-sm text-left text-gray-500 dark:text-gray-400 " >
                                        <thead>
                                            <tr id="table-header-option">
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Purpose</th>
                                                <th>Request At</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body" class="overflow-x-scroll ">
                                        </tbody>
                                      <tfoot>
                                          <tr id="table-header-option">
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Department</th>
                                                <th>Purpose</th>
                                                <th>Request At</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                          </tr>
                                      </tfoot>
                                </table>
                            </div>
                        </div>
             
               <div class="relative w-full p-4 font-fam mb-10">
                <h1 class="text-xl font-semibold my-10">Customers Feedback</h1>
                          <div class="relative overflow-x-scroll">
                              <table id="legal_feedback" class=" text-sm text-left text-gray-500 dark:text-gray-400 " >
                                        <thead>
                                            <tr id="table-header-option">
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body" class="overflow-x-scroll ">
                                        </tbody>
                                      <tfoot>
                                          <tr id="table-header-option">
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                          </tr>
                                      </tfoot>
                                </table>
                            </div>
                        </div>
                   


                        
            </div>
      </div>
  </div>


  <div
    data-te-modal-init
    class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="exampleModalLg"
    tabindex="-1"
    aria-labelledby="exampleModalLgLabel"
    aria-modal="true"
    role="dialog">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px]">
    <div
      class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="exampleModalLgLabel">
          Large modal
        </h5>
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="relative p-4">
            <form class="space-y-6" id="reqest_legal_docu">
                        
                        <div>
                        <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select id="department"  name="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </select>
                        </div>
                        <div>
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                            <select id="position" name="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </select>
                        </div>
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Empoyee Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="purpose" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purpose</label>
                            <input type="text" name="purpose" id="purpose"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit Request</button>
                    </form>

      </div>
    </div>
  </div>
</div>



<!-- Main modal -->
<div id="authentication-modal" class="   fixed top-0 left-0 right-0 z-[200] hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="w-full h-full relative flex justify-center items-center">
        <div  class="relative lg:w-[700px] w-full h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" id="close-modal" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div  id="container" class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Generate Document</h3>
                   
                </div>
            </div>
        </div>
    </div>
</div> 
 
  
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

  <script>
    $("#reqest_legal_docu").submit(function(e){
        e.preventDefault()
        const formData = new FormData(e.currentTarget)
      $.ajax({
              url:"<?php echo "$url/controller/administrative/legal-management.php/createRequestLegal" ?>",
              type:"POST",
              data:formData,
              processData: false,
              contentType: false,
              success:function(res){
                console.log(res)
                if(res.success){
                  $("#edit-request-modal").hide()
                   return   Swal.fire(
                        'Account Created!',
                        res.message,
                        'success'
                      ).then(()=>{
                      window.location.reload()
                    })
                 }
              }
            })
            $("#reqest_legal_docu")[0].reset()
          })


        $.ajax({
      url:"<?php echo "$url/controller/administrative/user-management.php/getAllPosition" ?>",
      type:"GET",
      success:function(res){
        const data = JSON.parse(res)
        const position = document.getElementById('position')
        const department = document.getElementById('department')
        data.position.forEach((data) => {
          position.innerHTML += `<option value="${ data.position_id}">${data.position_name}</option>`
        });
        data.department.forEach((data) => {
          department.innerHTML += `<option value="${ data.department_id}">${data.department_name}</option>`
        });
      }
    })

    $("#countries").change(function(e){
     if(e.target.value === 'employee'){
        $("#authentication-modal").show()

        $("#container")[0].innerHTML = `
        <div class="my-5 text-lg fotn-semibold">Employee Contract</div>
        <form class="space-y-6" id="generate_legal_docu">
                        <div>
                            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employee Fullname</label>
                            <input type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employee Fullname</label>
                            <input type="number" name="salary" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                            <input type="date" name="date" id="date"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
        
        `

        $("#generate_legal_docu").submit(function(e){
            e.preventDefault()
            const formData = new FormData(e.currentTarget)
          generateLegalDocumentEmployee(formData.get('date'),formData.get('fullname'),formData.get('salary'),formData.get('start_date'))
        })
     }else  if(e.target.value === 'project'){
      $("#authentication-modal").show()
      $("#container")[0].innerHTML = `
        <div class="my-5 text-lg fotn-semibold">Project Contract</div>
        <form class="space-y-6" id="generate_legal_docu_proj">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                            <input type="text" name="name" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="company_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Name</label>
                            <input type="text" name="company_name" id="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="customer_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Name</label>
                            <input type="text" name="customer_name" id="customer_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="complaint_subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complaint Subject</label>
                            <input type="text" name="complaint_subject" id="complaint_subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="cause_complaint" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cause Complaint</label>
                            <input type="text" name="cause_complaint" id="cause_complaint"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
        
        `

      $("#generate_legal_docu_proj").submit(function(e){
            e.preventDefault()
            const formData = new FormData(e.currentTarget)
            generateLegalDocumentProject(
              formData.get('name'),
              formData.get('company_name'),
              formData.get('customer_name'),
              formData.get('complaint_subject'),
              formData.get('cause_complaint')
              )
        })
    }else  if(e.target.value === 'complains'){
      $("#authentication-modal").show()
    }else{
      $("#authentication-modal").show()
      return
    }
      $("#close-modal").click(function(){
        $("#authentication-modal").hide()
      })

     
   
    })
    function generateLegalDocumentEmployee(date,fullname,salary,start_date){

     const generateLegalDocument =  $("#container")[0];
     generateLegalDocument.innerHTML =
     `
           <div class='bg-white z-[100] p-4 m-2 shadow-xl'>
                <h1 class="my-5 text-xl font-semibold">Employee Contract</h1>
                
                <h2 class=" text-md font-semibold">Introduction</h2>
                <p  class=" text-sm font-semibold mb-4">This employee contract the "Agreement" is made and entered into on ${`<span class="text-green-500">${date}</span>`}, by and between ${`<span class="text-green-500">${fullname}</span>`}.</p>
                
                <h2 class=" text-md font-semibold">Employment</h2>
                <p class=" text-sm font-semibold mb-4">${`<span class="text-green-500">${fullname}</span>`} agrees to employ Employee as [position] on a full-time basis, and Employee agrees to accept such employment and to perform the duties and responsibilities associated with the position to the best of their ability.</p>
                
                <h2 class=" text-md font-semibold">Compensation and Benefits</h2>
                <p class=" text-sm font-semibold mb-4">Employee will be paid a salary of ${`<span class="text-green-500">${salary}</span>`} per year, which will be paid in [frequency] installments. In addition to salary, Employee will be eligible for the following benefits: [list of benefits].</p>
                
                <h2 class=" text-md font-semibold">Term and Termination</h2>
                <p class=" text-sm font-semibold mb-4">This Agreement shall commence on   ${`<span class="text-green-500">${start_date}</span>`} and shall continue until terminated by either party. Either party may terminate this Agreement at any time and for any reason by providing [notice period] days' written notice to the other party.</p>
                
                <h2 class=" text-md font-semibold">Confidentiality and Non-Competition</h2>
                <p class=" text-sm font-semibold mb-4">Employee agrees to maintain the confidentiality of all confidential information belonging to ${`<span class="text-green-500">${fullname}</span>`} and not to engage in any activities that would compete with ${`<span class="text-green-500">${fullname}</span>`}'s business during the term of this Agreement and for a period of [non-compete period] months following termination of this Agreement.</p>
                
                <h2 class=" text-md font-semibold">Applicable Law</h2>
                <p class=" text-sm font-semibold mb-4">This Agreement shall be governed by and construed in accordance with the laws of the state of [state].</p>
                
                <h2 class=" text-md font-semibold">Entire Agreement</h2>
                <p class=" text-sm font-semibold mb-4">This Agreement constitutes the entire agreement between ${`<span class="text-green-500">${fullname}</span>`} and Employee and supersedes all prior negotiations, understandings, and agreements between the parties.</p>
                <button class="mt-10 mb-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Save
                  </button>
                </div>
      `

    }

    function generateLegalDocumentProject(name,company_name,customer_name,complaint_subject,cause_complaint){
      const generateLegalDocument =  $("#container")[0];
     generateLegalDocument.innerHTML = `
      <h1 class="my-5 text-xl font-semibold" >Complaint Response</h1>
        
        <h2>Dear ${`<span class="text-green-500">${customer_name}</span>`},</h2>
        
        <p>Thank you for reaching out to us with your concerns regarding ${`<span class="text-green-500">${complaint_subject}</span>`}. We are sorry to hear that you have experienced [complaint details] and would like to assure you that we take your feedback seriously.</p>
        
        <p>After investigating the matter further, we have identified ${`<span class="text-green-500">${cause_complaint}</span>`} and are taking steps to ensure that this does not happen again in the future.</p>
        
        <p>We would like to offer our sincerest apologies for any inconvenience caused by this issue. As a gesture of goodwill, we would like to offer you [compensation or solution].</p>
        
        <p>If you have any further concerns or questions, please do not hesitate to contact us. We are committed to providing you with the best possible service and will do our utmost to resolve any issues that arise.</p>
        
        <p>Thank you for your understanding and patience in this matter.</p>
        
        <p class="success">Sincerely,</p>
        <p class="success">${`<span class="text-green-500">${name}</span>`}</p>
        <p class="success">${`<span class="text-green-500">${company_name}</span>`}</p>
        
        <p class="my-5 text-md font-semibold">Please note that this email is for informational purposes only and does not constitute a legally binding agreement or acceptance of liability on our part.</p>
        <button class="mt-10 mb-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Save
        </button>
        `
    }

  </script>
  <script>
  let timeout = 0
async function fetchData(url,cb) {
    clearTimeout(timeout);
    const res =  JSON.parse((await $.ajax({
      url:url,
      type:"GET"
    })))
    if (res.affect > 0) {
      cb();
    }
    timeout = setTimeout(() => {
      fetchData(cb);
    }, 100);
    return res;
  }

  async function initializeDisplay(url,cb) {
    const data = await fetchData(url,function (){
          initializeDisplay(url,cb)
      })
    cb(data)
  }

  async function initFetchRequestTable(url,cb) {
      initializeDisplay(url,cb)
  }
  
  function displayTable(data,id ,cb){
    const params_data = data;
    const url = "<?php echo $url?>"

   table = $(`#${id}`).DataTable({
    responsive:true,
      data:data,
      columns:cb()
    });

  }
 
  function tableDropDownFunc(id){
  document.querySelectorAll(`#${id} #dropdownDefaultButton`).forEach((el,i)=>{
              el.addEventListener("click",function(e){
                e.stopPropagation();
                document.querySelectorAll("#dropdown-option-table").forEach((ell,idx)=>{
                    if(idx !== i){
                      ell.classList.add('hidden')
                     return;
                    }
                  })
                document.querySelectorAll("#dropdown-option-table")[i].classList.toggle('hidden')
              })
          })

      $('body').click(function (event) {
          document.querySelectorAll("#dropdown-option-table").forEach((ell)=>{
                  ell.classList.add('hidden')
            })
      });
  
}

  function otherStaffForTable(data,id){
   $(`#${id} tbody`).on('click', 'tr', function () {
        $(this).toggleClass('selected');
    });

    $(`#${id} tbody tr`).on('click', 'tr', function () {
        $(this).toggleClass('selected');
    });

    $('#select-all-button').click(function () {
      $(`#${id} > tbody > tr`).each(function () {
     
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
  
  const url1 = "<?php  echo $url."/controller/administrative/legal-management.php/get_all_feedback"?>"
  const url2 = "<?php  echo $url."/controller/administrative/legal-management.php/getAllLegalRequestDocu"?>"

  
  $(document).ready(function () { 
        initFetchRequestTable(url1,function(res){
          const data = res.feedback
          $("#legal_feedback").DataTable().clear().draw();
          $("#legal_feedback").DataTable().destroy();
          displayTable(data,'legal_feedback',function(){
            return [
                { data: 'email' },
                { render: (_,__,data)=>data.message.length >= 15 ? `${data.message.slice(0, 15)}...` : data.message},
                { render:()=>`
                  <td class="relative">
                <button 
                type="button"
                data-te-toggle="modal"
                data-te-target="#viewRequest"
                data-te-ripple-init
                data-te-ripple-color="light"
               
                    class='text-blue-500 '>
                        <svg class="h-4 w-4 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>                         
                </button>
                 ${'<?php echo  $_SESSION['user']['department_id'] ?>' ==='8' ? '<button id="dropdownDefaultButton"  class=" ml-1 text-blue-500 text-sm  text-center p-1 border transition-all " type="button"><svg  class="w-4 h-4 transition-all " aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>':''}
                      <div id="dropdown-option-table" class="absolute right-10  z-[100]  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700">
                          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 " >
                            <li class="border-b">
                              <p   class="cursor-pointer flex gap-x-1 items-center block tracking-[1px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="h-5 w-5 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
                              Send response</p>
                            </li>
                            
                          </ul>
                      </div>
                </td>
                      ` }
              ]
          })
          otherStaffForTable(data,"legal_feedback")
          tableDropDownFunc('legal_feedback')
       })    

       initFetchRequestTable(url2,function(res){
        const data = res.request
          $("#legal_req_doc").DataTable().clear().draw();
          $("#legal_req_doc").DataTable().destroy();
          displayTable(data,'legal_req_doc',function(){
              return [
                    {data:"name"},
                    {data:"position_name"},
                    {data:"department_name"},
                    { render: (_,__,data)=>data.purpose.length >= 15 ? `${data.purpose.slice(0, 15)}...` : data.purpose},
                    {render:(_,__,data)=>(new Date(parseInt(data.requestAt) * 1000)).toLocaleDateString()},
                    {render:(_,__,data)=>{
                      return  `
                        ${
                          data.status_id === '1' ? '<p class="text-green-500">Approved</p>' :
                          data.status_id === '2' ? '<p class="text-orange-500">Pending</p>' :
                        '<p class="text-red-500">Declined</p>' 
                        }
                      `
                    }},
                    {render:()=>`
                      <td class="relative">
                <button 
                type="button"
                data-te-toggle="modal"
                data-te-target="#viewRequest"
                data-te-ripple-init
                data-te-ripple-color="light"
               
                    class='text-blue-500 '>
                        <svg class="h-4 w-4 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>                         
                </button>
                 ${'<?php echo  $_SESSION['user']['department_id'] ?>' ==='8' ? '<button id="dropdownDefaultButton"  class=" ml-1 text-blue-500 text-sm  text-center p-1 border transition-all " type="button"><svg  class="w-4 h-4 transition-all " aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>':''}
                      <div id="dropdown-option-table" class="absolute right-10  z-[100]  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700">
                          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 " >
                            <li class="border-b">
                              <p   class="cursor-pointer flex gap-x-1 items-center block tracking-[1px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="h-5 w-5 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
                              Send response</p>
                            </li>
                            
                          </ul>
                      </div>
                </td>
                      `}
              ]
          })
          otherStaffForTable(data,"legal_req_doc")
          tableDropDownFunc('legal_req_doc')
       })    

  });

  </script>

</body>
</html>


  
