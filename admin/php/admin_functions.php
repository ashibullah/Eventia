<?php
require_once($function_url??'../../assets/php/functions.php');

//for checking the user

function checkAdminUser($login_data){
    global $db;

    $username =  $login_data['username'];
    $password =  $login_data['password'] ;
    $login_query = "SELECT * FROM admin WHERE username ='$username'  AND password ='$password'";
    $run = mysqli_query($db, $login_query);
    $num = mysqli_num_rows($run);

   if ($num >0) {
     $login = true;
     echo 'login successful';
   }
   else{
     $login = false;
     echo 'login failed';
   }
   return $login;
}

function adminloginfunction($login_data){
    global $db;

    $username_email =  $login_data['username'];
    $password =  $login_data['password'] ;
    $login_query = "SELECT * FROM admin WHERE  username='$username_email' AND password ='$password'";
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

//for checking the user
// function checkAdminUser($login_data){
// global $db;
//  $email = $login_data['email'];
//  $password=md5($login_data['password']);

//  $query = "SELECT * FROM admin WHERE email='$email' && password='$password'";
//  $run = mysqli_query($db,$query);
//  $data['user'] = mysqli_fetch_assoc($run)??array();
//  if(count($data['user'])>0){
//      $data['status']=true;
//      $data['user_id']=$data['user']['id'];
//  }
//  else{
//     $data['status']=false;

//  }

//  return $data;
// }


function getAdmin($user_id){
    global $db;
 $query = "SELECT * FROM admin WHERE id = $user_id";
 $run = mysqli_query($db,$query);
 return mysqli_fetch_assoc($run);
}


function totalCommentsCount(){
    global $db;
    $query="SELECT count(*) as row FROM comments";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];
}

function totalPostsCount(){
    global $db;
    $query="SELECT count(*) as row FROM posts";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];

}

function totalUsersCount(){
    global $db;
    $query="SELECT count(*) as row FROM users";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];

}
function totalPagesCount(){
    global $db;
    $query="SELECT count(*) as row FROM pages";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_assoc($run)['row'];

}



function getUsersList(){
    global $db;
    $query="SELECT * FROM users ORDER BY id DESC";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_all($run,true);
}
function getPageList(){
    global $db;
    $query="SELECT * FROM pages ORDER BY id DESC";
    $run = mysqli_query($db,$query);
    return mysqli_fetch_all($run,true);
}

// function loginUserByAdmin($email){
//     global $db;

   
//     $query = "SELECT * FROM users WHERE email='$email'";
//     $run = mysqli_query($db,$query);
//     $data['user'] = mysqli_fetch_assoc($run)??array();
//     if(count($data['user'])>0){
//         $data['status']=true;
//     }else{
//        $data['status']=false;
   
//     }
   
//     return $data; 
// }



function deleteUser($user_id){
    global $db;
    $query="DELETE FROM users WHERE id= $user_id";
    return mysqli_query($db,$query);
}
function deletePage($user_id){
    global $db;
    $query="DELETE FROM pages WHERE id = $user_id";
    return mysqli_query($db,$query);
}


function updateAdmin($data){
    global $db;
    $password = md5($data['password']);
    $password_text = $data['password'];
    $full_name = $data['full_name'];
    $email = $data['email'];
$user_id = $data['user_id'];


    $query="UPDATE admin SET full_name='$full_name',email='$email',password='$password',password_text='$password_text' WHERE id=$user_id";
    return mysqli_query($db,$query);
}
?>