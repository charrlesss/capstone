<?php
  include("../../../dotenv.php");
  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

  $visitor_id = !empty($_SESSION['visitor_chat_id']) ? $_SESSION['visitor_chat_id'] :"";
?>
</head>
<body>
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow flex flex-col ">
          <?php include("$dir/layout/header-nav.php");?>
            <div class="w-full  flex-1 flex  justify-center items-center">
                 <div class='md:w-[600px] w-full '  id="timein">

                 </div>
            </div>
      </div>
  </div>
  <script src="<?php echo "$url/js/html5-qrcode.min.js" ?>"></script>
  <script>

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "timein", { fps: 10, qrbox: 250 });

    function onScanSuccess(decodedText, decodedResult) {
            $.ajax({
                url:decodedText,
                type:"GET",
                success:function(res){
                    const date = new Date(Date.now())
                    const timein = `${date.getHours()}:${(date.getMinutes()< 10?'0':'')+ date.getMinutes()}`
                    const dateInput = `${date.toLocaleDateString('fr-CA', { year: 'numeric', month: '2-digit', day: '2-digit' })}`
                    $.ajax({
                        url:"<?php echo $url?>"+"/controller/administrative/visitor-management.php/visitorsTimein/"+res.visitor.visitors_account_id+"/"+timein+"/"+dateInput,
                        type:"GET",
                        success:function(ress){
                            html5QrcodeScanner.clear()
                            Swal.fire({
                                icon: 'success',
                                title: ress.message,
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

    html5QrcodeScanner.render(onScanSuccess);

</script>




<?php
 include("$dir/layout/header.php")
?>