<?php
global $db;
$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);

// Check if the query was successful and fetch the data
if ($result && mysqli_num_rows($result) > 0) {
    // Initialize an empty array to store the users data
    $users = array();

    // Fetch each row of data and store it in the users array
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
} else {
    // No users found or an error occurred
    $users = array();
}

// Close the database connection
mysqli_close($db);

// Generate the HTML div elements using the $users data
    echo '<div class="d-flex flex-wrap profileholder bg-black">';
foreach ($users as $user) {
    $fname = $user['fname'];
    $id = $user['id'];
    $lname = $user['lname'];
    $profession = $user['profession'];
    $facebook = $user['facebook'];
    $instagram = $user['insta'];
    $profile_pic = $user['profile_pic'];
    
    // Generate the HTML div element for each user
    
    echo '<div class="picdet col-lg-3 col-md-4 col-sm-6 col-sm-sm-12 ">' . 
    ' <form action="?profile" method="post" id="profileForm_' . $id . '">
            <input type="hidden" name="user_id" value="' . $id . '">
            <button type="submit" style="border: none; background-color: transparent;" onclick="submitProfileForm(' . $user['id'] . ')">
                <img class="workimg dp" src="assets/img/profile/' . $profile_pic . ' " alt="">
            </button>
        </form> ' . 
    ' <div class="picdetails "> ' . 
    '<h4  >' .$fname .$lname . '</h4> ' .
    '<p>'.$profession . '</p> ' .
    '<a href="https://www.facebook.com/ ' . $facebook . ' "><i class="bi bi-facebook text-white"></i>  </a> ' .
    '<a href="https://www.instagram.com/ ' . $instagram . ' "><i class="bi bi-instagram text-white"></i></a> ' .
     '</div> ' . 
     '</div>';

   
}
echo '</div>';
?>
