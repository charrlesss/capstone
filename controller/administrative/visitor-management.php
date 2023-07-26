<?php
$controller_filename =basename(__FILE__);
$controller_request = $_SERVER['REQUEST_URI'];
include("../../dotenv.php");
include("$dir/controller/index.php");
use Ramsey\Uuid\Uuid;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;

function logout_visitor_account(){
    session_destroy();
    $response = array(
        "logout"=>"Logout Successfully",
        "success"=>true
    );
    echo json_encode($response);
}

function get_all_appointment_request($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");
    
    $response = array(
        "appoint_req"=>getAllAppointmentRequest($db ,$id),
        "success"=>$id
    );
    
    echo json_encode($response);
}


function visitor_create_appointment_request(){
        include("../../dotenv.php");
        include("$dir/model/index.php");
        include("$dir/model/administrative/visitor-management.php");

        $id_picture = $_FILES['file'];
        $visitorSamePic = checkIdPicture($db ,$id_picture['name']);
        if(!empty($visitorSamePic)){
            $newId = createAppointmentRequestVisitor($db,
            $_POST['visitor_id'],
            $id_picture['name'],
            $_POST['email'],
            $_POST['fullname'],
            $_POST['date'],
            $_POST['time'],
            $_POST['purpose']);
        
            creatAppointmentLog($db,$newId);
        
            $response = array(
                "message"=>"Create Request Appointment Successfully",
                "success"=>true
            );
            echo json_encode($response);
            return;
        }

        $uuid = Uuid::uuid4();
        $fileNameParts = explode('.',$id_picture['name']);
        $ext = end($fileNameParts);
        $secretname =$uuid->toString();
        $filename = "$secretname.$ext";
        $uploaddir = $dir."/assets/request-appointment-id-picture/";
        $uploadfile = $uploaddir . basename($filename);

     

        if(!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
            $response = array(
                "message"=>"Server Error",
                "success"=>$_POST['visitor_id']
            );
            header('Content-Type: application/json; charset=utf-8');
            echo   json_encode($response);
            return;
        }

   $newId = createAppointmentRequestVisitor($db,
    $_POST['visitor_id'],
    $filename,
    $_POST['email'],
    $_POST['fullname'],
    $_POST['date'],
    $_POST['time'],
    $_POST['purpose']);

    creatAppointmentLog($db,$newId);

    $response = array(
        "message"=>"Create Request Appointment Successfully",
        "success"=>true
    );
    echo json_encode($response);
}


function visitor_edit_appointment_request(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $prev_req = getAppointmentRequestById($db,$_POST['req_id']);
    $prev_req['id_picture'];

    $id_picture = $_FILES['file'];
    $uuid = Uuid::uuid4();
    $fileNameParts = explode('.',$id_picture['name']);
    $ext = end($fileNameParts);
    $secretname =$uuid->toString();
    $filename = "$secretname.$ext";
    $uploaddir = $dir."/assets/request-appointment-id-picture/";
    $uploadfile = $uploaddir . basename($filename);

    if($id_picture['name'] != $prev_req['id_picture']){
        if(!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
            $response = array(
                "message"=>"Server Error",
                "success"=>false
            );
            header('Content-Type: application/json; charset=utf-8');
            echo   json_encode($response);
            return;
        }
        updateProfile($db , $_POST['req_id'],$filename);
    }
  

    editAppointmentRequestVisitor($db,
        $_POST['req_id'],
        $_POST['email'],
        $_POST['fullname'],
        $_POST['date'],
        $_POST['time'],
        $_POST['purpose']);

        creatAppointmentLog($db, $_POST['req_id']);

        $response = array(
            "message"=>"Update Request Appointment Successfully",
            "success"=>true
        );
        echo json_encode($response);
}

function visitor_remove_appointment_request($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    archiverRequestAppointment($db ,$id,"1");

    creatAppointmentLog($db, $id);
    $response = array(
        "message"=>"Delete Request Appointment Successfully",
        "success"=>true
    );
    echo json_encode($response);
}


function visitor_send_message($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");
    visitorSendMessage($db,$_POST['visitor-message'],$id);
    $response = array(
        "message"=>"Sent Message Successfully",
        "success"=>true
    );
    echo json_encode($response);
    
}

function staff_send_message($id,$to_id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");
    staffSendMessage($db,$_POST['staff-message'],$id,$to_id);
    $response = array(
        "message"=>"Sent Message Successfully",
        "success"=>true
    );
    echo json_encode($response);
    
}

function get_all_inquirers(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");
    
    $participants = [];
    $visitor_acc  = getAllVisitorAccountModel($db);
    foreach ($visitor_acc as $value) {
        $user =  getAllInquirersModel($db,$value['visitor_account_id']);
        if(!empty($user[0])){
            array_push( $participants, $user[0]);
        }
    }
    $response = array(
        "participants"=> $participants,
        "success"=>true
    );
    echo json_encode($response);
}

function redirect_to_user_chat($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $_SESSION['visitor_chat_id'] = $id;
    $response = array(
        "redirect"=>"redirect to user chat",
        "success"=>true
    );
    echo json_encode($response);
}

function redirect_to_user_chat_update_seen($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    updateSeenFromId($db,$id);
    $_SESSION['visitor_chat_id'] = $id;
    $response = array(
        "redirect"=>"redirect to user chat",
        "success"=>true
    );
    echo json_encode($response);
}


function fetchVisitorConvo($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $response = array(
        "my_message"=>getMyMessage($db,$id),
        "staff_message"=>getStaffMessage($db,$id),
        "affect"=>effectVisitorMessage($db)
    );
    echo json_encode($response);
}

function fetchStaffConvo($id,$staff_id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $response = array(
        "my_message"=>getMyStaffMessage($db,$id,$staff_id),
        "visitor_message"=>getVisitorMessage($db,$id),
        "affect"=>effectStaffMessage($db)
    );
    echo json_encode($response);
}


function getAllRequestCreated(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $response = array(
        "request_created"=>getAllRequestCreatedModel($db),
        "affect"=>affectRequestAppointmentTable($db)
    );
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function approvedRequest($status,$id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");
    include("$dir/controller/shared_components.php");

    
    if($status === 'pending'){
        pendingRequestModel($db,$id);
        creatAppointmentLog($db,$id);

        $response = array(
            "message"=>"Pending Successfully",
            "success"=>true
        );
        echo json_encode($response);
        return;

    }else if($status === 'declined'){
        declinedRequestModel($db,$id);
        creatAppointmentLog($db,$id);
        $response = array(
            "message"=>"Declined Successfully",
            "success"=>true
        );
        echo json_encode($response);
        return;
        
    }else{
        creatAppointmentLog($db,$id);
        approvedRequestModel($db,$id);
        $visitor_req = getRequestCreatedByIdModel($db,$id);
        $filename = $visitor_req['id_picture'];
        $fullname = $visitor_req['fullname'];
        $status_id = "1";
        $writer = new PngWriter();
        
        $qrcodeName = Uuid::uuid4();
        $qrcodeEx = 'png';
        $qrcodeFilename = "$qrcodeName.$qrcodeEx";
        $newId = '';
        $getVisitorRegister = getVisitorsByRegisterIdModel($db,$id);
        if(empty($getVisitorRegister)){
            $newId =insertNewVisitorAccountModel($db,$filename,$fullname,$status_id,$qrcodeFilename);
            updateRegisterVisitorAccountModel($db , $newId ,$id);
        }else{
            $newId = $getVisitorRegister['visitors_account_id'];
        }

        sendEmail(
            $SYSTEM_EMAIL,
            $SYSTEM_EMAIL_PASSWORD,
            $visitor_req['email'],
            "Hi From Freight Administrative Management",
            "Your Appointment Request is Approved."
        );
        upadteQrCodeRequestAppointment($db,$id,$qrcodeFilename);
        
        $qrCode = QrCode::create("$url/controller/administrative/visitor-management.php/logVisitorByQrcode/$newId")
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));
            $result = $writer->write($qrCode);
            $result->saveToFile("$dir/assets/qr-code/$qrcodeFilename");

        addVisitorLogModel($db,$newId,"Create Account Successfully.");

        $response = array(
            "message"=>"Approved Successfully",
            "success"=>true
        );
        echo json_encode($response);
        return;
    }
 
}

function removeAllRequest(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");
    
    $data = json_decode($_POST['data']);
        foreach($data as $key => $val) {
            removeAllRequestModel($db,$val->visitor_req_id);
            creatAppointmentLog($db,$val->visitor_req_id);
        }

    $response = array("message"=>"Your file has been deleted.","success"=>true);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}


function exportRequest(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $fields = [];
    $header  = '';
    $excelData = '';

    $data = json_decode($_POST['data']);
       foreach($data as $key => $val) {
        $lineData = [];
        foreach($val as $keys => $vals) {
            $header = strval($keys);
            array_push($fields,strtoupper($header));
            array_push($lineData,$vals);
        }
        if($excelData ==''){
            $excelData .= implode("\t", array_values($fields)) . "\n"; 
        }
        
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    }

 $response =   array(
    'file' => "data:application/vnd.ms-excel;base64,".base64_encode($excelData)
 );
 header('Content-Type: application/json; charset=utf-8');
echo  json_encode($response);
}


function createVisitorLog(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

 
    $date = $_POST['log_date'];
    $timein = $_POST['create_timein'];
    $fullname = $_POST['fullname'];
    $purpose = $_POST['purpose'];
    $status = $_POST['visitor_status'];
    $id_picture = $_FILES['file'];

    $uuid = Uuid::uuid4();
    $fileNameParts = explode('.',$id_picture['name']);
    $ext = end($fileNameParts);
    $secretname =$uuid->toString();
    $filename = "$secretname.$ext";
    $uploaddir = $dir."/assets/request-appointment-id-picture/";
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


    $newId =createVisitorLogModel($db,$fullname,$purpose,$filename,$status,$date,$timein);
    addVisitorLogModel($db,$newId,"New Visitor Log.");

    $response = array("message"=>"Log Successfully.","success"=>true);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}


function getAllVisitosLogsCreated(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $response = array(
        "request_created"=>getAllVisitorLogs($db),
        "affect"=>affectVisitorLogs($db)
    );
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function getVisitorStatusOption(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $response = array(
        "visitor_status"=>getVisitorStatusOptionModel($db)
    );
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function removeAllVisitorLog(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");
    $data = json_decode($_POST['data']);
    foreach($data as $key => $val) {
        removeAllVisitorLogModel($db,$val->log_all_visitors_id);
        addVisitorLogModel($db,$val->log_all_visitors_id,"Remove Visitor Log.");
    }

    $response = array("message"=>"Your file has been deleted.","success"=>true);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function removeVisitorLog($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    removeAllVisitorLogModel($db,$id);
    addVisitorLogModel($db,$id,"Remove Visitor Log.");

    $response = array("message"=>"Your file has been deleted.","success"=>true);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function editVisitorLog(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $id = $_POST['log_id'];
    $prev_log = getVisitorLogByIdModel($db,$id);
    $id_picture = $_FILES['file'];
    $fullname = $_POST['fullname'];
    $date = $_POST['date'];
    $timein = $_POST['time'];
    $purpose = $_POST['purpose'];
    $timeout = $_POST['timeout'];
    $edit_visitor_status = $_POST['edit_visitor_status'];

    

    $uuid = Uuid::uuid4();
    $fileNameParts = explode('.',$id_picture['name']);
    $ext = end($fileNameParts);
    $secretname =$uuid->toString();
    $filename = "$secretname.$ext";
    $uploaddir = $dir."/assets/request-appointment-id-picture/";
    $uploadfile = $uploaddir . basename($filename);

    if($id_picture['name'] != $prev_log['log_id_picture']){
        if(!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
            $response = array(
                "message"=>"Server Error",
                "success"=>false
            );
            header('Content-Type: application/json; charset=utf-8');
            echo   json_encode($response);
            return;
        }
        
        updateIdPictureLog($db,$id,$filename);
        addVisitorLogModel($db,$id,"Remove Visitor Log.");
    }
  
    updateVisitorLogInfo($db,$id,$fullname,$purpose ,$date,$timein,$timeout,$edit_visitor_status);
    
    addVisitorLogModel($db,$id,"Remove Visitor Log.");

    $response = array(
        "message"=>"Update Visitor Log Successfully",
        "success"=>true
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);

}

function timeoutVisitorLog($id,$timeout){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    timeoutVisitorLogModel($db,$id,$timeout);
    addVisitorLogModel($db,$id,"Time out Successfully.");

    $response = array(
        "message"=>"Timeout Successfully",
        "success"=>true,
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);

}


function insertNewVisitorAccount(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

   $fullname =  $_POST['fullname'];
   $id_picture =  $_FILES['file'];
   $status_id = $_POST['visitor_status'];

   $uuid = Uuid::uuid4();
    $fileNameParts = explode('.',$id_picture['name']);
    $ext = end($fileNameParts);
    $secretname =$uuid->toString();
    $filename = "$secretname.$ext";
    $uploaddir = $dir."/assets/request-appointment-id-picture/";
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

    $writer = new PngWriter();

    // Create QR code
    $qrcodeName = Uuid::uuid4();
    $qrcodeEx = 'png';
    $qrcodeFilename = "$qrcodeName.$qrcodeEx";
    $newId =insertNewVisitorAccountModel($db,$filename,$fullname,$status_id,$qrcodeFilename);
    
    $qrCode = QrCode::create("$url/controller/administrative/visitor-management.php/logVisitorByQrcode/$newId")
        ->setEncoding(new Encoding('UTF-8'))
        ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
        ->setSize(300)
        ->setMargin(10)
        ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
        ->setForegroundColor(new Color(0, 0, 0))
        ->setBackgroundColor(new Color(255, 255, 255));
        $result = $writer->write($qrCode);
        $result->saveToFile("$dir/assets/qr-code/$qrcodeFilename");

    addVisitorLogModel($db,$newId,"Create Account Successfully.");

    $response = array(
        "message"=>"Create Account Successfully",
        "success"=>true,
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);

}

function getAllVisitorsAccount(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $response = array(
        "request_created"=>getAllVisitorsAccountModel($db),
        "affect"=>affectVisitorLogs($db)
    );
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}


function editVisitorsAccount(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");


    $id = $_POST['visitors_id'];
    $prev_log = getVisitorsAccountByIdModel($db,$id);
    $id_picture = $_FILES['edit-file'];
    $fullname = $_POST['fullname'];
    $status = $_POST['visitor_status'];

    

    $uuid = Uuid::uuid4();
    $fileNameParts = explode('.',$id_picture['name']);
    $ext = end($fileNameParts);
    $secretname =$uuid->toString();
    $filename = "$secretname.$ext";
    $uploaddir = $dir."/assets/request-appointment-id-picture/";
    $uploadfile = $uploaddir . basename($filename);

    if($id_picture['name'] != $prev_log['IDpicture_filename']){
        if(!move_uploaded_file($id_picture['tmp_name'], $uploadfile)){
            $response = array(
                "message"=>"Server Error",
                "success"=>false
            );
            header('Content-Type: application/json; charset=utf-8');
            echo   json_encode($response);
            return;
        }

        updateVisitorsIdPictureByIdModel($db,$filename,$id);
    }


    updateVisitorsAccountByIdModel(
        $db,
        $id,
        $fullname,
        $status
    );
    addVisitorLogModel($db,$id,"Update Account Successfully.");

    $response = array(
        "message"=>"Update Visitor Account Successfully",
        "success"=>true
    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);

}


function removeVisitorsAccount($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    removeVisitorsAccountModel($db,$id);
    addVisitorLogModel($db,$id,"Update Account Successfully.");

    $response = array("message"=>"Account Deleted Successfully.","success"=>true);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function visitorsTimein($id,$timein,$date){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $timein_id = visitorsTimeinModel($db,$id,$timein,$date);
    visitorsTimeout($db,$timein_id);
    $response = array("message"=>"Time in Successfully.","success"=>true);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function logVisitorByQrcode($id){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");
    $visitor  =getVisitorsAccountByIdModel($db,$id);


    $response = array("message"=>"Time in Successfully.","success"=>true ,"visitor"=> $visitor);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}

function getTimeinVisitorByQrCode($id,$date,$time){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");


    $visitorTimein = getTimeinVisitorByQrCodeModel($db,$id,$date);
    $timeout_id = $visitorTimein['time_out_table_id'];
    timeoutVisitorByQrCodeModel($db,$timeout_id,$time);


    $response = array("message"=>"Time out Successfully", "success"=>true );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}
call_user_func_array($function_name,$slice_function_params);
exit();
?>