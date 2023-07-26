<?php


function getFacilityAvailabilityModel($db){
    $sql = "SELECT * FROM `facility_availability`";
    $result = $db->query($sql);
    $fetchAll =  $result->fetch_all(MYSQLI_ASSOC);
    return $fetchAll;
}


function createFacilityModel(
    $db,
    $facility_image,
    $facility_name,
    $facility_location,
    $facility_availability,
    $facility_capacity,
    ){
    $sql = "INSERT INTO `facility`(`facility_name`, `availability_id`, `capacity`,
     `location`,`facility_image`,`rules_id`,`archive`) VALUES 
     ('$facility_name','$facility_availability','$facility_capacity','$facility_location','$facility_image','0')";
    $result = $db->query($sql);
}



function getFacilityAllModel($db){
    $sql = "SELECT * FROM `facility` f JOIN `facility_availability` fa ON fa.facility_availability_id = f.availability_id WHERE f.archive = '0'";
    $result = $db->query($sql);
    $fetchAll =  $result->fetch_all(MYSQLI_ASSOC);
    return $fetchAll;
}

function createScheduleFacilityModel(
    $db,
    $facility_id,
    $recipient_name,
    $start_date,
    $end_date,
    $start_time,
    $end_time,
    $capacity_input,
    $puspose
){
    $sql = "INSERT INTO `schedule_facility`
    ( `facility_id`, `recipient_name`, `start_date`, `end_date`, `start_time`, `end_time`, `purpose`, `participants`,`approved`,`pending`,`declined`,`archive`) 
    VALUES ('$facility_id','$recipient_name','$start_date','$end_date','$start_time','$end_time','$puspose','$capacity_input','0','1','0',0)";
     $db->query($sql);
   
}
function facilityScheduleByIdModel($db,$id){
    $sql = "SELECT * FROM `schedule_facility` WHERE `facility_id` ='$id' AND `approved` ='1' AND `archive` ='0'";
    $result = $db->query($sql);
    $fetchAll =  $result->fetch_all(MYSQLI_ASSOC);
    return $fetchAll;
}


function getAllByStatusFacilityScheduleModel($db ,$pending,$decline,$approved){
    $sql = "SELECT * FROM `schedule_facility` sf JOIN `facility` f ON f.facility_id = sf.facility_id  WHERE  sf.pending ='$pending' AND sf.declined = '$decline' AND sf.approved ='$approved' AND sf.archive ='0' ";
    $result = $db->query($sql);
    $fetchAll =  $result->fetch_all(MYSQLI_ASSOC);
    return $fetchAll;
}

function removeAllFacilityModel($db,$id){
    $sql = "UPDATE `facility`  SET `archive` ='1' WHERE `facility_id` = '$id'";
    $db->query($sql);
}

function editScheduleFacilityModel(
    $db,
    $id,
    $recipient_name,
    $start_date,
    $end_date,
    $start_time,
    $end_time,
    $capacity_input,
    $puspose
){
  $sql =  "UPDATE `schedule_facility` SET `recipient_name`='$recipient_name',`start_date`='$start_date',`end_date`='$end_date',`start_time`='$start_time',`end_time`='$end_time',`purpose`='$puspose',`participants`='$capacity_input' WHERE `schedule_facility_id` ='$id'";
  $db->query($sql);
}


function removePendingSchedModel($db,$id){
    $sql = "UPDATE  `schedule_facility` SET `archive` ='1' WHERE `schedule_facility_id` ='$id'";
    $db->query($sql);

}

function getFacilityById($db,$facility_id){
    $sql = "SELECT * FROM  `facility` WHERE `facility_id` ='$facility_id'";
    $result = $db->query($sql);
    $logcreated =  $result->fetch_assoc();
    return $logcreated;
}
function updateFacilityImageById($db,$id,$filename){
    $sql = "UPDATE `facility` SET `facility_image`='$filename' WHERE `facility_id`='$id'";
    $db->query($sql);
}

function updateFacilityDetails(
    $db,
    $facility_id,
    $facility_name,
    $location,
    $availability,
    $capacity
){
    $sql = "UPDATE `facility` SET `facility_name`='$facility_name',`availability_id`='$availability',`capacity`='$capacity',`location`='$location'  WHERE `facility_id`='$facility_id'";
    $db->query($sql);
}
// affect

function affectVisitorLogs($db){
    $time = time();
    $sql = "SELECT IFNULL(CAST(`createdAt` AS INT),0) FROM `logs-log` WHERE  `createdAt` >='$time' ";
    $result = $db->query($sql);
    return $db->affected_rows;
}

?>