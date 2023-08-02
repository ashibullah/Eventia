<div class="login">
    <div class="col-sm-10 col-md-6 col-lg-4 bg-white border rounded p-4 shadow-sm">
        <form method="post" action="assets/php/actions.php?signup">
            <div class="d-flex justify-content-center">

                <a href="?home"> <img class="mb-4" src="assets/img/logo1.png" alt="" height="65"> </a> 
            </div>
            <h1 class="h5 mb-3 fw-normal">Create new account</h1>
            <div class="d-flex">
                <div class="form-floating mt-1 col-6 ">
                    <input type="text" name="fname" class="form-control rounded-0" placeholder="First name"
                        required>
                    <label for="floatingInput">First name</label>
                </div>
                <div class="form-floating mt-1 col-6">
                    <input type="text" name="lname" class="form-control rounded-0" placeholder="Last Name"
                        required>
                    <label for="floatingInput">Last name</label>
                </div>
            </div>
            <div class="d-flex gap-3 my-3">
                <div class="form-check" required>
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="0">
                    <label class="form-check-label" for="exampleRadios3">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="2">
                    <label class="form-check-label" for="exampleRadios2">
                        Other
                    </label>
                </div>
            </div>
            
            <div class="form-floating mt-1">
                <input type="email" name="email" class="form-control rounded-0" placeholder="username/email" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mt-1">
                <input type="text" name="username" class="form-control rounded-0" placeholder="username/email" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mt-1">
                <input type="password" name="password" class="form-control rounded-0" id="floatingPassword"
                    placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mt-1">
                <input type="password" name="cpassword" class="form-control rounded-0" id="floatingPassword"
                    placeholder="Re-Write Password" required>
                <label for="floatingPassword">Confirm Password</label>
            </div>

           

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
                <a href="?login" class="text-decoration-none">Already have an account ?</a>


            </div>

        </form>
    </div>
</div>