<?php

require_once 'admin_functions.php';

session_start();


// if (isset($_POST['adminlogin'])) {
//   $login = checkAdminUser($_POST);
//   if ($login) {
//     $_SESSION['isLoggedIn'] = true;
//     $_SESSION['username'] = $_POST['username'];
//     header('Location:../');
//     exit;
//   } else {
//     $_SESSION['showError'] = true;
//     $_SESSION['isLoggedIn'] = false;
//     header('Location:../');
//     exit;
//   }
// }


    if (isset($_POST['adminlogin'])) {
    $login = adminloginfunction($_POST);
    if ($login) {
        $_SESSION['isLoggedIn'] = true;
        // echo "<alert>alert('login successful')</alert>";
        header('Location:../');
    } else {
        echo "<alert>alert('Failed')</alert>";
        $_SESSION['showError'] = true;
        $_SESSION['isLoggedIn'] = false;
        header('Location:./pages/');
        exit();
    }
}



if (isset($_POST['create_user_by_admin'])) {
    if (createUser($_POST)) {
        header('Location:admin/');
        exit; // Terminate the script to ensure the redirect is executed
    } else {
        echo "<script>alert('Something went wrong')</script>";
    }
}

if(isset($_GET['logout'])){
session_destroy();
header('Location:../');

}
if(isset($_GET['updateprofile'])){
    if(updateAdmin($_POST)){
        $_SESSION['error']=[
            "field"=>"adminprofile",
            "msg"=>"profile update successfully !",
        ];
     header('Location:../?edit_profile');
    }else{
        $_SESSION['error']=[
            "field"=>"adminprofile",
            "msg"=>"something went wrong, try again later",
        ];
     header('Location:../?edit_profile');
    }
}


?>