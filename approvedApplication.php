<?php
include('dbconn.php');
session_start();

$id = $_GET['id'];
$sql = "SELECT building_id, floor_num, house_num  FROM housemate_application 
where housemate_id ='".$id."'";
$result = mysqli_query($dbconn,$sql);
$row = mysqli_fetch_assoc($result);   
$building_id = $row['building_id'];
$floor_num = $row['floor_num'];
$house_num = $row['house_num'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UReHR Homepage</title>

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
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="dist/img/logo.png" alt="UITM Logo" class="brand-image">
      <span class="brand-text font-weight-light">UITM Campus Raub</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) 
      <div class="user-panel mt-4 pb-4 mb-4 d-flex">
        <div class="image">
          <img src="dist/img/logo.png" alt="UITM LOGO">
        </div>
      </div>-->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!--Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Homepage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="StudentIndex.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alerts and Callouts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Application
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/housemateApplication.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Housemate Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mainApplicationStatus.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Application Status</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item">
            <a href="StudentLogin.php" class ="nav-link">
            <i class="nav-icon fas fa-angle-left"> </i>
            <p>Log Out</p>
        
      </a>
  </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
     
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <style>
  .imgcontainer {
			text-align: center;
			margin: 30px 0 20px 0;
			position: relative;
		}

		img.avatar {
      text-align: left;
			width: 25%;
		}
p.info {
  border: 1px solid rgb(0, 2, 94);
  outline-style: solid;
  outline-color: rgb(182, 183, 248);
  outline-width: 4px;
/*   display: grid; */
  grid-template-columns: auto auto auto auto; 
  gap: 10px; 
  margin: auto; 
  width: 70%;
  padding: 30px 30px;
  
}

</style>
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <!-- <h1>HOUSEMATE APPLICATION</h1> -->
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>




        
<!-- Main content -->
<section class="content" style="width:50em" text-align ="center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

          <div class="imgcontainer">
				
				
    <img src="logo.png" alt="Avatar" class="avatar">
    </div>

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>HOUSEMATE APPLICATION RESULT</b></h3>

              </div>
              <div class="card-body" >
                <p>CONGRATULATIONS!</p>
                        <div class="form-group">
                          <label for="exampleInputBuilding">BUILDING :</label>
                          <output class="form-control" id="building_id" name="building_id" style="width:10em"><?php echo $building_id;?></output>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFloor">FLOOR :</label>
                          
                          <output class="form-control" id="floor_num" name="floor_num" style="width:10em"><?php echo $floor_num;?></output>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputHouseNo">HOUSE NO : </label>
                          <output class="form-control" id="house_num" name="house_num" style="width:10em"><?php echo $house_num;?></output>
                        </div>
                          
                    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->




     
    </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->

<!--   ---------------------------------------------------- -->
<footer class="main-footer">
    <br><br>
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
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- AdminLTE App -->
<script src="dist/js/studentlte.js"></script>
</body>
</html>
