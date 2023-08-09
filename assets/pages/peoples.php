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
    echo '<div class="d-flex flex-wrap profileholder ">';
foreach ($users as $user) {
    $fname = $user['fname'];
    $id = $user['id'];
    $lname = $user['lname'];
    $profession = $user['profession'];
    $facebook = $user['facebook'];
    $instagram = $user['insta'];
    $profile_pic = $user['profile_pic'];
    
    // Generate the HTML div element for each user
    
    echo '<div class="pageprofile2 m-1 col-lg-2 col-md-4 col-sm-6 col-sm-sm-12 ">';
    echo '<form action="?profile" method="post" id="profileForm_' . $id . '">';
    echo '<input type="hidden" name="user_id" value="' . $id . '">';
    echo '<button type="submit" style="border: none; background-color: transparent;" onclick="submitProfileForm(' . $user['id'] . ')">';
    echo '<img class="workimg dp" src="assets/img/profile/' . $profile_pic . '" alt="">';
    echo '</button>';
    echo '</form>';
    echo '<div class="paragraph">';
    echo '<h4>' . $fname . ' ' . $lname . '</h4>';
    echo '<p>' . $profession . '</p>';
    
    echo '<a class="social" href="tel:' . $user['phone'] . '"><i class="bi bi-telephone-fill"></i></a>';
    echo '<a href="https://www.facebook.com/' . $facebook . '"><i class="bi bi-facebook"></i>      </a>';    
    echo '<a href="https://www.instagram.com/' . $instagram . '"><i class="bi bi-instagram"></i></a>';
    echo '</div>';
    echo '</div>';


   
}
echo '</div>';
?>
