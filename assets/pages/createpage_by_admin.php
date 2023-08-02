<div class="login">
    <div class="col-4 bg-white border rounded p-4 shadow-sm">
        <form method="POST" action="assets/php/actions.php?createpage" enctype="multipart/form-data">
            <div class="d-flex justify-content-center">

                <a href="?home"> <img class="mb-4" src="assets/img/logo1.png" alt="" height="85"> </a>
            </div>
            <h1 class="h5 mb-3 fw-normal">Create Page</h1>
            

            <div class="form-floating mt-1">
                <input type="text" name="name" class="form-control rounded-0" placeholder="username/email" required>
                <label for="floatingInput">Page Name</label>
            </div>


            <div class="form-floating mt-1">
                <input type="text" name="phone" class="form-control rounded-0" placeholder="username/email" required>
                <label for="floatingInput">Contact No</label>
            </div>
            <div class="form-floating mt-1">
                <input type="text" name="facebook" class="form-control rounded-0" placeholder="username/email" >
                <label for="floatingInput">Facebook Page</label>
            </div>
            <div class="form-floating mt-1">
                <input type="text" name="insta" class="form-control rounded-0" placeholder="username/email" >
                <label for="floatingInput">Instagram Profile</label>
            </div>
            <div class="form-floating mt-1">
                <textarea id="address" name="address" class="form-control rounded-0" placeholder="Address"
                    rows="2"></textarea>
                <label for="address">Address</label>
            </div>
            <div class="form-floating mt-1">
                <textarea id="description" name="description" class="form-control rounded-0" placeholder="Description"
                    rows="4"></textarea>
                <label for="description">Description</label>
            </div>
            <div class="mb-6">
                <label for="formFile" class="form-label">Upload Page Picture</label>
                <div class="d-flex align-items-center">
                    <input class="form-control" type="file" name="pagedp" id="formFile">
                    
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-between align-items-center">
                <button class="btn btn-primary" type="submit" name="createpage_BA">Create Page</button>
            </div>
    </div>

</div>



</form>
</div>
</div>