<?php
  include("../../dotenv.php");
  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");
?>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
</head>
<body>
  <div class="min-h-screen flex ">
    <div class='md:self-start'>
    <?php include("$dir/layout/sidebar-nav.php") ?>
    </div>

    <div class="bg-indigo-50 flex-grow flex flex-col ">
        <?php include("$dir/layout/header-nav.php");?>
            <div class="border w-full h-full">
                <div class="pt-3">
                    <div class="rounded-tl-3xl  p-4  text-2xl text-white">
                        <h1 class="font-bold pl-2 text-black">Analytics</h1>
                    </div>
                    <section class='flex flex-wrap'>
                        <a class="w-full md:w-1/2 xl:w-1/3 p-6" href="<?php echo "$url/admin/administrative/legal-management/legal-documents.php"?>" >
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5 w-full">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">Request Legal Document</h2>
                                    <p class="font-bold text-3xl" id="1_text">$3249 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </a>
                        <a href="<?php echo "$url/admin/administrative/visitor-management/visitors.php"?>" class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                            <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">Visitors Account</h2>
                                        <p class="font-bold text-3xl" id="2_text">249 <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></p>
                                    </div>
                                </div>
                            </div>
                        <!--/Metric Card-->
                        </a>
                        <a href="<?php echo "$url/admin/administrative/user-management/accounts.php"?>" class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">Request For New Employee Account</h2>
                                        <p class="font-bold text-3xl" id="3_text">2 <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></p>
                                    </div>
                                </div>
                            </div>
                        <!--/Metric Card-->
                        </a>
                        <a  href="<?php echo "$url/admin/administrative/facility-reservation/booking-facility.php"?>" class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                            <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-building fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">Facilities Request</h2>
                                        <p class="font-bold text-3xl" id="4_text">152 days</p>
                                    </div>
                                </div>
                            </div>
                        <!--/Metric Card-->
                        </a>
                        <a  href="<?php echo "$url/admin/administrative/visitor-management/inquirers.php"?>" class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                            <div class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-question fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">Visitors Inquirers</h2>
                                        <p class="font-bold text-3xl" id="5_text">7 Inquirers</p>
                                    </div>
                                </div>
                            </div>
                        <!--/Metric Card-->
                        </a>
                        <a href="<?php echo "$url/admin/administrative/legal-management/legal-documents.php"?>" class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                            <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">Customer Feedback</h2>
                                        <p class="font-bold text-3xl" id="6_text">3 <span class="text-red-500"><i class="fas fa-caret-up"></i></span></p>
                                    </div>
                                </div>
                            </div>
                        <!--/Metric Card-->
                        </a>
                       
                    </section>
                </div>
            </div>
      </div>
  </div>

  
<script>
 $.ajax({
  url:"<?php echo "$url/controller/administrative/legal-management.php/dashboardNeedRecords" ?>",
  type:"GET",
  success:function(res){
    console.log(res)
    $("#1_text")[0].innerHTML = `${ res.request.length}<span class="ml-4 text-green-500"><i class="fas fa-caret-up"></i></span>`
    $("#2_text")[0].innerHTML = `${ res.visitors.length}<span class="ml-4 text-pink-500"><i class="fas fa-exchange-alt"></i></span>`
    $("#3_text")[0].innerHTML = `${ res.request_user.length}<span class="ml-4 text-yellow-600"><i class="fas fa-caret-up"></i></span>`
    $("#5_text")[0].innerHTML = `${ res.facilities.length}`
    $("#6_text")[0].innerHTML = `${ res.inquirers.length}`
    $("#6_text")[0].innerHTML = `${ res.feedback.length}<span class="ml-4 text-red-500"><i class="fas fa-caret-up"></i></span>`
    res.facilities.length
    res.feedback.length
    res.inquirers.length
    res.request.length
    res.request_user.length
    res.visitors.length

  }
 })
</script>

<script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>
<?php
 include("$dir/layout/header.php")
?>