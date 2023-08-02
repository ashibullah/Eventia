<?php 


$profile = $_SESSION['user'];
$id= $profile['id'];

global $db;
$query = "SELECT * FROM users where id = $id";
$result = mysqli_query($db, $query);
// Fetch the profile picture data from the result
$row = mysqli_fetch_assoc($result);
$profile_pic = $row['profile_pic'];
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$username = $row['username'];
$profession = $row['profession'];
$id = $row['id'];
$facebook = $row['facebook'];
$instagram = $row['insta'];



?>

<div class="container col-12 col-md-9 col-lg-8 rounded-0 d-flex justify-content-center">
        <div class="col-12 bg-white border rounded p-4 m-4 shadow-sm">
            <form method="POST" action="assets/php/actions.php?updateprofile" enctype="multipart/form-data">
                <div class="d-flex justify-content-center">


                </div>
                <h1 class="h5 mb-3 fw-normal">Edit Profile</h1>
                <div class="form-floating mt-1 col-6 profile-picture">
                    <img src="assets\img\profile\<?php echo $profile_pic; ?>" class="img-thumbnail my-3" style="height:150px;" alt="...">
                   
                    <div class="mb-6 ">
                    <label for="formFile" class="form-label">Change Profile Picture</label>
                    <div class="d-flex align-items-center">
                    <input class="form-control" type="file" name="profile_pic" id="formFile">
                        <button class="btn btn-primary" type="submit" name="upload">Upload</button>


                    </div>
                        
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-floating mt-1 col-6 ">
                        <input type="text" class="form-control rounded-0" placeholder="username/email" value="<?php echo $fname; ?>" disabled>
                        <label for="floatingInput">First Name</label>
                    </div>
                    <div class="form-floating mt-1 col-6">
                        <input type="text" class="form-control rounded-0" placeholder="username/email" value="<?php echo $lname  ;?>" disabled>
                        <label for="floatingInput">Last Name</label>
                    </div>
                    
                </div>
                

                
                
        
          
                <div class="form-floating mt-1">
                    <input type="email" class="form-control rounded-0" placeholder="username/email" value="<?php echo $email ?>" disabled>
                    <label for="floatingInput" >Email </label>
                </div>
                <div class="form-floating mt-1">
                    <input type="email" class="form-control rounded-0" placeholder="username/email" value="@<?php echo $username ?>" disabled>
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mt-1">
                <input type="text" name="profession" class="form-control rounded-0" placeholder="Profession" value="<?php echo $profession ?>">
                
                    <label for="floatingInput"><i class="bi bi-camera2"></i> Profession</label>
                </div>

                <div class="d-flex">
                <div class="form-floating mt-1">
                <input type="text" name="facebook" class="form-control rounded-0" placeholder="Facebook" value="<?php echo $facebook; ?>" >
                        <label for="floatingInput"><i class="bi bi-facebook"></i> Facebook</label>
                </div>
                <div class="form-floating mt-1">
                <input type="text" name="insta" class="form-control rounded-0" placeholder="Instagram" value="<?php echo $instagram  ;?>" >
                        <label for="floatingInput"><i class="bi bi-instagram"></i>  Instagram</label>
                </div>
                </div>
                


                <div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Change Password</label>
                </div>
                <div class="form-floating mt-1">
                    <input type="password" name="cpassword" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm Password</label>
                </div>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit" name="updateInfo">Update Profile</button>
                </div>

            </form>
        </div>

    </div>