<?php
$function_url="../assets/php/functions.php";
require_once($function_url);
include('./php/admin_functions.php');
// $login = true;
session_start();
if($_SESSION['isLoggedIn']) {
    $login = true;
}
else $login = false;
if (!$login)
header('Location:./pages/login.php');
$admin = getAdmin($_SESSION['isLoggedIn']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eventia | Dashboard</title>
  <link href="../assets/bootstrap/icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets/images/icon.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <li class="nav-item">
        <a class=" btn btn-sm btn-info" href="pages/create_user.php" role="button">
          Create User
        </a>
        <a class=" btn btn-sm btn-info" href="../?createpage_by_admin" role="button">
          Create Page
        </a>
        <a class=" btn btn-sm btn-danger" href="php/admin_actions.php?logout" role="button">
          Logout
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
   
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link"> <img src="..\img\logo1.png" alt="" height="40">
    </a>

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="info">
          <!-- <a href="#" class="d-block"><?=$admin['full_name']?></a> -->
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>


   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="?edit_profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Edit Profile
              </p>
            </a>
          </li> -->
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              <?php if(isset($_GET['edit_profile'])){
                echo "Edit Profile";

              }else{
                
                echo "Dashboard";
              } ?>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      <?php if(isset($_GET['edit_profile'])){

      }else{
        ?>
 <div class="row">


          

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?=totalUsersCount()?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?=totalPagesCount()?></h3>

                <p>Total Pages</p>
              </div>
              <div class="icon">
                <i class="ion ion-camera"></i>
              </div>
            </div>
          </div>
          </div>
        </div>
        <?php
      }

      ?>
       
        <!-- /.row -->
        <!-- Main row -->
       <div class="row">
<?php
if(isset($_GET['edit_profile'])){
?>
 <div class="card card-primary col-12">
              <div class="card-header">
                <h3 class="card-title">Edit Your Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="post" action="php/admin_actions.php?updateprofile">
                <input type="hidden" name="user_id" value="<?=$admin['id']?>" >
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" name="full_name" value="<?=$admin['full_name']?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"  value="<?=$admin['email']?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" name="password" value="<?=$admin['password_text']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
              </form>
            </div>
<?php
}else{
  ?>

            <div class="card w-100">
              <div class="card-header">
                <h3 class="card-title">User Lists</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
$userslist = getUsersList();
$count=1;
                ?>
                <table  class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
foreach($userslist as $user){
  ?>
   <tr>
                    <td><?=$count?></td>
                    <td>
                      <div class="d-flex">
                        <div>
                          <img src="../assets/img/profile/<?=$user['profile_pic']?>" class="rounded-circle border border-2 shadow-sm mx-2" width="55px" height="55px" />
                        </div>
                        <div>
                          <h5><?=$user['fname'].' '.$user['lname']?> - <span class="text-muted">@<?=$user['username']?></span></h5>
                          <h6 class="text-muted"><?=$user['email']?></h6>


                        </div>
</div>
                    </td>

                    <td>
                          <div class="user" data-user-id="<?= $user['id'] ?>">
                            <!-- Other user information or elements -->

                            <button class="m-1 btn btn-danger btn-sm delete_user_btn"
                              data-user-id="<?= $user['id'] ?>">Delete User</button>
                          </div>
                 
                  </tr>
  <?php
  $count++;
  } ?>
               
               
</tbody>
</table>
 
</div>
<div class="card w-100">
              <div class="card-header">
                <h3 class="card-title">Page Lists</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
$pagelist = getPageList();
$count=1;
                ?>
                <table  class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Pages</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
foreach($pagelist as $user){
  ?>
   <tr>
                    <td><?=$count?></td>
                    <td>
                      <div class="d-flex">
                        <div>
                          <img src="../assets/img/pages/<?=$user['pagedp']?>" class="rounded-circle border border-2 shadow-sm mx-2" width="55px" height="55px" />
                        </div>
                        <div>
                          <h5><?=$user['name']?> - <span class="text-muted"> <i class="bi bi-map"></i> <?=$user['address']?></span></h5>
                          <h6 class="text-muted"> <i class="bi bi-telephone-fill"></i> 0<?=$user['phone']?></h6>


                        </div>
</div>
                    </td>

                    <td>
                          <div class="page" data-user-id="<?= $user['id'] ?>">
                            <!-- Other user information or elements -->

                            <button class="m-1 btn btn-danger btn-sm delete_page_btn"
                              data-user-id="<?= $user['id'] ?>">Delete Page</button>
                              
                          </div>
                          
                  </tr>
  <?php
  $count++;
  } ?>
               
               
</tbody>
</table>
  <?php
}
?>
</div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright Eventia </strong>
    All rights reserved.
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->





<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="js/actions.js?v=<?=time()?>"></script>

</body>
</html>
<?php

if(isset($_SESSION['error'])){
  unset($_SESSION['error']);

}
?>