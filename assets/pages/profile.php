<!-- profile.php -->

<?php

    $id =  $_POST['user_id'];
    global $db;
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($db, $query);
    
    // Check if the query was successful and fetch the user's data
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        // Display the complete user profile


        echo '<div class="p-1 col-lg-8 col-md-8 col-sm-12 m-2">';
        echo '<div class="pageprofile">';
        echo '<img class="dp" src="assets/img/profile/' . $user['profile_pic'] . '" alt="' . $user['fname'] . ' ' . $user['lname'] . '">';
        echo '<div class="paragraph">';
        echo '<h5>' . $user['fname'] . ' ' . $user['lname'] . '</h5>';
        echo '<p><i class="bi bi-list"></i> ' . $user['profession'] . '</p>';

        echo '<a class="social" href="https://www.facebook.com/' . $user['facebook'] . '" target="_blank"><i class="bi bi-facebook"></i></a>';
        echo '<a class="social" href="https://www.instagram.com/' . $user['insta'] . '" target="_blank" ><i class="bi bi-instagram"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } 
    
    // Close the database connection
    mysqli_close($db);

?>
