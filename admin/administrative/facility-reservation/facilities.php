  <?php
  include("../../../dotenv.php");
  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

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
          

            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
                    <div class="container flex flex-wrap items-center justify-between mx-auto">
                    <div class="items-center justify-between flex w-auto order-1" id="navbar-cta">
                      <ul class="flex  py-4  border border-gray-100 rounded-lg bg-gray-50 flex-row space-x-8 mt-0 text-sm font-medium border-0 bg-white dark:bg-gray-800 dark:bg-gray-900 dark:border-gray-700">
                      <li>
                          <button  
                            data-te-toggle="modal"
                            data-te-target="#logVisitor"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            class=" flex  items-center whitespace-nowrap rounded  inline-block rounded bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                           >
                              Create Facility
                          </button>
                        </li>
                      <li>
                          <button 
                            data-te-ripple-init
                            data-te-ripple-color="info"
                            id="select-all-button"
                            class=" flex  items-center whitespace-nowrap rounded  inline-block rounded bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            >
                            Select All
                          </button>
                        </li>
                        <li>
                          <button 
                            data-te-ripple-init
                            data-te-ripple-color="info"
                            id="remove-all-button"
                            class=" flex  items-center whitespace-nowrap rounded  inline-block rounded bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"

                            >
                            Remove All
                          </button>
                        </li>
                        <li>
                          <button 
                           data-te-toggle="modal"
                            data-te-target="#editingButton"
                            data-te-ripple-init
                            data-te-ripple-color="info"
                            id='editing-modal'
                            class=" flex  items-center whitespace-nowrap rounded  inline-block rounded bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            >
                            Edit
                          </button>
                        </li>
                        <li>
                          <button  
                            data-te-ripple-init
                            data-te-ripple-color="info" 
                            id="export-button"
                            class=" flex  items-center whitespace-nowrap rounded  inline-block rounded bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                           >
                            Export
                          </button>
                        </li>
                      </ul>
                    </div>
                    </div>
                  </nav>
                  <div id="parent-table" class="relative z-[1]  md:w-auto w-full font-fam ">
                  <table id="example" class="display w-full ">
                      <thead>
                          <tr id="table-header-option">
                              <th>Facility Image</th>
                              <th>Facility Name</th>
                              <th>Location</th>
                              <th>Availability</th>
                              <th>Capacity</th>
                              <th>Schedule</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                          <tr id="table-header-option">
                            <th>Facility Image</th>
                              <th>Facility Name</th>
                              <th>Location</th>
                              <th>Availability</th>
                              <th>Capacity</th>
                              <th>Schedule</th>
                          </tr>
                      </tfoot>
                  </table>
                  </div>
          </div>
    </div>
</div>


<!-- create facility -->
<div
      data-te-modal-init
      class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
      id="logVisitor"
      tabindex="-1"
      aria-labelledby="logVisitor"
      aria-modal="true"
      role="dialog">
      <div
        data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div
          class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
          <div
            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
            <h5
              class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
              id="logVisitorLabel">
              Log Visitor
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
          <div class="px-6 py-6 lg:px-8">
                  <form class="space-y-2 mb-10" id="add-facility-form">
                     <div>
                          <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility Image</label>
                          <div id="img-con"  class="w-auto h-auto relative"></div>
                          <input type="file" id="imgInp" name="file" id="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                      </div>
                      <div>
                          <label for="facility_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility Name</label>
                          <input type="text" name="facility_name" id="facility_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                      </div>
                      <div>
                          <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility Location</label>
                          <input type="text" name="location" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                      </div>
                      <div>
                          <label for="availability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Facility Availability</label>
                          <select name='availability' id="availability" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </select>
                      </div>
                      <div>
                          <label for="capacity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility Capacity</label>
                          <input type="number" name="capacity" id="capacity"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
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
      </div>
    </div>
  </div>
</div> 
<!-- view req -->
 <div
      class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
      data-te-modal-init
      id="viewRequest"
      tabindex="-1"
      aria-labelledby="viewRequestLabel"
      aria-modal="true"
      role="dialog"
      >
        <div
        data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out  w-auto  min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
        <div
          class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
          <div
            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
            <h5
              class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
              id="viewRequestLabel">
              Visitor Log 
            </h5>
            <button
              type="button"
              class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
              data-te-modal-dismiss
              aria-label="Close"
              id="close-view-modal"
              >
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
            <div class=" relative  w-full  p-3 ">
                <p id="status" class='absolute border top-2 right-2 p-1 rounded-lg'></p>
                <div id="view-option" class="z-[100] absolute top-11 flex flex-col gap-y-2 right-0 bg-white p-2">
                  
                </div>
               
                <div class="w-full relative h-auto  ">

                <div class="flex  w-auto items-center gap-x-1 mb-14">
                    <p class="text-xs font-bold">Date: </p>
                    <div class="w-auto border-b-2 border-black">
                    <p id="ceatedAt" class="text-xs  w-auto font-semibold  text-left "> </p>
                    </div>
                </div>

                <div class=" relative flex justify-start flex-col  w-full mb-3">
                    <div class="flex  w-auto items-center gap-x-1 pb-2  mb-3">
                        <p class="text-xs font-bold ">Name : </p>
                        <div class="flex-1 border-b-2 border-black">
                        <p id="rep-name" class="text-xs  w-auto font-semibold  text-left ">
                        </p>
                        </div>
                    </div>
                    <div class="flex gap-x-4 w-full ">
                        <div class="flex  w-full items-center gap-x-1 pb-2">
                        <p class="text-xs font-bold ">Time in: </p>
                        <div class="flex-1 border-black">
                            <p  id="email-view" class="text-xs  w-auto font-semibold  text-left ">
                            </p>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="relative flex justify-start flex-col  w-full">
                    <div class="flex gap-x-4 w-full ">
                        <div class="flex  w-full items-center gap-x-1 pb-2">
                        <p class="text-xs font-bold ">Time out: </p>
                        <div class="w-autoborder-black">
                            <p  id="date-visit"  class="text-xs  w-auto font-semibold  text-left ">
                            </p>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="relative w-full h-auto mb-14">
                <div class="block gap-x-4 w-full   mt-14">
                    <div class="flex flex-col flex-wrap w-full  gap-x-1 pb-2">
                    <p class="text-xs font-bold pb-2">Purpose of Visit: </p>
                    <div class="ml-14 flex-1 border-b-2 border-black">
                        <p id="purpose-view" class="text-xs   w-auto font-semibold  text-left ">
                        </p>
                    </div>
                    </div>
                    <div class="block  w-full items-center gap-x-1 ">
                    <div class="flex-1 border-b-2 border-black pb-2">
                        <p class="text-xs h-[1px]  w-auto font-semibold  text-left "></p>
                    </div>
                    <div class="flex-1 border-b-2 border-black pb-2">
                        <p class="text-xs h-[7px]  w-auto font-semibold  text-left "></p>
                    </div>
                    </div>
                </div>
                </div>  
                  <p class="capitalize my-5">ID Picture :</p>
              <div id="id-picture" class="w-full h-[200px] flex lg:justify-start justify-center  ">
                  
              </div>

          </div>
        </div>        
      </div>
    </div>
  </div>
</div> 


<!-- edit facility -->
<div
  data-te-modal-init
  class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="editingButton"
  tabindex="-1"
  aria-labelledby="editingButtonLabel"
  aria-modal="true"
  role="dialog">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
    <div
      class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="editingButtonLabel">
          Update Facility
        </h5>
        <button
          id="close-editing-modal"
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
      <div class="relative p-4 flex justify-center flex-wrap gap-4" id='editing-form-container'>

      </div>
      <div class="relative p-4">
          <button id='update-button'>Update</button>
      </div>
    </div>
  </div>
</div>

<!-- view facility schedule -->
<div
  data-te-modal-init
  class="fixed top-0 left-0 z-[2000] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="viewSchedule"
  tabindex="-1"
  aria-labelledby="viewScheduleLabel"
  aria-modal="true"
  role="dialog"
  >
 
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[0px]:m-0 min-[0px]:h-full min-[0px]:max-w-none">
    <div
      id='parent-modal'
      class="pointer-events-auto relative flex w-full flex-col rounded-md bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600 min-[0px]:h-full min-[0px]:rounded-none min-[0px]:border-0">
      
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 min-[0px]:rounded-none">
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="viewScheduleLabel">
          Facility Schedule
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
            <div>
                <div class="mx-auto lg:w-[500px] lg:h-[350px]  w-[300px] h-[200px]  mt-5">
                  <img id="view-facility-image" class="relative w-full h-full" >
                  <p id="view-facility-name" class=' mb-10 text-xl font-semibold capitalize font-fam'></p>
                </div>
            </div>
            <div class="px-5 my-5">
                <h1 class=" text-xl font-semibold capitalize font-fam">Facility Details</h1>
                <p id="capacity_datails"></p>
                <p id="available_datails"></p>
                <p id="location_datails"></p>
            </div>
            <div class="h-[500px] w-full  mt-10 px-5">
              <p  class=' mt-5 mb-10 text-xl font-semibold capitalize font-fam'>Schedules</p>
              <div class='relative w-full h-auto font-fam  '>
              <table id="sched-table" class="display w-full ">
                      <thead>
                          <tr id="table-header-option">
                              <th>Recipient Name</th>
                              <th>Date Start</th>
                              <th>Date End</th>
                              <th>Time Start</th>
                              <th>Time End</th>
                              <th>Purpose</th>
                              <th>Particapnts</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                          <tr id="table-header-option">
                              <th>Recipient Name</th>
                              <th>Date Start</th>
                              <th>Date End</th>
                              <th>Time Start</th>
                              <th>Time End</th>
                              <th>Purpose</th>
                              <th>Particapnts</th>
                              <th>Status</th>
                      </tfoot>
                  </table>
              </div>

            

            </div>
      </div>
    </div>
  </div>
</div>



<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="<?php echo "$url/js/facility.js"?>"></script>
<script src="<?php echo "$url/js/convert-time.js"?>"></script>

<script>

  let timeout = null

  const logVisitorURL = "<?php  echo $url?>";




async function fetchData(cb) {
    clearTimeout(timeout);
    const res =  await $.ajax({
      url:"<?php echo "$url/controller/administrative/facility-reservation.php/getFacilityAll" ?>",
      type:"GET"
    })
    if (res.affect > 0) {
      cb();
    }
    timeout = setTimeout(() => {
      fetchData(cb);
    }, 100);

    return res.facilities;
  }

  async function initializeDisplay(cb) {
    const data = await fetchData(function (){
          initializeDisplay(cb)
      })
    cb(data)
  }

  async function initFetchRequestTable(cb) {
      initializeDisplay(cb)
  }
  
  function displayTable(data){
    const params_data = data;
    const url = "<?php echo $url?>"

   table = $('#example').DataTable({
      data:data,
      columns:[
        {render:function(_,__ ,data){
          return  `
            <td >
                <div onclick='openImageToURL("${"<?php echo $url ?>" + "/assets/facility/"+data.facility_image}")' class="cursor-pointer text-center h-[105px]  w-[100px] bg-center bg-cover bg-[url('${"<?php echo $url ?>" + "/assets/facility/"+data.facility_image}')] bg-no-repeat">
                </div>
            </td>`
        } },
        { data: 'facility_name' },
        {render:(_,__,data)=>`<div onclick='openToGoogleMap("${data.location}")' class="cursor-pointer w-[100px] text-sm whitespace-nowrap overflow-hidden text-ellipsis	">${data.location}</div>` },
        { data: 'availability' },
        {data:'capacity'},
        {render:function(_,__,data){
          return `
          <button  
            onclick='viewFacilitySchedule(${JSON.stringify(data)} , "${url}")'
            data-te-toggle="modal"
            data-te-target="#viewSchedule"
            data-te-ripple-init
            data-te-ripple-color="light"
            class="z-[100] inline-block rounded bg-success px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)]">
              Schedule
          </button>
          `
        }}
      ]
    });

  }

</script>

<script>
  function otherStaffForTable(data){
   $('#example tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
    });

    $('#example tbody tr').on('click', 'tr', function () {
        $(this).toggleClass('selected');
    });

    $('#select-all-button').click(function () {
      $("#example > tbody > tr").each(function () {
     
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
                $.ajax({
                    url:"<?php echo "$url/controller/administrative/facility-reservation.php/removeAllFacility" ?>",
                    type:"POST",
                    data:{data:formData},
                    cache: false,
                    success:function(res){
                        $("#loading").hide()
                        Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      
                    }
                })


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
  
function openToGoogleMap(location){
    window.open(`https://www.google.com/maps/dir/?api=1&destination=${location}`,"_self")
}
function openImageToURL(link){
  window.open(link,"_self")
}
</script>

<script>
  $(document).ready(function () { 
      initFetchRequestTable(function(data){
        $("#example").DataTable().clear().draw();
        $("#example").DataTable().destroy();
        displayTable(data)
        otherStaffForTable(data)
        handleSubmitedForm(
          logVisitorURL
        )

    })    
  });
</script>


<script>
  $("#start_date").datepicker({
    zIndex:2048,
    template: "modal",
  })

  $("#end_date").datepicker({
    zIndex:2048,
    template: "modal",
  })


</script>

<script>

function imageUrlToFileObject(imageUrl, fileName) {
  return fetch(imageUrl)
    .then(response => response.blob())
    .then(blob => {
      return new File([blob], fileName, { type: blob.type });
    });
}


$("#editing-modal").click(function(){
  if(table.rows('.selected').data().length <= 0){
    $("#close-editing-modal")[0].click()
    return Swal.fire({
              icon: 'warning',
              title: "You need to select row !",
              showConfirmButton: true
          }).then(function(){
           console.log( )
           $("#close-editing-modal")[0].click()
          })
    }
  const allData = table.rows('.selected').data().toArray();
  const length = allData.length;
  const container = $('#editing-form-container')[0];
  container.innerHTML = ''
  allData.forEach((data,i) => {

  
    
    container.innerHTML += `
        <form class=" space-y-2 w-[450px] h-auto" id="edit-facility-form-${i}">
            <div>
                <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility Image</label>
                <div id="img-con"  class="w-auto h-auto relative"></div>
                <input type="file" id="imgInp" name="file" id="file"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
                <label for="facility_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility Name</label>
                <input type="text" name="facility_name" id="facility_name" value="${data.facility_name}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
                <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility Location</label>
                <input type="text" name="location" id="location" value="${data.location}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
                <label for="availability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Facility Availability</label>
                <select name='availability' id="availability"  class="sel bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </select>
            </div>
            <div>
                <label for="capacity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility Capacity</label>
                <input type="number" name="capacity" id="capacity" value="${data.capacity}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <hr class="w-full h-1 mx-auto my-10 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
      </form>

    `
  });

  

let availability = '';
  $.ajax({
        type:"GET",
        url:"<?php echo $url?>"+"/controller/administrative/facility-reservation.php/getFacilityAvailability",
        success:function(res){
         

              allData.forEach((data,i)=>{
                res.availability.forEach((res) => {
                   availability += `<option value="${res.facility_availability_id }" ${data.facility_availability_id === res.facility_availability_id ? "selected" : ""}>${res.availability}</option>`    
                });


                const imageUrl = "<?php echo $url ?>" + "/assets/facility/" + data.facility_image;
                const fileName = data.facility_image;
                imageUrlToFileObject(imageUrl, fileName)
                  .then((renderFile) => {
                    const file= document.querySelectorAll(`#edit-facility-form-${i} #imgInp`)[0]
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(renderFile);
                    file.files = dataTransfer.files

                  });
              const selectOptionStorage= document.querySelectorAll(`#edit-facility-form-${i} #availability`)[0]
                selectOptionStorage.innerHTML = availability
              })
        }
    })




  

  

  $("#update-button").click(()=>{
    $("#loading").show()

    const inputsDataStorage = []
    const allData = table.rows('.selected').data().toArray();
    let isNotValid = false


    allData.forEach((data,i) => {
      $(`#edit-facility-form-${i}`)[0].reportValidity()
      if(!$(`#edit-facility-form-${i}`)[0].checkValidity()){
        isNotValid = true
        return 
      }

     const form = $(`#edit-facility-form-${i}`)[0];
   
    
    inputsDataStorage.push({form,id:data.facility_id})
  });


  if(isNotValid){
    return
  }


  inputsDataStorage.forEach((data,idx) => {
    const formData = new FormData(data.form)
    formData.append("facility_id",data.id)
    $.ajax({
          type:"POST",
          data:formData,
          processData: false,
          contentType: false,
          url:"<?php echo $url ?>" +"/controller/administrative/facility-reservation.php/editFacility",
          success:function(res){
              const lastSeen = inputsDataStorage.length -1
              if(lastSeen <=  idx){
                $("#loading").hide()
                Swal.fire({
                    icon: 'success',
                    title: res.message,
                    showConfirmButton: true
                }).then(function(){
                   window.location.reload()
                })
              }
          }
        })
    });



  })


   
})


</script>


</body>
</html>

