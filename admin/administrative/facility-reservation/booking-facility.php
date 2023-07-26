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
<div id="loading" class="hidden bg-gray-100 backdrop-blur-sm overflow-hidden w-full h-full fixed z-[200] flex justify-center items-center">
          <div class="h-screen bg-white w-full">
              <div class="flex justify-center items-center h-full">
                  <img class="h-16 w-16" src="https://icons8.com/preloaders/preloaders/1488/Iphone-spinner-2.gif" alt="">
              </div>
          </div>
      </div>
<div class="min-h-screen flex ">
  <div class="self-start">
     <?php include("$dir/layout/sidebar-nav.php") ?>
  </div>
    <div class="bg-indigo-50 flex-grow flex flex-col ">
        <?php include("$dir/layout/header-nav.php");?>
          <div class="w-full  flex-1 bg-white  p-4 ">

            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
                    <div class="container flex flex-wrap items-center justify-between mx-auto">
                    <div class="items-center justify-between flex w-auto order-1" id="navbar-cta">
                      <ul class="flex  py-4  border border-gray-100 rounded-lg bg-gray-50 flex-row space-x-8 mt-0 text-sm font-medium border-0 bg-white dark:bg-gray-800 dark:bg-gray-900 dark:border-gray-700">
                      <li>
                          <button
                          class=" flex  items-center whitespace-nowrap rounded  inline-block rounded bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            data-te-toggle="modal"
                            data-te-target="#exampleModalXl"
                            data-te-ripple-init
                            data-te-ripple-color="light"
                            id="set-schedule"
                            >
                            Set Schedule
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
                  <!-- <div id="calendar"></div> -->
                  <div id="parent-table" class="relative z-[1]  md:w-auto w-full font-fam ">
                  <table id="example" class="display w-full ">
                      <thead>
                          <tr id="table-header-option">
                              <th>Recipient Name</th>
                              <th>Facility Image</th>
                              <th>Facility Name</th>
                              <th>Date Start</th>
                              <th>Date End</th>
                              <th>Time Start</th>
                              <th>Time End</th>
                              <th>Purpose</th>
                              <th>Particapnts</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                          <tr id="table-header-option">
                               <th>Recipient Name</th>
                              <th>Facility Image</th>
                              <th>Facility Name</th>
                              <th>Date Start</th>
                              <th>Date End</th>
                              <th>Time Start</th>
                              <th>Time End</th>
                              <th>Purpose</th>
                              <th>Particapnts</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </tfoot>
                  </table>
                  </div>
          </div>
    </div>
</div>

<div
  data-te-modal-init
  class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModalXl"
  tabindex="-1"
  aria-labelledby="exampleModalXlLabel"
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
          id="exampleModalXlLabel">
          Extra large modal
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
      <div id="set-sched-parent-table" class="relative z-[1]  md:w-auto w-full font-fam ">
        <table id="set-sched-table" class="display w-full ">
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
</div>

<!-- Modal -->
<div
  data-te-modal-init
  class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModalFullscreen"
  tabindex="-1"
  aria-labelledby="exampleModalFullscreenLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[0px]:m-0 min-[0px]:h-full min-[0px]:max-w-none">
    <div
      class="pointer-events-auto relative flex w-full flex-col rounded-md bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600 min-[0px]:h-full min-[0px]:rounded-none min-[0px]:border-0">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50 min-[0px]:rounded-none">
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="exampleModalFullscreenLabel">
          Facility Schedule
        </h5>
        <button
        id="sched-close"
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
      <div class="relative p-4 min-[0px]:overflow-y-auto flex flex-wrap ">
          <div class="relative md:w-1/2 w-full  min-h-[550px] max-h-auto"> 
            <div class="px-6 py-6 lg:px-8">
                <form class="space-y-2 mb-10" id="add-schedule-form">
                    <div>
                        <label for="recipient_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Recipient Name</label>
                        <input type="text" id="recipient_name" name="recipient_name"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                        <input type="text" id="start_date" name="start_date"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                        <input type="text" name="end_date" id="end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Time</label>
                        <input type="time" name="start_time" id="start_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Time</label>
                        <input type="time" name="end_time" id="end_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="capacity_input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Participants</label>
                        <input type="number" name="capacity_input" id="capacity_input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div>
                        <label for="puspose" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puspose</label>
                        <input type="text" name="puspose" id="puspose"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
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
          <div class="relative md:w-1/2 w-full min-h-[550px] max-h-autoo"> 
             <div id="calendar"></div>
          </div>
          <div class="mt-5 relative md:w-full w-full min-h-[550px] max-h-auto "> 
            <table id="reserve-table" class="display w-full ">
                      <thead>
                          <tr id="table-header-option">
                              <th>Recipient Name</th>
                              <th>Facility Image</th>
                              <th>Facility Name</th>
                              <th>Date Start</th>
                              <th>Date End</th>
                              <th>Time Start</th>
                              <th>Time End</th>
                              <th>Purpose</th>
                              <th>Particapnts</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                          <tr id="table-header-option">
                               <th>Recipient Name</th>
                              <th>Facility Image</th>
                              <th>Facility Name</th>
                              <th>Date Start</th>
                              <th>Date End</th>
                              <th>Time Start</th>
                              <th>Time End</th>
                              <th>Purpose</th>
                              <th>Particapnts</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </tfoot>
                  </table>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- view pending -->
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
          View Schedule
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
      <div  class="relative p-4">
          <div id="image-container" class="relative w-full">

          </div>
          <div id='facility-details' class="relative w-full">

          </div>
          <div class="relative w-full flex justify-between items-center">
              <div class="flex gap-x-4">
                 <button
                   id="submit-details"
                  type='button'
                  class="inline-block rounded bg-[#3B71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]">
                  Edit
                </button>
                <button
                  id="reset-details"
                  type='button'
                  class="inline-block rounded bg-[#54B4D3] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:bg-info-600 hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-info-600 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-info-700 active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)]">
                  Reset
                </button>
              </div>
            <button
              id="approved-details"
             class="inline-block rounded bg-success px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)]">
              Approved
            </button>
          </div>
      </div>
    </div>
  </div>
</div>






<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="<?php echo "$url/js/book-facility.js"?>"></script>
<script src="<?php echo "$url/js/convert-time.js"?>"></script>

<script>
  let timeout = null
  const logVisitorURL = "<?php  echo $url?>";




async function fetchData(cb) {
    clearTimeout(timeout);
    const res =  await $.ajax({
      url:"<?php echo "$url/controller/administrative/facility-reservation.php/getAllApprovedFacilitySchedule/1/0/0" ?>",
      type:"GET"
    })
    if (res.affect > 0) {
      cb();
    }
    timeout = setTimeout(() => {
      fetchData(cb);
    }, 100);

    return res.schedule;
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
        {data:"recipient_name"},
        {render:function(_,__ ,data){
          return  `
            <td >
                <div class="cursor-pointer text-center h-[105px]  w-[100px] bg-center bg-cover bg-[url('${"<?php echo $url ?>" + "/assets/facility/"+data.facility_image}')] bg-no-repeat">
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
        {render:()=>'<p class="text-orange-500">Pending</p>'},
        { render:function(_,__,data){
            return ` <td class="relative">
                  <button
                  type="button"
                  data-te-toggle="modal"
                  data-te-target="#exampleModalLg"
                  data-te-ripple-init
                  data-te-ripple-color="light"
                  onclick='viewScheduleReport(${JSON.stringify(data)},"<?php echo $url ?>")'  
                   >
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
                    url:"<?php echo "$url/controller/administrative/facility-reservation.php/removePendingSched" ?>",
                    type:"POST",
                    data:{data:formData},
                    cache: false,
                    success:function(res){
                        $("#loading").hide()
                        Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        ).then(()=>{
                          window.location.reload()
                        })
                      
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

  function setViewScheduleTable(data){
    $("#set-sched-table").DataTable().clear().draw();
    $("#set-sched-table").DataTable().destroy();
    $('#set-sched-table').DataTable({
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
                class="inline-block rounded bg-success px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#14a44d] transition duration-150 ease-in-out hover:bg-success-600 hover:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:bg-success-600 focus:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)] focus:outline-none focus:ring-0 active:bg-success-700 active:shadow-[0_8px_9px_-4px_rgba(20,164,77,0.3),0_4px_18px_0_rgba(20,164,77,0.2)]"
                data-te-toggle="modal"
                data-te-target="#exampleModalFullscreen"
                data-te-ripple-init
                data-te-ripple-color="light"
                  onclick='addSchedule(${data.facility_id},"${"<?php echo $url ?>"}")'
                >
                Schedule
              </button>
              `
            }}
          ]
        });
  }

  $("#set-schedule").click(async function(){
    const res =  await $.ajax({
      url:"<?php echo "$url/controller/administrative/facility-reservation.php/getFacilityAll" ?>",
      type:"GET"
    })
    setViewScheduleTable(res.facilities)
   

  })
</script>

<script>
  $("#sched-close").click(async function(){
    const res =  await $.ajax({
      url:"<?php echo "$url/controller/administrative/facility-reservation.php/getFacilityAll" ?>",
      type:"GET"
    })
    setViewScheduleTable(res.facilities)
    initFetchRequestTable(function(data){
        $("#example").DataTable().clear().draw();
        $("#example").DataTable().destroy();
        displayTable(data)
        otherStaffForTable(data)
        handleSubmitedForm(
          logVisitorURL
        )
    }) 

    document.querySelector("#set-schedule").click()
    
  })
</script>


<script>

  $(document).ready(async function() {
    $('#calendar').fullCalendar({
      weekends: true
    });

});
</script>

</body>
</html>

