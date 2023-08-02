<?php
  $data = $_GET['search'];
  global $db;
    
  $query = "SELECT * FROM pages WHERE name LIKE '%$data%' ";

  $result = mysqli_query($db, $query);
  

    if ($result) {


    // Check if the query was successful and fetch the data
    if ($result && mysqli_num_rows($result) > 0) {
    // Initialize an empty array to store the pages data
    $pages = array();

    // Fetch each row of data and store it in the pages array
    while ($row = mysqli_fetch_assoc($result)) {
        $pages[] = $row;
    }
} else {
    // No pages found or an error occurred
    $pages = array();
}


    
    // Generate the HTML div elements using the $pages data
        echo '<div class="d-flex flex-wrap profileholder">';
    foreach ($pages as $page) {
        $name = $page['name'];
        $pagedp = $page['pagedp'];
        $description = $page['description'];
        $address = $page['address'];
        $facebook = $page['facebook'];
        $instagram = $page['insta'];
        $phone = $page['phone'];
        
        // Generate the HTML div element for each page
        
        echo '<div class="p-1 col-lg-3 col-md-4 col-sm-6">';
        echo '<div class="pageprofile">';
        echo '<img class="dp" src="assets/img/pages/'.$pagedp.'" alt="'. $pagedp .'">';
        echo '<div class="paragraph">';
        echo '<h5>' . $name . '</h5>';
        echo '<p> <i class="bi bi-map"></i> ' . $address . '</p>';
        echo '<p><i class="bi bi-list"></i> ' . $description . '</p>';
        echo '<a class="social" href="tel:' . $phone . '"><i class="bi bi-telephone-fill"></i></a>';
        echo '<a class="social" href="https://www.facebook.com/' . $facebook . '" target="_blank"><i class="bi bi-facebook"></i></a>';
        echo '<a class="social" href="https://www.instagram.com/' . $instagram . '" target="_blank" ><i class="bi bi-instagram"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
       
    }
    echo '</div>';
}

global $db;
$query = "SELECT * FROM users WHERE fname LIKE '%$data%' OR lname LIKE '%$data%' OR profession LIKE '%$data%' OR facebook LIKE '%$data%' OR insta LIKE '%$data%' ";
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
    $lname = $user['lname'];
    $profession = $user['profession'];
    $facebook = $user['facebook'];
    $instagram = $user['insta'];
    $profile_pic = $user['profile_pic'];
    
    // Generate the HTML div element for each user
    
    echo '<div class="picdet col-lg-3 col-md-4 col-sm-6 col-sm-sm-12 ">' . 
    '<a href="https://www.facebook.com/ ' . $facebook . ' "><img class="workimg dp" src="assets/img/profile/' .$profile_pic . ' " alt=""></a> ' . 
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
