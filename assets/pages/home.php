<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/signup.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Your moment in our lens</h5>
                <p class="text-shadow">Through the lens, a world unseen unfolds, revealing the beauty of life in every frame.</p>

            </div>
        </div>
        <div class="carousel-item">
            <img src="img/collage.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Visualizing Happiness</h5>
                <p class="text-shadow">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ullam eum quae incidunt
                    accusamus! Voluptates ducimus molestias velit?</p>

            </div>
        </div>
        <div class="carousel-item">
            <img src="img\setup.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Color of your moments</h5>
                <p class="text-shadow" >Through the lens, a world unseen unfolds, revealing the beauty of life in every frame.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<!-- start -->
<?php

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

    echo '<div class="row members">';
    foreach (array_slice($pages, 0, 4) as $page){


    $name = $page['name'];
    $pagedp = $page['pagedp'];
    $description = $page['description'];
    $address = $page['address'];
    $facebook = $page['facebook'];
    $instagram = $page['insta'];
    $phone = $page['phone'];

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

    echo '<div class="showmore">
        <ul>
            <li class="text-center list-unstyled "><a class=" text-black text-decoration-none" href="?pages">See
                    more</a>
            </li>
        </ul>

    </div>';

echo '</div>';

?>



<!-- end -->


<!--

 manual code/ Static form
<div class="row members">

    <div class="p-1 col-lg-4 col-md-6 col-sm-12">
        <div class="profile">
            <img class="pngdp" src="img/new logo 3resizzed.png" alt="Photoframe">
            <div class="paragraph">
                <h5>Photoframe</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nihil saepe dolorum.</p>
                <a class="social" href="facebook.com/ashibullahbhai"><i class="bi bi-facebook"></i></a>
                <a class="social" href="twitter.com/ashibullah"><i class="bi bi-twitter"></i></a>
                <a class="social" href="instagram.com/ashibullah"><i class="bi bi-instagram"></i></a>
                <a class="social" href="github.com/ashibullah"><i class="bi bi-github"></i></a>
            </div>
        </div>
    </div>
    <div class="p-1 col-lg-4 col-md-6 col-sm-12">
        <div class="profile">
            <img class="dp" src="img/ctgevents.jpg" alt="events">
            <div class="paragraph">
                <h5>SixEvents</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nihil saepe dolorum.</p>
                <a class="social" href="facebook.com/ashibullahbhai"><i class="bi bi-facebook"></i></a>
                <a class="social" href="twitter.com/ashibullah"><i class="bi bi-twitter"></i></a>
                <a class="social" href="instagram.com/ashibullah"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="p-1 col-lg-4 col-md-6 col-sm-12">
        <div class="profile">
            <img class="dp" src="img/dream.jpg" alt="dm">
            <div class="paragraph">
                <h5>Dream Wedding</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nihil saepe dolorum.</p>
                <a class="social" href="facebook.com/ashibullahbhai"><i class="bi bi-facebook"></i></a>
                <a class="social" href="twitter.com/ashibullah"><i class="bi bi-twitter"></i></a>
                <a class="social" href="instagram.com/ashibullah"><i class="bi bi-instagram"></i></a>
                <a class="social" href="github.com/ashibullah"><i class="bi bi-github"></i></a>
            </div>
        </div>
    </div>

    <div class="showmore">
        <ul>
            <li class="text-center list-unstyled "><a class=" text-black text-decoration-none" href="?pages">See
                    more</a>
            </li>
        </ul>

    </div>


</div>

-->


<!--
<div class="row work">

    <div class="picdet col-lg-4 col-md-6">
        <a href="www.facebook.com/ashibullahbhai"> <img class="workimg dp" src="img/ashib.jpg" alt=""></a>

        <div class="picdetails">
            <h4>Ashib Ullah</h4>
            <p>Senior Photographer, Cinematographer</p>

        </div>
    </div>
    <div class="picdet col-lg-4 col-md-6">
        <a href="www.facebook.com/ashibullahbhai"> <img class="workimg dp" src="img/habib.jpg" alt=""></a>

        <div class="picdetails">
            <h4>Habibur Rahman</h4>
            <p>Senior Photographer, Cinematographer</p>

        </div>
    </div>
    <div class="picdet col-lg-4 col-md-6">
        <a href="www.facebook.com/ashibullahbhai"> <img class="workimg dp" src="img/Riazot irfan.jpg" alt=""></a>

        <div class="picdetails">
            <h4>Riazot Irfan</h4>
            <p>Senior Photographer, Cinematographer</p>

        </div>
    </div>
    <div class="picdet col-lg-4 col-md-6">
        <a href="www.facebook.com/ashibullahbhai"> <img class="workimg dp" src="img/Sharup.jpg" alt=""></a>

        <div class="picdetails">
            <h4>Shihab Sharup</h4>
            <p>Event Manager</p>

        </div>
    </div>
    <div class="picdet col-lg-4 col-md-6">
        <a href="www.facebook.com/ashibullahbhai"> <img class="workimg dp" src="img/zunaed.jpg" alt=""></a>

        <div class="picdetails">
            <h4>Zunaed Kawser</h4>
            <p>Event Planner</p>

        </div>
    </div>
    <div class="picdet col-lg-4 col-md-6">
        <a href="www.facebook.com/ashibullahbhai"> <img class="workimg dp" src="img/rizwan.jpg" alt=""></a>

        <div class="picdetails">
            <h4>Rizwan Bin Yusuf</h4>
            <p>Senior Photographer, Cinematographer</p>

        </div>
    </div>

    <ul>
        <li class="text-center list-unstyled "><a class=" text-white text-decoration-none" href="?peoples">See
                more</a>
        </li>
    </ul>


</div>

-->

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
foreach (array_slice($users,0,8) as $user) {
    $fname = $user['fname'];
    $lname = $user['lname'];
    $profession = $user['profession'];
    $facebook = $user['facebook'];
    $instagram = $user['insta'];
    $profile_pic = $user['profile_pic'];
    
    // Generate the HTML div element for each user
    
    echo '<div class="picdet col-lg-3 col-md-4 col-sm-6 col-sm-sm-12">' . 
    '<a href="https://www.facebook.com/ ' . $facebook . ' "><img class="workimg dp" src="assets/img/profile/' .$profile_pic . ' " alt=""></a> ' . 
    ' <div class="picdetails"> ' . 
    '<h4>' .$fname .$lname . '</h4> ' .
    '<p>'.$profession . '</p> ' .
    '<a href="https://www.facebook.com/ ' . $facebook . ' "><i class="bi bi-facebook text-white"></i>  </a> ' .
    '<a href="https://www.instagram.com/ ' . $instagram . ' "><i class="bi bi-instagram text-white"></i></a> ' .
     '</div> ' . 
     '</div>';

   
}
echo ' <div class="col-lg-12">';
echo'<ul>' .
        '<li class="text-center list-unstyled "><a class=" text-white text-decoration-none" href="?peoples">See
                more</a>
        </li>' .
    '</ul>';
    
echo '</div>';
echo '</div>';


?>
