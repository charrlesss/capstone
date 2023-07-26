<?php
$controller_filename =basename(__FILE__);
$controller_request = $_SERVER['REQUEST_URI'];
include("../../dotenv.php");
include("$dir/model/index.php");
include("$dir/controller/index.php");
use Ramsey\Uuid\Uuid;

function getFacilityAvailability(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $response = array(
        "availability"=>getFacilityAvailabilityModel($db)
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}


function createFacility(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $facility_image = $_FILES['file'];
    $facility_name = $_POST['facility_name'];
    $facility_location = $_POST['location'];
    $facility_availability = $_POST['availability'];
    $facility_capacity = $_POST['capacity'];

    $uuid = Uuid::uuid4();
    $fileNameParts = explode('.',$facility_image['name']);
    $ext = end($fileNameParts);
    $secretname =$uuid->toString();
    $filename = "$secretname.$ext";
    $uploaddir = $dir."/assets/facility/";
    $uploadfile = $uploaddir . basename($filename);

 

    if(!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
        $response = array(
            "message"=>"Server Error",
            "success"=>false
        );
        header('Content-Type: application/json; charset=utf-8');
        echo   json_encode($response);
        return;
    }

    createFacilityModel(
        $db,
        $filename,
        $facility_name,
        $facility_location,
        $facility_availability,
        $facility_capacity
    );
    $response = array(
        "message"=>"Create Successfully",
        "success"=>true
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}
 

function getFacilityAll(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $response = array(
        "facilities"=>getFacilityAllModel($db),
        "affect"=>affectVisitorLogs($db)
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function createScheduleFacility(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $facility_id = $_POST['facility_id'];
   $recipient_name = $_POST['recipient_name'];
   $start_date = $_POST['start_date'];
   $end_date = $_POST['end_date'];
   $start_time = $_POST['start_time'];
   $end_time = $_POST['end_time'];
   $capacity_input = $_POST['capacity_input'];
   $puspose = $_POST['puspose'];

   createScheduleFacilityModel(
        $db,
        $facility_id,
        $recipient_name,
        $start_date,
        $end_date,
        $start_time,
        $end_time,
        $capacity_input,
        $puspose
    );

    $response = array(
        "message"=>"Create Schedule Successfully",
        "success"=>true
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function facilityScheduleById($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $response = array(
        "schedule"=>facilityScheduleByIdModel($db,$id),
        "affect"=>affectVisitorLogs($db)
        
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);

}

function getAllApprovedFacilitySchedule($pending,$decline,$approved){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $response = array(
        "schedule"=>getAllByStatusFacilityScheduleModel($db ,$pending,$decline,$approved),
        "affect"=>affectVisitorLogs($db)
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function removeAllFacility(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $data = json_decode($_POST['data']);

    foreach($data as $key => $val) {
         removeAllFacilityModel($db,$val->facility_id);
    }

    $response = array(
        "message"=>"Remove Successfully",
        "success"=> $data
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);

}

function editScheduleFacility(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $facility_id = $_POST['facility_id'];
    $recipient_name = $_POST['recipient_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $capacity_input = $_POST['capacity_input'];
    $puspose = $_POST['puspose'];

    editScheduleFacilityModel(
        $db,
        $facility_id,
        $recipient_name,
        $start_date,
        $end_date,
        $start_time,
        $end_time,
        $capacity_input,
        $puspose
    );

    $response = array(
        "message"=>"Edit Schedule Successfully",
        "success"=>true
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
 
}


function removePendingSched(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $data = json_decode($_POST['data']);

    foreach($data as $key => $val) {
        removePendingSchedModel($db,$val->schedule_facility_id);
      
    }

    $response = array(
        "message"=>"Remove Successfully",
        "success"=> $data
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function editFacility(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/facility-reservation.php");

    $file = $_FILES['file'];
    $facility_name = $_POST['facility_name'];
    $location = $_POST['location'];
    $availability = $_POST['availability'];
    $capacity = $_POST['capacity'];
    $facility_id = $_POST['facility_id'];
    $facility = getFacilityById($db,$facility_id);

    if($facility['facility_image'] !== $file['name']){
        $uuid = Uuid::uuid4();
        $fileNameParts = explode('.',$file['name']);
        $ext = end($fileNameParts);
        $secretname =$uuid->toString();
        $filename = "$secretname.$ext";
        $uploaddir = $dir."/assets/facility/";
        $uploadfile = $uploaddir . basename($filename);

            
        if(!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
            $response = array(
                "message"=>"Server Error",
                "success"=>false
            );
            header('Content-Type: application/json; charset=utf-8');
            echo   json_encode($response);
            return;
        }
        updateFacilityImageById($db,$facility_id,$filename);
    }

    updateFacilityDetails(
        $db,
        $facility_id,
        $facility_name,
        $location,
        $availability,
        $capacity
    );


    $response = array(
        "message"=>"Edit Facility Successfully",
        "success2"=>$facility['facility_image']

    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

call_user_func_array($function_name,$slice_function_params);
?>
