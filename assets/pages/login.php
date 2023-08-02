<div class="login">
    <div class="col-md-6 col-lg-4  col-sm-10 bg-white border rounded p-4 shadow-sm ">
        <form method="post" action="assets/php/actions.php?login">
            <div class="d-flex justify-content-center">

            <a href="?home"> <img class="mb-4" src="assets/img/logo1.png" alt="" height="65"> </a> 
            

            </div>
            <h1 class="h5 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" class="form-control rounded-0" placeholder="username/email" name="username_email"
                    required>
                <label for="floatingInput">username/email</label>
            </div>

            <div class="form-floating mt-1">
                <input type="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password"
                    name="password" required>
                <label for="floatingPassword">password</label>
            </div>

            <?php
            
            if (isset($_SESSION['showError']) && $_SESSION['showError']) {
             echo '<div class="alert alert-danger" role="alert">
                  Invalid username or password!
                </div>';
            unset($_SESSION['showError']); 
            }
?>


            <div class="mt-3 d-flex justify-content-between align-items-center">
                <button class="btn btn-primary" type="submit" name="login">Sign in</button>
                <a href="?signup" class="text-decoration-none">Create New Account</a>
            </div>

            
        </form>
    </div>
</div>