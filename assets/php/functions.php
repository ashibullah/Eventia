<?php

require_once 'connect.php';
$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (!$db) {
    die("Cant Connect" .mysqli_connect_error());
    //echo 'Connected';
}
  
// function for showing pages
function showPage($page,$data=""){
    include ("assets/pages/$page.php");
}

// email available naki check korbe.
function validation($form_data){
    $response = array();
    if(!$form_data['email'] || !$form_data['password']){
        $response['msg']= "Invalid ";
        $response['status']= false;   
    }
    return $response;
}
// login check
// function checkUser($form_data){
//     $response = array();
//     $response['status'] = true;
//     if(!$form_data['email'] || !$form_data['password']){
//         $response['msg']= "Invalid ";
//         $response['status']= false;   
//     }
//     return $response;
// }
$login_data;
function checkUser($login_data){
    global $db;

    $username_email =  $login_data['username_email'];
    $password =  $login_data['password'] ;
    $login_query = "SELECT * FROM users WHERE (email='$username_email' OR username='$username_email') AND password ='$password'";
    $run = mysqli_query($db, $login_query);
    $num = mysqli_num_rows($run);
    $data['user'] = mysqli_fetch_assoc($run) ?? array();

   if ($num >0) {
     $login = true;
   }
   else{
     $login = false;
   }
   
   if($data['user']>0){
    $data['status'] = true;
   }
    else{
     $data['status'] = false;
    }
   return $data;
}
function checkadmin($login_data){
    global $db;

    $username_email =  $login_data['username_email'];
    $password =  $login_data['password'] ;
    $login_query = "SELECT * FROM admin WHERE (email='$username_email' OR username='$username_email') AND password ='$password'";
    $run = mysqli_query($db, $login_query);
    $num = mysqli_num_rows($run);

   if ($num >0) {
     $login = true;
   }
   else{
     $login = false;
   }
   return $login;
}


/*function checkUser($login_data){
    global $db;

    $username_email = isset($login_data['username_email']) ? $login_data['username_email'] : '';
    $password = isset($login_data['password']) ? $login_data['password'] : '';

    //checking 
    $login_query = "SELECT * FROM users WHERE (email='$username_email' OR username='$username_email') AND password ='$password'";
    $login_run = mysqli_query($db, $login_query);

    $user_data = array();
    if ($login_run) {
        $user_data['user'] = mysqli_fetch_assoc($login_run) ?? array();
        $user_data['status'] = !empty($user_data['user']);
    } else {
        $user_data['status'] = false;
    }

    return $user_data;
}

INSERT INTO `users` (`fname`, `lname`, `username`, `password`, `email`, `gender`) VALUES ('$fname', '$lname', '$username', '$password', '$password', '$gender');
*/




function createUser($data)/*creating user */{
    global $db;
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $password = md5($password); //md5 diye encript korsi
    $gender = $_POST["gender"];

    if($password == $cpassword){
        $sql_push = "INSERT INTO `users` (`fname`, `lname`, `username`, `password`, `email`, `gender`) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$gender');";
        // $result = mysqli_query($db, $sql_push);
        /// so much important return na korle function call kore expected result ashbe na
        return mysqli_query($db, $sql_push);
}
}
//getuser

function getUser($user_id){
    global $db;
 $query = "SELECT * FROM users WHERE id=$user_id";
 $run = mysqli_query($db,$query);
 return mysqli_fetch_assoc($run);

}

// function createUser2($data){
//     global $db;
//     $fname = $_POST["fname"];
//     $lname = $_POST["lname"];
//     $email = $_POST["email"];
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $gender = $_POST["gender"];
   
//     $sql_push = "INSERT INTO `users` (`fname`, `lname`, `username`, `password`, `email`, `gender`) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$gender');";
//     $result = mysqli_query($db, $sql_push);
//     if ($result) {
//         $regSucc = true;
//     } else {
//         echo 'Database error: ' . mysqli_error($db);
//     }
// }
function updateInfo($data){

    global $db;
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
   
    $sql_push = "INSERT INTO `users` (`fname`, `lname`, `username`, `password`, `email`, `gender`) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$gender');";
    $result = mysqli_query($db, $sql_push);
    if ($result) {
        $regSucc = true;
    } else {
        echo 'Database error: ' . mysqli_error($db);
    }

}
function uploadDP($data,$user_id){

    global $db;
    $query = "UPDATE users SET profile_pic = '$data' WHERE id = $user_id";
    // $result = mysqli_query($db, $query);
    return mysqli_query($db, $query);
   
   
  
}
function upload($data,$user_id){

    global $db;
    $query = "INSERT INTO pages SET profile_pic = '$data' where id = $user_id ";
    // $result = mysqli_query($db, $query);
    return mysqli_query($db, $query);
   
   
  
}

function createpage($data,$pagedp)/*creating page */{
    global $db;
     $name = $_POST["name"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $description = $_POST["description"];
            $insta = $_POST["insta"];
            $facebook = $_POST["facebook"];
            $currentTimestamp = time();

            // SQL query to insert page details with the uploaded picture name
            $sql_push = "INSERT INTO `pages` (`name`, `phone`, `address`, `description`, `time`, `pagedp`,`insta`, `facebook`) 
                         VALUES ('$name', '$phone', '$address', '$description', '$currentTimestamp', '$pagedp', '$insta', '$facebook')";
           
        // $result = mysqli_query($db, $sql_push);
        /// so much important return na korle function call kore expected result ashbe na
        return mysqli_query($db, $sql_push);
}
function editprofile($data) {
    global $db;

    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
    $profession = $data['profession'];
    $facebook = $data['facebook'];
    $insta = $data['insta'];

    // echo $user_id;
    // echo $profession;
    // echo $facebook;
    // echo $insta;
    $query = "UPDATE users SET profession = '$profession', facebook = '$facebook', insta = '$insta' WHERE id = $user_id";
    // // $result = mysqli_query($db, $query);
    return mysqli_query($db, $query);
}



//SEARCH
function search($data){
    global $db;
    
    $query = "SELECT * FROM pages WHERE name LIKE '%$data%' ";

    $result = mysqli_query($db, $query);
    return $result;
}

?>