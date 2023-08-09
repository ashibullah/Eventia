<?php
// require_once 'functions.php';
// // for signup
// if (createUser($_POST)) {

//     header('Location: ../../?login');
//     exit; // Terminate the script to ensure the redirect is executed
// } else {
//     echo "<script>alert('Something is wrong')</script>";
// }

// // for log in
// if (isset($_GET['login'])) {
//     $result = checkUser($_POST);
//     echo '<pre>';
//     print_r($result);
//     echo '</pre>';
// }


require_once 'functions.php';

// For sign up
if (isset($_POST['signup'])) {
    if (createUser($_POST)) {
        header('Location: ../../?login');
        exit; // Terminate the script to ensure the redirect is executed
    } else {
        echo "<script>alert('Something went wrong')</script>";
    }
}
// For sign up
if (isset($_POST['create_user_by_admin'])) {
    if (createUser($_POST)) {
        header('Location:admin/');
        exit; // Terminate the script to ensure the redirect is executed
    } else {
        echo "<script>alert('Something went wrong')</script>";
    }
}

// For login
session_start();

if (isset($_POST['login'])) {
    $login = checkUser($_POST);
    

    // print_r($login);
    if ($login) {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['username'] = $_POST['login'];
        $_SESSION['user'] = $login['user'];
        
        
        // echo $login['user']['id'];
        // echo 'login successfull';
        header('Location: ../../?home');
        exit();
    } 
    else {
        $_SESSION['showError'] = true;
        $_SESSION['isLoggedIn'] = false;
        header('Location: ../../?login');
        exit();
    }
}

if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['login'])) {
        header('Location: ../../?home');
        exit();
    }
}




// For logout

if (isset($_GET['logout'])) {
    session_destroy();
    $count = 0;
    $_SESSION['isLoggedIn'] = false;
    header('location: ../../?home');

}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload'])) {
    // Check if a file was uploaded successfully
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {
        $targetDir = '../../assets/img/profile/'; // Directory to store the uploaded profile pictures
        $targetFile = $targetDir . basename($_FILES['profile_pic']['name']);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $targetFile)) {
            // Update the profile picture in the database
            $profile_pic = $_FILES['profile_pic']['name'];
            global $db;
            $id = $_SESSION['user']['id'];
            $query = "SELECT * FROM users WHERE id = $id";
            $result = mysqli_query($db, $query);
            // Fetch the profile picture data from the result
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $result = uploadDP($profile_pic, $id);
            header('location: ../../?editprofile');
        } else {

            echo 'Failed to upload the profile picture.';
        }
    } else {

        echo 'Please choose a file to upload.';
    }
}

//pagedp upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pagedpupload'])) {
    // Check if a file was uploaded successfully
    if (isset($_FILES['pagedp']) && $_FILES['pagedp']['error'] === UPLOAD_ERR_OK) {
        $targetDir = '../../assets/img/pages/'; // Directory to store the uploaded profile pictures
        $targetFile = $targetDir . basename($_FILES['pagedp']['name']);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['pagedp']['tmp_name'], $targetFile)) {
            // Update the profile picture in the database
            $profile_pic = $_FILES['pagedp']['name'];
            global $db;
            $query = "SELECT * FROM pages";
            $result = mysqli_query($db, $query);
            // Fetch the profile picture data from the result
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $result = upload($profile_pic, $id);
            header('location: ../../?createpage');
        } else {

            echo 'Failed to upload the profile picture.';
        }
    } else {

        echo 'Please choose a file to upload.';
    }
}

if(isset($_POST['updateInfo'])){
    $result = editprofile($_POST);
    if($result){
        header('location: ../../?editprofile');
    }else{
        echo 'Something went wrong';
    }
}
// For create pages
// if (isset($_POST['createpage'])) {
//     if (createpage($_POST)) {
//         header('Location: ../../?pages');
//         exit; // Terminate the script to ensure the redirect is executed
//     } else {
//         echo "<script>alert('Something went wrong')</script>";
//     }
// }


// For pagedp upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['createpage'])) {
    // Check if a file was uploaded successfully
    if (isset($_FILES['pagedp']) && $_FILES['pagedp']['error'] === UPLOAD_ERR_OK) {
        $targetDir = '../../assets/img/pages/'; // Directory to store the uploaded page pictures
        $targetFile = $targetDir . basename($_FILES['pagedp']['name']);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['pagedp']['tmp_name'], $targetFile)) {
            // File uploaded successfully, now you can store the file name in the database
            $pagedp = $_FILES['pagedp']['name'];

            // Perform the database insert operation
            $result = createpage($_POST, $pagedp);

            // Check if the query was successful
            if ($result) {
                header('location: ../../?pages');
                exit;
            } else {
                echo 'Failed to insert page details into the database.';
            }
        } else {
            echo 'Failed to upload the page picture.';
        }
    } else {
        echo 'Please choose a file to upload.';
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['createpage_BA'])) {
    // Check if a file was uploaded successfully
    if (isset($_FILES['pagedp']) && $_FILES['pagedp']['error'] === UPLOAD_ERR_OK) {
        $targetDir = '../../assets/img/pages/'; // Directory to store the uploaded page pictures
        $targetFile = $targetDir . basename($_FILES['pagedp']['name']);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['pagedp']['tmp_name'], $targetFile)) {
            // File uploaded successfully, now you can store the file name in the database
            $pagedp = $_FILES['pagedp']['name'];

            // Perform the database insert operation
            $result = createpage($_POST, $pagedp);

            // Check if the query was successful
            if ($result) {
                header('location: ../../admin\index.php');
                exit;
            } else {
                echo 'Failed to insert page details into the database.';
            }
        } else {
            echo 'Failed to upload the page picture.';
        }
    } else {
        echo 'Please choose a file to upload.';
    }
}



// For Search

// if(isset($_GET['search'])){
//     $result = search($_GET['search']);
//     if($result){
//         $_SESSION['search_result'] = $result;
//         header('location: ../../?search');
        
//     }else{
//         echo 'Something went wrong';
//     }
 
// }
?>