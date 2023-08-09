<div class="bgpic d-flex formseting ">
<div class="pic col-lg-8">
    <img src="img/signup.jpg" alt="..." class="rounded" style="object-fit: cover; width: 130%; height: 100vh;">
</div>
    
    <div class="signup-container  col-lg-4 mr-3">
    <div class="logo">
            <a href="?home"> <img src="assets/img/logo1.png" alt="Logo" height="45"> </a>
        
        </div>
        <h1 class="signup-heading">Create a New Account</h1>
        <form class="signup-form" method="post" action="assets/php/actions.php?signup">
            <div class="form-group">
                <input type="text" name="fname" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="lname" placeholder="Last Name" required>
            </div>
            <div class="form-group radio-group">
                <label>Gender:</label>
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Phone" required>
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="cpassword" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <button class="btn-primary" type="signup" name="signup">Sign Up</button>
            </div>
        </form>
        <div class="login-link">
            <a href="?login">Already have an account?</a>
        </div>
    </div>
    </div>