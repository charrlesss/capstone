<?php
$controller_filename =basename(__FILE__);
$controller_request = $_SERVER['REQUEST_URI'];
include("../../dotenv.php");
include("$dir/model/index.php");
include("$dir/controller/index.php");
use Ramsey\Uuid\Uuid;

function createAccount(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");


        $profile=$_FILES['profile'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $middlename = $_POST['middlename'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $birthdate = $_POST['birthdate'];
        $country = $_POST['country'];
        $contact_number = $_POST['contact_number'];
        $position_id = $_POST['position_id'];
        $department_id = $_POST['department_id'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $uuid = Uuid::uuid4();
        $fileNameParts = explode('.', $profile['name']);
        $ext = end($fileNameParts);
        $secretname = $uuid->toString();
        $filename = "$secretname.$ext";

        //admin
        $uploaddirAdmin =    $dir.'/assets/profile/';
        $uploadfileAdmin = $uploaddirAdmin . basename($filename);  
       
        //financial
        $uploaddirfin =    $dir.'/financials/assets/profile/';
        $uploadfilefin = $uploaddirfin . basename($filename);

        //logistic-1
        $uploaddirLog1 =    $dir.'/logistic-1/assets/profile/';
        $uploadfileLog1 = $uploaddirLog1 . basename($filename);

         //logistic -2
         $uploaddirLog2 =    $dir.'/logistic-2/assets/profile/';
         $uploadfileLog2 = $uploaddirLog2 . basename($filename);


           //hr1
           $uploaddirhr1 =    $dir.'/hr1/admin/assets/profile/';
           $uploadfilehr1 = $uploaddirhr1 . basename($filename);
           
           //hr2
           $uploaddirhr2 =    $dir.'/freght/freight-system/assets/profile/';
           $uploadfilehr2 = $uploaddirhr2 . basename($filename);




        move_uploaded_file($profile['tmp_name'], $uploadfileAdmin);
        //log -1
        copy( $uploadfileAdmin, $uploadfileLog1);
        //log -2
        copy( $uploadfileAdmin, $uploadfileLog2);
        //finance
        copy( $uploadfileAdmin, $uploadfilefin);
        //hr1
        copy( $uploadfileAdmin, $uploadfilehr1);
        //hr2
        copy( $uploadfileAdmin, $uploadfilehr2);

        if($_SESSION['user']['department_id'] == '8'){
            createAdminAccount(
                $db,
                $filename,
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
                "1"
            );

            $response = array(
                "message"=>"Create Account Successfully",
                "success"=>true
    
            );
        echo json_encode($response);
        return ;
    
        }

        createAdminAccount(
            $db,
            $filename,
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
            "2"
        );


     

        $response = array(
            "message"=>"Create Account Successfully",
            "success"=>true

        );
    echo json_encode($response);
}


function getAllPosition(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");
    $response = array(
        "position"=>getAllPositionModel($db),
        "department"=>getAllDepartmentModel($db)
    );
    echo json_encode($response);
}
function get_all_accounts_pending(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");
    $response = array(
        "accounts"=>getAllAccountsPendingModel($db)
    );
    echo json_encode($response);
}
function get_all_accounts_declined(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");
    $response = array(
        "accounts"=>getAllAccountsDeclinedModel($db)
    );
    echo json_encode($response);
}


function get_all_accounts(){

    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");
    $response = array(
        "accounts"=>getAllAccountsModel($db)
    );
    echo json_encode($response);

}

function approved_account(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/user-management.php");
    include("$dir/controller/shared_components.php");

    $user = getUserDetailsById($db,$_POST['account_id']);
    $employee_id =$user['employee_id'];
    $email =$_POST['email'];
    updatestatus($db,$_POST['account_id'],'1');

    sendEmail(
        $SYSTEM_EMAIL,
        $SYSTEM_EMAIL_PASSWORD,
        $email,
        "Hi From Freight Administrative Management",
        "HI $email welcome to the family your ID is $employee_id "
    );
    $response = array(
        "message"=>"Approved Accoount Successfully",
        "success"=>true

    );
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
}


 










call_user_func_array($function_name,$slice_function_params);
?>