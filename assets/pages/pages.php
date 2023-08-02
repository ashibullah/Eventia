<?php
// Assuming you have established a database connection using mysqli

// Perform the database query to fetch the pages data
global $db;
$query = "SELECT * FROM pages";
$result = mysqli_query($db, $query);

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

// Close the database connection
mysqli_close($db);

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
?>
