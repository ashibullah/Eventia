<?php
require_once('admin_functions.php');



if(isset($_GET['delete_user']) && isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
  
    if(deleteUser($user_id)) {
      
        header('Location: ../../admin/');
      exit;
    } else {
      echo json_encode(array('status' => 'error', 'message' => 'Failed to delete user.'));
      exit;
    }
  }
if(isset($_GET['delete_page']) && isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
  
    if(deletePage($user_id)) {
      
        header('Location: ../../admin/');
      exit;
    } else {
      echo json_encode(array('status' => 'error', 'message' => 'Failed to delete user.'));
      exit;
    }
  }
  



