
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="?home"><img class="logo" src="img\logo1.png" alt="Logo" ></a>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <form class="d-flex" action="?search">
                <input class="form-control me-2 " type="search" placeholder="Looking for Something?" aria-label="Search" name="search">
                <button class="btn " type="submit">Search</button>
            </form>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-black "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                            <a class="nav-link text-black" href="?pages">Pages</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link text-black" href="?peoples">Peoples</a>
                        </li>
                
                <?php

                    
                    // $profile = $_SESSION['user'];
                    
                    $login = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;
                    
                    
                    if ($login == false) {
                        echo '<li class="nav-item">
                            <a class="nav-link active text-black" aria-current="page" href="?signup">Signup</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-black" href="?login">login</a>
                        </li>';
                    }
                    elseif ($login == true) {

                        global $db;
                        $id= $_SESSION['user']['id'];

                        $query = "SELECT * FROM users where id = $id";
                        $result = mysqli_query($db, $query);
                        // Fetch the profile picture data from the result
                        $row = mysqli_fetch_assoc($result);
                        $profile_pic = $row['profile_pic'];
                        $result = mysqli_query($db, $query);
                        $row = mysqli_fetch_assoc($result);
                        $name = $row['fname'];

                        echo '<li class="nav-item">
                            <span class="nav-link text-black">Welcome, '.$name. '</span>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle profile-picture" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets\img\profile/' . $profile_pic . '" class="profile-picture" alt="" height="30" class="rounded-circle border">
                                </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?editprofile">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="?createpage">Create Page</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="assets/php/actions.php?logout">Logout</a></li>
                            </ul>
                        </li>';
                    }
                    
                    
                    
                    ?>

                
        </div>
    </div>

</nav>
