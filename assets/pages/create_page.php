<div class="d-flex p-3 formseting ">
<div class="pic col-lg-8">
    <img src="img/createpage.jpg" alt="..." class="rounded-1" style="object-fit: cover; width: 130%; height: 100vh;">
</div>

    
    <div class="signup-container col-lg-4 mr-3">
        <div class="logo">
            <img src="assets/img/logo1.png" alt="Logo" height="45">
        </div>
        <h1 class="signup-heading">Create Page</h1>
        <form class="signup-form" method="POST" action="assets/php/actions.php?createpage" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="name" placeholder="Page Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Contact No" required>
            </div>
            <div class="form-group">
                <input type="text" name="facebook" placeholder="Facebook Page">
            </div>
            <div class="form-group">
                <input type="text" name="insta" placeholder="Instagram Profile">
            </div>
            <div class="form-group">
                <textarea class="form-group rounded-3" id="address" name="address" placeholder="Address" rows="2"></textarea>
            </div>
            <div class="form-group">
                <textarea class="form-group rounded-3" id="description" name="description" placeholder="Description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label">Upload Page Picture</label>
                <input class="form-control" type="file" name="pagedp" id="formFile">
            </div>
            <div class="form-group text-right">
                <button class="btn nav-link" type="submit" name="createpage">Create Page</button>
            </div>
        </form>
    </div>
</div>
