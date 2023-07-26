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
                            data-te-ripple-color="info"
                            class=" flex  items-center whitespace-nowrap rounded  inline-block rounded bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                           >
                              Log Visitor
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
                     
                        <li>    
                        <!-- start -->
                        <div class="flex justify-center">
                            <div>
                              <div class="relative" data-te-dropdown-ref>
                                <button 
                                type="button"
                                id="dropdownMenuButton2"
                                class=" flex  items-center whitespace-nowrap rounded  inline-block rounded bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-dropdown-toggle-ref
                                aria-expanded="false"
                                data-te-ripple-init
                                data-te-ripple-color="info"
                                >
                                Status
                                <span class="ml-2 w-2">
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      class="h-5 w-5">
                                      <path
                                        fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                    </svg>
                                  </span>
                              </button>
                                <ul
                                 id="dropdownMenuContainer"
                                  class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                                  aria-labelledby="dropdownMenuButton2"
                                  data-te-dropdown-menu-ref>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- end -->
                        </li>
                      </ul>
                    </div>
                    </div>
                  </nav>
                  <div id="parent-table" class="relative z-[1]  md:w-auto w-full font-fam ">
                  <table id="example" class="display w-full ">
                      <thead>
                          <tr id="table-header-option">
                              <th>Visitor ID</th>
                              <th>Full Name</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th>QR Code</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                          <tr id="table-header-option">
                              <th>Visitor ID</th>
                              <th>Full Name</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th>QR Code</th>
                              <th>Action</th>
                          </tr>
                      </tfoot>
                  </table>
                  </div>
          </div>
    </div>
</div>



<!-- create req -->
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
                  <form class="space-y-2 mb-10" id="request-form">
                      <div>
                          <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                          <input type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                      </div>
                      <div>
                          <label for="visitor_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                          <select name='visitor_status' id="visitor_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </select>
                      </div>
                      <div>
                         <video id="video" width="640" height="480" autoplay></video>
                          <div class='flex gap-x-2 mt-2'>
                            <button
                              data-te-ripple-init
                              data-te-ripple-color="info"
                              class="inline-block rounded   bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            type='button' 
                            id="capture-btn"
                            >Capture</button>
                            <button
                              data-te-ripple-init
                              data-te-ripple-color="info"
                              class="inline-block rounded   bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            type='button' 
                            id="reset-btn"
                            >Reset</button>
                          </div>
                          <canvas id="canvas" class='hidden' width="640" height="480"></canvas>
                          <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID picture</label>
                          <div id="img-con"  class="w-auto h-auto relative"></div>
                          <input type="file" id="imgInp" name="file" id="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
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
              Visitor Info 
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
                <div class="sm:flex block gap-x-4 w-full items-center justify-center">
                  <div>
                    <p class="capitalize my-5">ID Picture :</p>
                  <div id="id-picture" class="w-full h-[200px] flex lg:justify-start justify-center  ">
                      
                  </div>
                  </div>
                  <div>
                    <p class="capitalize my-5">QR Code :</p>
                  <div id="qrcode-picture" class="w-full h-[200px] flex lg:justify-start justify-center  ">
                      
                  </div>
                  </div>
                </div>

                <div class="flex  w-auto items-center gap-x-1 mb-2">
                    <p class="text-xs font-bold">Date: </p>
                    <div class="w-auto ">
                    <p id="ceatedAt" class="text-xs  w-auto font-semibold  text-left "> </p>
                    </div>
                    
                </div>
                <div>
                <div class="flex  w-auto items-center gap-x-1 pb-2  mb-3">
                        <p class="text-xs font-bold ">Name : </p>
                        <div class="flex-1 ">
                        <p id="rep-name" class="text-xs  w-auto font-semibold  text-left ">
                        </p>
                        </div>
                    </div>
                </div>


         
           
              
          </div>
        </div>        
      </div>
    </div>
  </div>
</div> 
<!-- edit req -->
 <div
  data-te-modal-init
  class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="editRequestModal"
  tabindex="-1"
  aria-labelledby="editRequestModal"
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
          id="editRequestModalLabel">
          Create Appointment Request
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
          <form class="space-y-2 mb-10" id="edit-request-form">
                      <div>
                          <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                          <input type="text" name="fullname" id="edit-fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                      </div>
                      <div>
                          <label for="visitor_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                          <select name='visitor_status' id="edit-visitor_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </select>
                      </div>
                      <div>
                         <video id="edit-video" width="640" height="480" autoplay></video>
                          <div class='flex gap-x-2 mt-2'>
                            <button
                              data-te-ripple-init
                              data-te-ripple-color="info"
                              class="inline-block rounded   bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            type='button' 
                            id="edit-capture-btn"
                            >Capture</button>
                            <button
                              data-te-ripple-init
                              data-te-ripple-color="info"
                              class="inline-block rounded   bg-[#3A71CA] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                            type='button' 
                            id="edit-reset-btn"
                            >Reset</button>
                          </div>
                          <canvas id="edit-canvas" class='hidden' width="640" height="480"></canvas>
                          <label for="edit-file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID picture</label>
                          <div id="edit-img-con"  class="w-auto h-auto relative"></div>
                          <input type="file"  name="edit-file" id="edit-file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
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
 





<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="<?php echo "$url/js/visitors-acc.js"?>"></script>
<script src="<?php echo "$url/js/convert-time.js"?>"></script>

<script>
let timeout = null

const logVisitorURL = "<?php  echo $url?>";




async function fetchData(cb) {
    clearTimeout(timeout);
    const res =  await $.ajax({
      url:"<?php echo "$url/controller/administrative/visitor-management.php/getAllVisitorsAccount" ?>",
      type:"GET"
    })
    if (res.affect > 0) {
      cb();
    }
    timeout = setTimeout(() => {
      fetchData(cb);
    }, 100);

    return res.request_created;
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

   table = $('#example').DataTable({
      data:data,
      columns:[
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
        { render:function(_,__,data){
            return ` <td class="relative">
                <button 
                type="button"
                data-te-toggle="modal"
                data-te-target="#viewRequest"
                data-te-ripple-init
                data-te-ripple-color="light"
                onclick='viewRequestAppointment(${data.visitors_account_id},${JSON.stringify(data)},"${logVisitorURL}")'
                    class='text-blue-500 '>
                        <svg class="h-4 w-4 text-indigo-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>                         
                </button>
                  <button id="dropdownDefaultButton"  class=" ml-1 text-blue-500 text-sm  text-center p-1 border transition-all " type="button"><svg  class="w-4 h-4 transition-all " aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                      <div id="dropdown-option-table" class="absolute right-10  z-[100]  hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700">
                          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 " >
                          <li class="border-b">
                              <p onclick='timeinVisitorLog(${data.visitors_account_id},"${logVisitorURL}")'  class="cursor-pointer flex gap-x-1 items-center block tracking-[1px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                              <svg class="h-5 w-5 text-indigo-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />  <polyline points="10 17 15 12 10 7" />  <line x1="15" y1="12" x2="3" y2="12" /></svg>                              Time in</p>
                            </li>
                      
                           <li class="border-b">
                              <p
                              data-te-toggle="modal"
                              data-te-target="#editRequestModal"
                              data-te-ripple-init
                              data-te-ripple-color="light"
                              onclick='editRequestAppointment("${data.visitors_account_id}",${JSON.stringify(data)},"${logVisitorURL}")' class="cursor-pointer flex gap-x-1 items-center block tracking-[1px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                              <svg class="h-5 w-5 text-green-500"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
                              Edit</p>
                             </li>
                            <li >
                              <p onclick='deleteRequestAppointment("${data.visitors_account_id}","${logVisitorURL}")' class="cursor-pointer flex gap-x-1 items-center block tracking-[1px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                              <svg class="h-5 w-5 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" />  <line x1="18" y1="9" x2="12" y2="15" />  <line x1="12" y1="9" x2="18" y2="15" /></svg>
                              Delete</p>
                            </li>
                            
                          </ul>
                      </div>
                </td>
              `
        } }
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
                    url:"<?php echo "$url/controller/administrative/visitor-management.php/removeAllVisitorLog" ?>",
                    type:"POST",
                    data:{data:formData},
                    cache: false,
                    success:function(res){
                        console.log(res)
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

function getListofVisitorType(cb){
    $.ajax({
        type:"GET",
        url:"<?php echo "$url/controller/administrative/visitor-management.php/getVisitorStatusOption" ?>",
        success:cb
    })
}



function tableDropDownFunc (mainData){
  document.querySelectorAll("#dropdownDefaultButton").forEach((el,i)=>{
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

      let newElement = `
      <li>
      <button
          data-te-ripple-init
          data-te-ripple-color="info"
          class="text-left capitalize block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
          id="all-btn"
          data-te-dropdown-item-ref
          >
          All
        </button>
      </li>
      `
      getListofVisitorType(function(res){
        $("#dropdownMenuContainer")[0].innerHTML = ""
        res.visitor_status.forEach(data => {
        newElement += `<li>
          <button
          data-te-ripple-init
          data-te-ripple-color="info"
          class="text-left capitalize block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
          id="${data.log_visitor_status_name}-btn"
          data-te-dropdown-item-ref
          >${data.log_visitor_status_name}</button
          >
          </li>`
          $("#dropdownMenuContainer")[0].innerHTML = newElement
        });
      })
    getListofVisitorType(function(res){
        handleStatusClick(res.visitor_status ,mainData)
        activeStatusButton(res.visitor_status)
    });
}
function handleStatusClick(data ,mainData){
  function recallCb(mainData,stat){
          $("#example").DataTable().clear().draw();
          $("#example").DataTable().destroy();
          displayTable(mainData.filter((data)=> data.log_visitor_status_name === stat.log_visitor_status_name))
          imageDefaultImageDisplay()
          tableDropDownFunc(mainData)
          handleSubmitedForm(
          logVisitorURL
        )
  }
  data.forEach((stat) => {
    $(`#${stat.log_visitor_status_name}-btn`).click(function(e){
        window.localStorage.setItem("visitor_status_log",stat.log_visitor_status_name)
        if(stat.log_visitor_status_name === "appointment"){
          recallCb(mainData,stat)
          return
        }else if(stat.log_visitor_status_name === "applicant"){
          recallCb(mainData,stat)

          return
        }else if(stat.log_visitor_status_name === "trainee"){
          recallCb(mainData,stat)
          return
        }else if(stat.log_visitor_status_name === "employee"){
          recallCb(mainData,stat)
          return
        }else{
          recallCb(mainData,stat)
          return
        }
    })
  });

  $(`#all-btn`).click(function(e){
         $("#example").DataTable().clear().draw();
          $("#example").DataTable().destroy();
          displayTable(mainData)
          imageDefaultImageDisplay()
          tableDropDownFunc(mainData)
          handleSubmitedForm(
          logVisitorURL
        )
  })
}

function activeStatusButton(data){
  if( window.localStorage.getItem("visitor_status_log") === "all"){
      $(`#all-btn`)[0].parentNode.classList.add('bg-slate-100')
      return
    }

  data.forEach(stat => {
    if(stat.log_visitor_status_name ===  window.localStorage.getItem("visitor_status_log")){
      $(`#${stat.log_visitor_status_name}-btn`)[0].parentNode.classList.add('bg-slate-100')
    }else{
      $(`#${stat.log_visitor_status_name}-btn`)[0].classList.remove('bg-slate-100')
    }
  });

}
</script>

<script>
  $(document).ready(function () { 
      initFetchRequestTable(function(data){
        window.localStorage.setItem("visitor_status","all")
        $("#example").DataTable().clear().draw();
        $("#example").DataTable().destroy();
        displayTable(data)
        otherStaffForTable(data)
        tableDropDownFunc(data)
        imageDefaultImageDisplay()
        handleSubmitedForm(
          logVisitorURL
        )

    })    
  });

</script>
</body>
</html>