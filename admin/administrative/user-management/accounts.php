<?php
  include("../../../dotenv.php");
  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  // include("$dir/admin/visible_user.php");
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


<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com/3.2.4"></script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script> 
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/js/utils.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/css/intlTelInput.css" rel="stylesheet"/>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.1/js/countrySelect.min.js"></script>
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.1/css/countrySelect.min.css"
   />
   <link
     rel="stylesheet"
     href="<?php echo "$url/css/password-validation.administrative.css"?>"
   />
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
   <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" /> 

<style> 
    @import url('https://fonts.googleapis.com/css2?family=Alata&family=Anek+Gurmukhi:wght@100;200;400&family=Barlow:ital,wght@1,200&family=Bebas+Neue&family=Pathway+Gothic+One&family=Plus+Jakarta+Sans:wght@200&family=Roboto&display=swap');
    
    .font-family-karla {
      font-family: 'Roboto', sans-serif;
      }

    .dataTables_length   select {
      font-family: 'FontAwesome', 'sans-serif';
      width: 75px;
    }
 
   
    .iti-flag {
      background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/10.0.2/img/flags.png");
    }
    .iti__flag-container{
      width: 100% !important;
    }
    .intl-tel-input input{
      width: 100% !important;
      border:1px solid #cbd5e1;
      height: 45px;
    }
    body .intl-tel-input .flag-container {
      position: static;
    }

    body .intl-tel-input .selected-flag {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      height: 100%;
    }

    body .intl-tel-input .country-list {
      width: 100%;
      top: 100%;
    }
    body .intl-tel-input {
      width: 100%;
      z-index: 50;
    }
    .country-select{
      width: 100%  !important;
      z-index: 20;
    }
  </style>
</head>
<body>
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow flex flex-col ">
          <?php include("$dir/layout/header-nav.php");?>
            <div class="w-full  flex-1  ">
                <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
                  <div class="container flex flex-wrap items-center justify-between mx-auto">
                  <div class="items-center justify-between flex w-auto order-1" id="navbar-cta">
                    <ul class="flex flex-wrap  py-4  border border-gray-100 rounded-lg bg-gray-50 flex-row space-x-8 mt-0 text-sm font-medium border-0 bg-white dark:bg-gray-800 dark:bg-gray-900 dark:border-gray-700">
                      <li>
                        <button  
                         data-te-ripple-init
                         data-te-ripple-color="info" 
                         data-te-toggle="modal"
                         data-te-target="#createAdminAccount"
                         class="  hover:bg-gray-100 hover:bg-transparent hover:text-blue-700 p-0 dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:bg-transparent dark:border-gray-700">
                          Create Account</button>
                      </li>
                      <li>
                       <button  
                         data-te-ripple-init
                         data-te-ripple-color="info"  
                        class="  hover:bg-gray-100 hover:bg-transparent hover:text-blue-700 p-0 dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:bg-transparent dark:border-gray-700">
                          Position</button>
                      </li>
                      <li>
                       <button  
                         data-te-ripple-init
                         data-te-ripple-color="info"  
                        class="  hover:bg-gray-100 hover:bg-transparent hover:text-blue-700 p-0 dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:bg-transparent dark:border-gray-700">
                         Department</button>
                      </li>
                      <li>
                       <button  
                         data-te-ripple-init
                         data-te-ripple-color="info"  
                        class="  hover:bg-gray-100 hover:bg-transparent hover:text-blue-700 p-0 dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:bg-transparent dark:border-gray-700">
                         Select All</button>
                      </li>
                      <li>
                       <button  
                         data-te-ripple-init
                         data-te-ripple-color="info"  
                        class="  hover:bg-gray-100 hover:bg-transparent hover:text-blue-700 p-0 dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:bg-transparent dark:border-gray-700">
                         Remove</button>
                      </li>
                      <li>
                       <button  
                         data-te-ripple-init
                         data-te-ripple-color="info"  
                        class="  hover:bg-gray-100 hover:bg-transparent hover:text-blue-700 p-0 dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:bg-transparent dark:border-gray-700">
                         Edit</button>
                      </li>
                      <li>
                        <button  
                         data-te-ripple-init
                         data-te-ripple-color="info" 
                          class="  hover:bg-gray-100 hover:bg-transparent hover:text-blue-700 p-0 dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:hover:bg-transparent dark:border-gray-700">
                          Export
                        </button>
                      </li>
                    </ul>
                  </div>
                  </div>
                </nav>
                  <div class="relative w-full px-4 bg-white h-full flex-1">
                 
                      <div class="relative w-full p-4 font-family-karla mb-10">
                          <div class="relative overflow-x-scroll">
                              <table id="pending_account" class=" text-sm text-left text-gray-500 dark:text-gray-400 " >
                                        <thead>
                                            <tr id="table-header-option">
                                                <th>User</th>
                                                <th>Contact Number</th>
                                                <th>Country</th>
                                                <th>Birthdate</th>
                                                <th>Gender</th>
                                                <th>Department</th>
                                                <th>Position</th>
                                                <th>Account Status</th>
                                                <th>Created</th>
                                                <th>Action</th>
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
                                                <th>Account Status</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                          </tr>
                                      </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="relative w-full p-4 font-family-karla mb-10">
                          <div class="relative overflow-x-scroll">
                              <table id="created-req-table" class=" text-sm text-left text-gray-500 dark:text-gray-400 " >
                                        <thead>
                                            <tr id="table-header-option">
                                                <th>User</th>
                                                <th>Contact Number</th>
                                                <th>Country</th>
                                                <th>Birthdate</th>
                                                <th>Gender</th>
                                                <th>Department</th>
                                                <th>Position</th>
                                                <th>Account Status</th>
                                                <th>Created</th>
                                                <th>Action</th>
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
                                                <th>Account Status</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                          </tr>
                                      </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="relative w-full p-4 font-family-karla mb-10">
                          <div class="relative overflow-x-scroll">
                              <table id="decilned_account" class=" text-sm text-left text-gray-500 dark:text-gray-400 " >
                                        <thead>
                                            <tr id="table-header-option">
                                                <th>User</th>
                                                <th>Contact Number</th>
                                                <th>Country</th>
                                                <th>Birthdate</th>
                                                <th>Gender</th>
                                                <th>Department</th>
                                                <th>Position</th>
                                                <th>Account Status</th>
                                                <th>Created</th>
                                                <th>Action</th>
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
                                                <th>Account Status</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                          </tr>
                                      </tfoot>
                                </table>
                            </div>
                        </div>

                </div>

            </div>
      </div>


<!-- modal create account-->
<div
  data-te-modal-init
  class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="createAdminAccount"
  tabindex="-1"
  aria-labelledby="createAdminAccount"
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
          id="createAdminAccountLabel">
          Create Admin Account
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
          <div class="relative p-4 w-full">
            <div class="px-6 py-6 lg:px-8 relative w-full">
                    <form class="space-y-2 mb-10 relative w-full" id="form-create-admin-account">
                        <div class="relative flex justify-center">
                              <div>
                                  <div class="min-h-auto max-h-[200px] w-full flex items-center justify-center" id="profile-container">
                                    <img id="blah" src="<?php echo "$url/assets/img/default.png" ?>" alt="your image"  class="w-[150px] h-[150px] mb-2 rounded-full shadow-md"/>
                                </div>
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white  text-center" for="profile">Upload Profile</label>
                                  <input type="file" id="profile" name="profile" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                              </div>
                          </div> 

                      <div class="flex md:gap-x-1 md:gap-y-0 md:flex-row flex-col gap-y-1">
                        <div class="relative flex-1">
                              <input type="text" id="firstname" name="firstname" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                              <label for="firstname"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">First Name</label>
                        </div>     
                        <div class="relative flex-1">
                              <input type="text" id="lastname" name="lastname" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                              <label for="lastname"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Last Name</label>
                        </div> 
                        <div class="relative flex-1">
                              <input type="text" id="middlename" name="middlename" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                              <label for="middlename"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Middle Name</label>
                        </div> 
                      </div>

                      <div  class="flex md:gap-x-1 md:gap-y-0 md:flex-row flex-col gap-y-1">
                        <div class="relative flex-1">
                                <select id="gender" name="gender" class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" >
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                </select>
                                <label for="address"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Gender</label>
                          </div>
                          <div class="relative  flex-1">
                              <input type="text" id="birthdate" name="birthdate" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                              <label for="birthdate"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Birth Date</label>
                          </div>
                      </div>

                      <div class="flex md:gap-x-1 md:gap-y-0 md:flex-row flex-col gap-y-1">
                          <div class="relative flex-1">
                                <input type="text" id="contact_number" name="contact_number" required />
                                <label for="contact_number"  class="z-[52] absolute text-sm   duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 ">Contact Number</label>
                          </div>  
                          <div class="relative flex-1">
                                <input type="text" id="country" name="country" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="country"  class="z-[22] absolute text-sm   duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1 " >Country</label>
                          </div>  
                      </div>

                      <div class="flex md:gap-x-1 md:gap-y-0 md:flex-row flex-col gap-y-1 w-full">
                          <div class="relative  flex-1">
                              <select id="position" name="position_id" class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" >
                              </select>
                              <label for="address"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Position</label>
                          </div>
                          <div class="relative  flex-1">
                              <select id="department" name="department_id" class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" >
                              </select>
                              <label for="address"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Department</label>
                          </div>
                      </div>

                      <div class="flex md:gap-x-1 md:gap-y-0 md:flex-row flex-col gap-y-1">
                        <div class="relative flex-1">
                                <input type="email" id="email" name="email" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="email"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                          </div>
                          <div class="relative flex-1">
                              <textarea type="text"  rows="1" id="address" name="address" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " ></textarea>
                              <label for="address"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Address</label>
                        </div>
                      </div>

                        
                      


                        
                      <div class="flex md:gap-x-1 md:gap-y-0 md:flex-row flex-col gap-y-1 w-full">
                        <div class="relative flex-1">
                                <input type="text" id="password" name="password" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="password"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                          </div> 
                        <div class="relative flex-1">
                              <input type="text" id="confirm_password" name="confirm_password" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                              <label for="confirm_password"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Confirm Password</label>
                        </div>
                      </div>
                     
                        <div class="relative">
                            <div id="characterMinMax" class="validation-display">
                              <div id="characterMinMax-validation" class="validation-message"></div>
                              <p>Minimum of 8 & maximum of 30 characters</p>
                            </div>
                            <div id="lowercase" class="validation-display">
                              <div id="lowercase-validation" class="validation-message"></div>
                              <p>At least 1 lowercase letter</p>
                            </div>
                            <div id="uppercase" class="validation-display">
                              <div id="uppercase-validation" class="validation-message"></div>
                              <p>At least 1 uppercase letter</p>
                            </div>
                            <div id="numeric" class="validation-display">
                              <div id="numeric-validation" class="validation-message"></div>
                              <p>At least 1 numeric digit</p>
                            </div>
                            <div id="specialCharacter" class="validation-display">
                              <div id="specialCharacter-validation" class="validation-message"></div>
                              <p>At least 1 specialCharacter</p>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agree to the terms and conditions policy?</label>
                            </div>
                        </div>
                    
                        <button   
                        data-te-ripple-init
                        data-te-ripple-color="info" 
                        type="submit" 
                        class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                      </form>
              </div>
          </div>
      </div>
  </div>
</div>


</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

  <script src="<?php echo "$url/js/password-validation.administrative.js"?>"></script>

  <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>

  <script>
    const confirmPassword = document.getElementById('confirm_password')
    initPasswordValidation(confirmPassword);

    const phoneInputField = document.querySelector("#contact_number");
    const datepickerEl = document.getElementById('birthdate');
    $("#contact_number").intlTelInput();
    $("#country").countrySelect({
      defaultCountry:"ph"
    });
  </script>

  <script>
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
  </script>

  <script>
    function readURL(input,id) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                $(id)[0].innerHTML =  `<img id="blah" src='${e.target.result}' alt="your image"  class="w-[150px] h-[150px] mb-2 rounded-full shadow-md"/>`
              }
              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#profile").change(function(){
          readURL(this,"#profile-container");
      });
  </script>

  <script>
        $("#form-create-admin-account").submit(function(e){
          e.preventDefault()
          const formData = new FormData(e.currentTarget)
            $.ajax({
              url:"<?php echo "$url/controller/administrative/user-management.php/createAccount" ?>",
              type:"POST",
              data:formData,
              processData: false,
              contentType: false,
              success:function(res){
                const data = JSON.parse(res)
                if(data.success){
                  $("#edit-request-modal").hide()
                   return   Swal.fire(
                        'Account Created!',
                          data.message,
                        'success'
                      ).then(()=>{
                      window.location.reload()
                    })
                 }
              }
            })
        })
  </script>
  
  <script>
      function displayTableData(res){
            const tableBody = document.getElementById("table-body")
           tableBody.innerHTML = "";
          console.log(res)
          res.forEach((data)=>{
                tableBody.innerHTML +=  `
                  <tr>
                   
                        
                  </tr>
                  `
          })
        }


        
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
    console.log(res)
    return res.accounts;
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
  
  function displayTable(data,id){
    const params_data = data;
    const url = "<?php echo $url?>"

   table = $(`#${id}`).DataTable({
    responsive:true,
      data:data,
      columns:[
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
        {render:(_,__,data)=>{
          return  `
            ${
              data.account_status_id === '1' ? '<p class="text-green-500">Approved</p>' :
              data.account_status_id === '2' ? '<p class="text-orange-500">Pending</p>' :
            '<p class="text-red-500">Declined</p>' 
            }
          `
        }},
        { data: 'createdAt_account' },
        {render:(_,__,data)=>{
          return  `
            ${
              data.account_status_id === '1'  ?
               ` <td class="relative">
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
                              Edit</p>
                            </li>
                            <li class="border-b">
                              <p   class="cursor-pointer flex gap-x-1 items-center block tracking-[1px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                              <svg class="h-5 w-5 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                              </svg>                             
                              Delete</p>
                            </li>
                            
                          </ul>
                      </div>
                </td>` :
              data.account_status_id === '2' ? 
            `<td class="relative">
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
                            <li onclick='approved_account("${data.account_id}","${data.email}")' class="border-b">
                              <p   class="cursor-pointer flex gap-x-1 items-center block tracking-[1px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                              <svg class="h-5 w-5 text-green-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
                              Approved</p>
                            </li>
                            <li class="border-b">
                              <p   class="cursor-pointer flex gap-x-1 items-center block tracking-[1px] px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                              <svg class="h-5 w-5 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                              </svg>                             
                              Declined</p>
                            </li>
                            
                          </ul>
                      </div>
                </td>` : 
            `<button 
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
                </button>` 
            }
          `
           
          
        }}
      ]
    });

  }
  function approved_account(id,email){
    const formData = new FormData()
    formData.append("account_id",id)
    formData.append("email",email)
    
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

      $.ajax({
        url:"<?php echo "$url/controller/administrative/user-management.php/approved_account" ?>",
        type:"POST",
        processData: false,
        contentType: false,
        data:formData,
        success:function(res){
             Swal.fire({
                      icon: 'success',
                      title: res.message,
                      showConfirmButton: false,
                      timer: 1500
                    }).then(()=>{
                      window.location.reload()
                    })
                
                }
              })
            }
          })
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
  
  const url1 = "<?php  echo $url."/controller/administrative/user-management.php/get_all_accounts"?>"
  const url2 = "<?php  echo $url."/controller/administrative/user-management.php/get_all_accounts_pending"?>"
  const url3 = "<?php  echo $url."/controller/administrative/user-management.php/get_all_accounts_declined"?>"

  $(document).ready(function () { 
        initFetchRequestTable(url1,function(data){
          $("#created-req-table").DataTable().clear().draw();
          $("#created-req-table").DataTable().destroy();
          displayTable(data,'created-req-table')
          otherStaffForTable(data,"created-req-table")
          tableDropDownFunc('created-req-table')
       })    

       initFetchRequestTable(url2,function(data){
          $("#pending_account").DataTable().clear().draw();
          $("#pending_account").DataTable().destroy();
          displayTable(data,'pending_account')
          otherStaffForTable(data,'pending_account')
          tableDropDownFunc('pending_account')
       })   
       initFetchRequestTable(url3,function(data){
          $("#decilned_account").DataTable().clear().draw();
          $("#decilned_account").DataTable().destroy();
          displayTable(data,'decilned_account')
          otherStaffForTable(data,'decilned_account')
          tableDropDownFunc('decilned_account')
       })  
  });
  </script>

  <script>
    // $("#birthdate").datepicker({
    //   footer: true,
    //   modal: true ,
    //   maxDate:new Date("Dec 31 2006")    
    // })

    $("#birthdate").datepicker({
    zIndex:2048,
    template: "modal",
  })

  </script>

  </body>
  </html>