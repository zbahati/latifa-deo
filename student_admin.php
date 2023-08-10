<?php
session_start();
include('include/connection.php');
if(isset($_SESSION['rollnumber'])){
  $userId = $_SESSION['rollnumber'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <h1 class="animation__wobble" alt="AdminLTELogo" height="140" width="140"> Claim App</h1>
  </div>

  <!-- Navbar -->
  <?php include('./include/nav.php') ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

      <?php include('./include/student_sidebar.php') ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SUMMARY</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="student_admin.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Proofs</span>
                <span class="info-box-number">
                  <?php
                  $countStudent = "SELECT COUNT(rollnumber) as sum  from proof_archive where rollnumber='$userId'";
                  $query = mysqli_query($conn, $countStudent);
                  while($row = mysqli_fetch_assoc($query)){
                    echo $row['sum'];
                  }
                  ?>
                  </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Exam to Retake</span>
                <span class="info-box-number">
                <?php
                  $countStudent = "SELECT COUNT(rollnumber) as sum  from no_proof where rollnumber='$userId'";
                  $query = mysqli_query($conn, $countStudent);
                  while($row = mysqli_fetch_assoc($query)){
                    echo $row['sum'];
                  }
                  ?>
                  </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Claim Under Review </span>
                <span class="info-box-number">
                  <?php
                  $countStudent = "SELECT COUNT(rollnumber) as sum  from claim where rollnumber='$userId' and `status`= 'Pending'";
                  $query = mysqli_query($conn, $countStudent);
                  while($row = mysqli_fetch_assoc($query)){
                    echo $row['sum'];
                  }
                  ?>
                  </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Claim Approved</span>
                <span class="info-box-number">
                  <?php
                  $countStudent = "SELECT COUNT(rollnumber) as sum  from claim where rollnumber='$userId' and `status`='Approved'";
                  $query = mysqli_query($conn, $countStudent);
                  while($row = mysqli_fetch_assoc($query)){
                    echo $row['sum'];
                  }
                  ?>
                  </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Claim Rejected</span>
                <span class="info-box-number">
                  <?php
                  $countStudent = "SELECT COUNT(rollnumber) as sum  from claim where rollnumber='$userId' and `status`='Rejected'";
                  $query = mysqli_query($conn, $countStudent);
                  while($row = mysqli_fetch_assoc($query)){
                    echo $row['sum'];
                  }
                  ?>
                  </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <!-- /.col -->
        </div>

        <!-- Main row -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js" defer></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js" defer></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js" defer></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js" defer></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>


<script src="dist/js/pages/dashboard2.js" defer></script>
</body>
</html>
<?php
}
else{
  header('location: ./login.php');
}
?>