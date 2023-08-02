<?php 

global $db;
$query = "SELECT profile_pic FROM users";
$result = mysqli_query($db, $query);
// Fetch the profile picture data from the result
$row = mysqli_fetch_assoc($result);
$profile_pic = $row['profile_pic'];

?>