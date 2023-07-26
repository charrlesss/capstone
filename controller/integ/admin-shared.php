<?php
$controller_filename =basename(__FILE__);
$controller_request = $_SERVER['REQUEST_URI'];
include("../../dotenv.php");
include("$dir/controller/index.php");

    function loginAdmin(){
        include("../../dotenv.php");
        include("$dir/model/index.php");
        include("$dir/model/shared/login-admin_emloyee.php");

        $user = getAccountByEmployeeId($db,$_POST['employee_id']);
        if(empty($user)){
            $response = array(
                "message"=>'No account found in this id',
                "success"=>false
            );
            echo json_encode($response);
            return;
        }

        if($user['archive']){
            $response = array(
                "message"=>'This account its not being available.',
                "success"=>false
            );
            echo json_encode($response);
            return;
        }

        if(!password_verify($_POST['password'] , $user['password'])){
            $response = array(
                "message"=>'Password do not match',
                "success"=>false
            );
            echo json_encode($response);
            return;
        }
        
        $_SESSION['user'] = array(
            "profile"=>  $user['profile'],
            "email"=>  $user['email'],
            "firstname"=>  $user['firstname'],
            "lastname"=>  $user['lastname'],
            "middlename"=>  $user['middlename'],
            "gender"=>  $user['gender'],
            "address"=>  $user['address'],
            "birthdate"=>  $user['birthdate'],
            "contact_number"=>  $user['contact_number'],
            "position_id"=>  $user['position_id'],
            "department_id"=>  $user['department_id'],
            "account_id"=>  $user['account_id'],
            "position_name"=> $user['position_name']
        );

        $_SESSION['login_id'] = $user;
        $_SESSION['email']  =$user['email'];
        $_SESSION['password'] = $user['password'];

        log_account($db,$user['account_id'],'login');
        //1 core
        //2 financial
        //3 admin
        //4 hr department
        //5 log

        // /fms/logistic-1/admin/logistic-one/
        
        $_SESSION['userdata'] = $user;
        $_SESSION['userdata']['login_type'] = 1;
        $link = '';
        if( $user['department_id'] == '1' && $user['position_id'] == '1'){
            $link = "$url/";
        }else if( $user['department_id'] == '2' && $user['position_id'] == '1'){
            $link = "$url/freightcore2/admin/";
        }else if( $user['department_id'] == '3' && $user['position_id'] == '1'){
            $link = "$url/freght/freight-system/index.php?page=includes/hr1_dashboard";
        }else if( $user['department_id'] == '4' && $user['position_id'] == '1'){
            $link = "$url/hr1/admin/index.php?page=home";
        }else if( $user['department_id'] == '5' && $user['position_id'] == '1'){
            $link =  "$url/logistic-1/admin/logistic-one/";
        }else if( $user['department_id'] == '6' && $user['position_id'] == '1'){
            $link =  "$url/logistic-2/Pages/Main/All_dashboard.php";
        }else if( $user['department_id'] == '7' && $user['position_id'] == '1'){
            $link ="$url/financials/admin/financial-admin/";
        }else if( $user['department_id'] == '8' && $user['position_id'] == '1'){
            $link = "$url/admin/administrative/";
        }else{
            $link = "$url/admin/super_admin.php";
        }

        $response = array(
            "message"=>'Successfully Login',
            "success"=>true,
            "redirect"=>$link
        );
        echo json_encode($response);
    }

    function logout_account(){
        include("../../dotenv.php");
        include("$dir/model/index.php");
        include("$dir/model/shared/login-admin_emloyee.php");
        session_destroy();
        log_account($db,$_SESSION['user']['account_id'],'logout');
        $response = array(
            "message"=>'Successfully Logout',
            "success"=>true
        );
        echo json_encode($response);
    }







call_user_func_array($function_name,$slice_function_params);
?>