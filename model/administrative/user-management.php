<?php



function createAdminAccount( 
    $db,
    $profile,
    $firstname,
    $lastname,
    $middlename,
    $gender,
    $email,
    $address,
    $birthdate,
    $country,
    $contact_number,
    $position_id,
    $department_id,
    $password,
    $account_status_id
){

    $middlename ="andrecoso";
    $sec = strtoupper($middlename[0]);
    $ret = date("njys");
    $employee_id = str_shuffle($sec.$ret);
    $archive ="0";
    $active ="0";
    $createdAt_account = (new \DateTime())->format('Y-m-d g:i:s');
    $sql = "INSERT INTO `admin-employe-accounts`(`profile`, `firstname`, `lastname`, `middlename`, `gender`, `email`,
     `address`, `birthdate`, `country`, `contact_number`, `position_id`, `department_id`, `employee_id`,
      `archive`, `active`,`createdAt_account`,`password`,`account_status_id`) VALUES 
    (
    '$profile',
    '$firstname',
    '$lastname',
    '$middlename',
    '$gender',
    '$email',
    '$address',
    '$birthdate',
    '$country',
    '$contact_number',
    '$position_id',
    '$department_id',
    '$employee_id',
    '$archive',
    '$active',
    '$createdAt_account',
    '$password',
    '$account_status_id'
    )";
    $db->query($sql);
}

function getUserDetailsById($db,$id){
    $sql = "SELECT * FROM `admin-employe-accounts` aea WHERE aea.account_id = '$id'";
    $result = $db->query($sql);
    $requestCreated =  $result->fetch_assoc();
    return $requestCreated;
}
function updatestatus($db,$id,$status){
    $sql = "UPDATE `admin-employe-accounts`  SET `account_status_id`='$status'  WHERE `account_id` = '$id'";
    $result = $db->query($sql);
}

function getAllPositionModel($db){
    
    $sql = "SELECT * FROM `position`";
    $result = $db->query($sql);
    $positions =  $result->fetch_all(MYSQLI_ASSOC);
    return $positions;
}

function getAllDepartmentModel($db){
    $sql = "SELECT * FROM `department`";
    $result = $db->query($sql);
    $departments =  $result->fetch_all(MYSQLI_ASSOC);
    return $departments;
}
function getAllAccountsModel($db){
    $sql = "SELECT * FROM `admin-employe-accounts` aea JOIN `position` p ON p.position_id = aea.position_id JOIN `department` d ON d.department_id = aea.department_id WHERE aea.account_status_id ='1'";
    $result = $db->query($sql);
    $accounts =  $result->fetch_all(MYSQLI_ASSOC);
    return $accounts;
}

function getAllAccountsPendingModel($db){
    $sql = "SELECT * FROM `admin-employe-accounts` aea JOIN `position` p ON p.position_id = aea.position_id JOIN `department` d ON d.department_id = aea.department_id WHERE aea.account_status_id ='2'";
    $result = $db->query($sql);
    $accounts =  $result->fetch_all(MYSQLI_ASSOC);
    return $accounts;
}

function getAllAccountsDeclinedModel($db){
    $sql = "SELECT * FROM `admin-employe-accounts` aea JOIN `position` p ON p.position_id = aea.position_id JOIN `department` d ON d.department_id = aea.department_id WHERE aea.account_status_id ='3'";
    $result = $db->query($sql);
    $accounts =  $result->fetch_all(MYSQLI_ASSOC);
    return $accounts;
}
?>