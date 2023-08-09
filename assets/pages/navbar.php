<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="?home">
                <img class="logo" src="img\logo1.png" alt="Logo">
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <form class="d-flex nav-item" action="?search">
                <input class="form-control me-2 " type="search" placeholder="Looking for Something?" aria-label="Search" name="search">
                <button class="btn  nav-link" type="submit">Search</button>
            </form>
        </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?pages">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?peoples">Freelancers</a>
                    </li>
                    <?php
                      // $profile = $_SESSION['user'];
                      
                    
                      $login = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;
                    

                    if ($login == false) {
                        echo '<li class="nav-item">
                            <a class="nav-link" href="?signup">Signup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?login">Login</a>
                        </li>';
                    } else if ($login == true) {
                        $name = $_SESSION['user']['fname'];
                        $profile_pic = $_SESSION['user']['profile_pic'];
                        echo '<li class="nav-item">
                            <span class="nav-link">Welcome, ' . $name . '</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                
                                <img  src="assets/img/profile/'. $profile_pic . '" class="profile-picture" alt=""
                                    height="30" class="rounded-circle border">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?editprofile">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="?createpage">Create Page</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="assets/php/actions.php?logout">Logout</a></li>
                            </ul>
                        </li>';
                    }
                    ?>
                </ul>
            </div>
            
        </div>
    </nav>
