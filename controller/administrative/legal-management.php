<?php
$controller_filename =basename(__FILE__);
$controller_request = $_SERVER['REQUEST_URI'];
include("../../dotenv.php");
include("$dir/model/index.php");
include("$dir/controller/index.php");
use Ramsey\Uuid\Uuid;

function send_complains(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");
    $email= $_POST['email'];
    $message= $_POST['message'];
    $sql = "INSERT INTO `about_us_feedback`(`message`, `email`) VALUES ('$message','$email')";
    $db->query($sql);

    $response = array(
        "message"=>"Approved Accoount Successfully",
        "success"=>true

    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function createRequestLegal(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");
    $purpose= $_POST['purpose'];
    $department= $_POST['department'];
    $position= $_POST['position'];
    $name= $_POST['name'];
    $requestAt = time();
    $status = '2';

    $sql = "INSERT INTO 
    `request_legal_docu`(`purpose`, `department`, `status_id`, `position`, `name`, `requestAt`)
     VALUES 
     ('$purpose','$department','$status','$position','$name','$requestAt')";
      $db->query($sql);


    $response = array(
        "message"=>"Approved Accoount Successfully",
        "success"=>$purpose.$department.$position.$name

    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function getAllLegalRequestDocu(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");
    
    function getAllReqDocu($db){
        $sql = "SELECT * FROM `request_legal_docu` a left join `department` b on b.department_id = a.department left join `position` c on c.position_id = a.position";
        $result = $db->query($sql);
        $fetch =  $result->fetch_all(MYSQLI_ASSOC);
        return $fetch;
    }
    $response = array(
        "request"=>getAllReqDocu($db)

    );
    // header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}
function get_all_feedback(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");
    function getAllFeedback($db){
        $sql = "SELECT * FROM `about_us_feedback`";
        $result = $db->query($sql);
        $fetch =  $result->fetch_all(MYSQLI_ASSOC);
        return $fetch;
    }
    $response = array(
        "feedback"=>getAllFeedback($db)

    );
    // header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function dashboardNeedRecords(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    // include("$dir/model/administrative/user-management.php");
    // include("$dir/model/administrative/facility-reservation.php");
    // include("$dir/model/administrative/user-management.php");
    // include("$dir/model/administrative/visitor-management.php");

    function getAllFeedback($db){
        $sql = "SELECT * FROM `about_us_feedback`";
        $result = $db->query($sql);
        $fetch =  $result->fetch_all(MYSQLI_ASSOC);
        return $fetch;
    }
 
    function getAllReqDocu($db){
        $sql = "SELECT * FROM `request_legal_docu` a left join `department` b on b.department_id = a.department left join `position` c on c.position_id = a.position";
        $result = $db->query($sql);
        $fetch =  $result->fetch_all(MYSQLI_ASSOC);
        return $fetch;
    }
    function getAllAccountsPendingModel($db){
        $sql = "SELECT * FROM `admin-employe-accounts` aea JOIN `position` p ON p.position_id = aea.position_id JOIN `department` d ON d.department_id = aea.department_id WHERE aea.account_status_id ='2'";
        $result = $db->query($sql);
        $accounts =  $result->fetch_all(MYSQLI_ASSOC);
        return $accounts;
    }
    function getAllVisitorAccountModel($db){
        $sql = "SELECT * FROM `visitor-account`";
    $result = $db->query($sql);
    $accounts =  $result->fetch_all(MYSQLI_ASSOC);
    return $accounts;
    }
    function getAllInquirersModel($db,$id){
        $sql = "SELECT * FROM `inquirers` inq JOIN `visitor-account` va ON va.visitor_account_id= inq.from_id WHERE inq.from_id = '$id' ORDER BY createdAt DESC
        LIMIT 1 ";
        $result = $db->query($sql);
        $accounts =  $result->fetch_all(MYSQLI_ASSOC);
        return $accounts;
    }
    $participants = [];
    $visitor_acc  = getAllVisitorAccountModel($db);
    foreach ($visitor_acc as $value) {
        $user =  getAllInquirersModel($db,$value['visitor_account_id']);
        if(!empty($user[0])){
            array_push( $participants, $user[0]);
        }
    }
    function getFacilityAllModel($db){
        $sql = "SELECT * FROM `facility` f JOIN `facility_availability` fa ON fa.facility_availability_id = f.availability_id WHERE f.archive = '0'";
        $result = $db->query($sql);
        $fetchAll =  $result->fetch_all(MYSQLI_ASSOC);
        return $fetchAll;
    }
    $response = array(
        "request"=>getAllReqDocu($db),
        "visitors"=>getAllReqDocu($db),
        "request_user"=>getAllAccountsPendingModel($db),
        "facilities"=>getFacilityAllModel($db),
        "inquirers"=>$participants,
        "feedback"=>getAllFeedback($db)

    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

call_user_func_array($function_name,$slice_function_params);
?>
