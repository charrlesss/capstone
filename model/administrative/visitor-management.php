<?php

function createAppointmentRequestVisitor($db,$id,$id_pic,$email,$fullname,$date,$time,$purpose){
    $createdAt = time();
    $sql= "INSERT INTO `visitor-appointment-request`
    (`fullname`, `id_picture`, `date`, `time`, `email`, `approved`, `declined`, `pending`, `deleted`, `visitor_id`,`purpose`,`req_createdAt`,`qr_code_filename`) 
    VALUES ('$fullname','$id_pic','$date','$time','$email','0','0','1','0','$id','$purpose','$createdAt','')";
    $db->query($sql);
    $last_id = $db->insert_id;
    return $last_id;
}
function checkIdPicture($db,$filname){
    $sql= "SELECT * FROM `visitor-appointment-request` WHERE `id_picture` ='$filname' ";
    $result = $db->query($sql);
    $requestCreated =  $result->fetch_assoc();
    return $requestCreated;
}

function getAllAppointmentRequest($db,$id){
    $sql= "SELECT * FROM `visitor-appointment-request` WHERE `visitor_id` ='$id' AND `deleted`= '0' ";
    $result = $db->query($sql);
    $requestCreated =  $result->fetch_all(MYSQLI_ASSOC);
    return $requestCreated;
}

function getAppointmentRequestById($db,$id){
    $sql= "SELECT * FROM `visitor-appointment-request` WHERE `visitor_req_id` ='$id' ";
    $result = $db->query($sql);
    $requestCreated =  $result->fetch_assoc();
    return $requestCreated;
}

function editAppointmentRequestVisitor($db,$id,$email,$fullname,$date,$time,$purpose){
    $sql = "UPDATE `visitor-appointment-request` SET `fullname`='$fullname',`date`='$date',`time`='$time',`purpose`='$purpose' WHERE `visitor_req_id`= '$id'";
    $db->query($sql);
}

function updateProfile($db,$id,$profile){
    $sql = "UPDATE `visitor-appointment-request` SET `id_picture`='$profile' WHERE `visitor_req_id`= '$id'";
    $db->query($sql);
}

function archiverRequestAppointment($db ,$id, $archive){
    $sql = "UPDATE `visitor-appointment-request` SET `deleted`='$archive' WHERE `visitor_req_id`= '$id'";
    $db->query($sql);
}

function upadteQrCodeRequestAppointment($db ,$id, $filename){
    $sql = "UPDATE `visitor-appointment-request` SET `qr_code_filename`='$filename' WHERE `visitor_req_id`= '$id'";
    $db->query($sql);
}




function visitorSendMessage($db,$message,$from_id){
    $createdAt = time();
    $visitor_sender = '1';
    $seen = "0";
    $sql = "INSERT INTO `inquirers`
    ( `message`, `from_id`, `createdAt`, `visitor_sender`, `seen`) VALUES 
    ('$message','$from_id','$createdAt','$visitor_sender','$seen')";
    $db->query($sql);
}

function staffSendMessage($db,$message,$id,$to_id){
    $createdAt = time();
    $visitor_sender = '1';
    $seen = "0";
    $sql = "INSERT INTO `inquirers`
    ( `message`, `from_id`, `createdAt`, `visitor_sender`, `seen`,`to_id`) VALUES 
    ('$message','$id','$createdAt','$visitor_sender','$seen','$to_id')";
    $db->query($sql);
}

function getAllInquirersModel($db ,$id){
    $sql = "SELECT * FROM `inquirers` inq JOIN `visitor-account` va ON va.visitor_account_id= inq.from_id WHERE inq.from_id = '$id' ORDER BY createdAt DESC
    LIMIT 1 ";
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

function updateSeenFromId($db,$id){
    $sql = "UPDATE `inquirers` SET `seen`='1' WHERE `from_id` = '$id'"; 
    $db->query($sql);
}

function getMyMessage($db,$id){
    $sql = "SELECT * FROM `inquirers` WHERE `from_id` ='$id'";
    $result = $db->query($sql);
    $staffMessage =  $result->fetch_all(MYSQLI_ASSOC);
    return $staffMessage;
}
function getStaffMessage($db,$id){
   $sql = "SELECT inq.*, aea.profile FROM `inquirers` inq JOIN `admin-employe-accounts` aea ON aea.account_id = inq.from_id WHERE inq.to_id ='$id'  ";
   $result = $db->query($sql);
   $staffMessage =  $result->fetch_all(MYSQLI_ASSOC);
   return $staffMessage;
}

function getVisitorMessage($db,$id){
    $sql = "SELECT inq.*, va.profile_link FROM `inquirers` inq LEFT JOIN
     `visitor-account` va ON va.visitor_account_id  = inq.from_id
      WHERE inq.from_id ='$id'  ";
    $result = $db->query($sql);
    $staffMessage =  $result->fetch_all(MYSQLI_ASSOC);
    return $staffMessage;
}
function getMyStaffMessage($db,$id,$staff_id){
    $sql = "SELECT inq.*, aea.profile FROM `inquirers` inq 
    JOIN `admin-employe-accounts` aea ON aea.account_id = inq.from_id  
    WHERE inq.from_id ='$staff_id' AND inq.to_id = '$id'";
    $result = $db->query($sql);
    $staffMessage =  $result->fetch_all(MYSQLI_ASSOC);
    return $staffMessage;
}

function getAllRequestCreatedModel($db){
    $sql = "SELECT * FROM `visitor-appointment-request` var JOIN `visitor-account` va ON var.visitor_id = va.visitor_account_id WHERE `deleted` ='0'" ;
    $result = $db->query($sql);
    $requestCreated =$result->fetch_all(MYSQLI_ASSOC);
    return $requestCreated;
}
function getRequestCreatedByIdModel($db,$id){
    $sql = "SELECT * FROM `visitor-appointment-request`  WHERE `visitor_req_id`='$id'" ;
    $result = $db->query($sql);
    $logcreated =  $result->fetch_assoc();
    return $logcreated;

}
function approvedRequestModel($db,$id){
   $sql =" UPDATE `visitor-appointment-request` SET `approved`='1',`pending`='0',`declined`='0' WHERE `visitor_req_id`= '$id'"; 
   $db->query($sql);
}
function declinedRequestModel($db,$id){
    $sql =" UPDATE `visitor-appointment-request` SET `approved`='0',`declined`='1', `pending`='0' WHERE `visitor_req_id`= '$id'"; 
    $db->query($sql);
}
function pendingRequestModel($db,$id){
    $sql =" UPDATE `visitor-appointment-request` SET `approved`='0',`declined`='0',`pending`='1' WHERE `visitor_req_id`= '$id'"; 
    $db->query($sql);
}
 
function creatAppointmentLog($db,$req_id){
    $time= time();
    $sql = "INSERT INTO `appointment-log`(`req_id`, `time`) VALUES ('$req_id','$time')";
    $result = $db->query($sql);
}

function removeAllRequestModel($db,$id){
    $sql = "UPDATE `visitor-appointment-request` SET  `deleted` ='1' WHERE `visitor_req_id`='$id'";
    $result = $db->query($sql);
}
 
function createVisitorLogModel($db,$fullname,$purpose,$id_pic,$status,$date,$timein){
    $log_archive = 0;
    $sql ="INSERT INTO `log-all-visitors`(`log_fullname`, `log_purpose`, `log_id_picture`, `log_date`, `log_timein`,`log_archive`,`log_visitor_status`, `log_timeout`) VALUES
    ('$fullname','$purpose','$id_pic','$date','$timein','$log_archive','$status','')";
    $db->query($sql);
    $last_id = $db->insert_id;
    return $last_id;

}

function getAllVisitorLogs($db){
    $sql = "SELECT va.IDpicture_filename, va.fullname,tit.* , tot.* ,lvst.* FROM `visitors-account` va
     JOIN `time-in-table` tit ON tit.visitors_id = va.visitors_account_id 
     JOIN `time-out-table` tot ON tot.time_in_id = tit.time_in_id
     JOIN `log_visitor_status_table` lvst ON lvst.log_visitor_status_id = va.status_id  ";
    $result = $db->query($sql);
    $logsCreated = $result->fetch_all(MYSQLI_ASSOC);
    return $logsCreated;
}

function addVisitorLogModel($db,$id,$message){
    $time = time();
    $sql = "INSERT INTO `logs-log`(`visitor_id`,`purpose`, `createdAt`) VALUES 
    ('$id','$message','$time')";
    $result = $db->query($sql);

}
function getVisitorStatusOptionModel($db){
    $sql = "SELECT * FROM `log_visitor_status_table`";
    $result = $db->query($sql);
    $position = $result->fetch_all(MYSQLI_ASSOC);
    return $position;
}

function removeAllVisitorLogModel($db,$id){
    $sql = "UPDATE `log-all-visitors` SET `log_archive`='1' WHERE `log_all_visitors_id` ='$id' ";
    $result = $db->query($sql);
}

function updateIdPictureLog($db,$id,$filename){
    $sql = "UPDATE `log-all-visitors` SET `log_id_picture`='$filename' WHERE `log_all_visitors_id` = '$id' ";
    $result = $db->query($sql);
}


function updateVisitorLogInfo($db,$id,$fullname,$purpose,$date,$timein,$timeout,$edit_visitor_status){
    $sql = "UPDATE `log-all-visitors` SET `log_fullname`= '$fullname',`log_purpose` ='$purpose',
     `log_date`='$date', `log_timein`='$timein', `log_timeout` ='$timeout', `log_visitor_status`='$edit_visitor_status' WHERE `log_all_visitors_id` ='$id' ";
    $result = $db->query($sql);
}


function getVisitorLogByIdModel($db,$id){
    $sql= "SELECT * FROM `log-all-visitors` WHERE `log_all_visitors_id` = '$id' ";
    $result = $db->query($sql);
    $logcreated =  $result->fetch_assoc();
    return $logcreated;
}

function timeoutVisitorLogModel($db,$id,$timeout){
    $sql= "UPDATE `time-out-table` SET `time_out` ='$timeout' WHERE `time_out_table_id` = '$id' ";
    $result = $db->query($sql);
}


function insertNewVisitorAccountModel($db,$id_pic,$fullname,$status_id,$qrcodeFilename){
$time = time();
$delete = '0';
  $sql =  "INSERT INTO `visitors-account`(`fullname`, `status_id`, `IDpicture_filename`,`qrcode_filename`,`createdAt`,`archive`,`register`) VALUES ('$fullname',$status_id,'$id_pic','$qrcodeFilename','$time','$delete','')";
  $db->query($sql);
  $last_id = $db->insert_id;
  return $last_id;
}

function updateRegisterVisitorAccountModel($db,$visitor_id,$register_id){
      $sql =  "UPDATE `visitors-account` SET  `register` = '$register_id' WHERE `visitors_account_id` = '$visitor_id'";
      $db->query($sql);
}

function getVisitorsByRegisterIdModel($db,$register_id){
      $sql =  "SELECT * FROM `visitors-account` WHERE  `register` = '$register_id'";
      $result = $db->query($sql);
      $logcreated =  $result->fetch_assoc();
      return $logcreated;
}

function getAllVisitorsAccountModel($db){
    $sql =  "SELECT * FROM  `visitors-account` vsa JOIN `log_visitor_status_table` lvst ON lvst.log_visitor_status_id = vsa.status_id WHERE vsa.archive ='0' ";
    $result = $db->query($sql);
    $visitors =  $result->fetch_all(MYSQLI_ASSOC);
    return $visitors;
}
  
function getVisitorsAccountByIdModel($db,$id){
    $sql =  "SELECT * FROM `visitors-account` WHERE `visitors_account_id`='$id'";
    $result = $db->query($sql);
    $logcreated =  $result->fetch_assoc();
    return $logcreated;
}

function updateVisitorsAccountByIdModel(
    $db,
    $id,
    $fullname,
    $status
){
    $sql = "UPDATE `visitors-account` SET `fullname`='$fullname',`status_id`='$status' WHERE `visitors_account_id` ='$id'";
    $db->query($sql);
}
function updateVisitorsIdPictureByIdModel($db,$filename,$id){
    $sql = "UPDATE `visitors-account` SET `IDpicture_filename`='$filename' WHERE `visitors_account_id` ='$id' ";
    $db->query($sql);
}
function  removeVisitorsAccountModel($db,$id){
    $sql = "UPDATE  `visitors-account` SET `archive` ='1'  WHERE `visitors_account_id` ='$id'";
    $db->query($sql);
}
function visitorsTimeinModel($db,$id,$timein,$date){
    $sql = "INSERT INTO `time-in-table`(`visitors_id`, `date`, `time`) VALUES ('$id','$date','$timein')";
    $db->query($sql);
    $last_id = $db->insert_id;
    return $last_id;
}
 function visitorsTimeout($db,$id){
   $sql= "INSERT INTO `time-out-table`(`time_in_id`, `time_out`) VALUES ('$id','')";
   $db->query($sql);
 }

 function getTimeinVisitorByQrCodeModel($db,$id,$date){
    $sql = "SELECT * FROM `time-in-table` tint LEFT JOIN `time-out-table` tot ON tot.time_in_id  =tint.time_in_id  WHERE tint.visitors_id ='$id' AND tint.date ='$date' AND  tot.time_out ='' ";
    $result = $db->query($sql);
    $logcreated =  $result->fetch_assoc();
    return $logcreated;
}

function timeoutVisitorByQrCodeModel($db,$id,$time){
    $sql = "UPDATE `time-out-table` SET `time_out`='$time' WHERE `time_out_table_id`='$id' ";
    $db->query($sql);
}
//eaffect

function affectVisitorLogs($db){
    $time = time();
    $sql = "SELECT IFNULL(CAST(`createdAt` AS INT),0) FROM `logs-log` WHERE  `createdAt` >='$time' ";
    $result = $db->query($sql);
    return $db->affected_rows;
}

function affectRequestAppointmentTable($db){
    $time = time();
    $sql = "SELECT IFNULL(CAST(`time` AS INT),0) FROM `appointment-log` WHERE  `time` >='$time' ";
    $result = $db->query($sql);
    return $db->affected_rows;
}
function effectAllRequestCreatedModel($db){
    $createdAt = time();
    $sql = "SELECT IFNULL(CAST(`req_createdAt` AS INT),0) FROM `visitor-appointment-request` WHERE `req_createdAt` >= '$createdAt'";
    $result = $db->query($sql);
    return $db->affected_rows;
}

function effectVisitorMessage($db){
    $time = time();
    $sql = "SELECT IFNULL(CAST(`createdAt` AS INT),0) FROM `inquirers` WHERE  `createdAt` >='$time' AND `to_id` IS NOT NULL ";
    $result = $db->query($sql);
    return $db->affected_rows;
}

function effectStaffMessage($db){
    $time = time();
    $sql = "SELECT IFNULL(CAST(`createdAt` AS INT),0) FROM `inquirers` WHERE  `createdAt` >='$time' AND `to_id` IS NULL ";
    $result = $db->query($sql);
    return $db->affected_rows;
}

?>