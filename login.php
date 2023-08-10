
<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login as student</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
</head>
<body>
  <div class="container bg-body-tertiary ">
     <div class="col-md-6 mt-5  mx-auto">
       <div class="card mt-4 mx-auto bg-blue">
        <div class="card-title text-center bg-black p-1 ">
          <h4 class=" font-weight-bold">STUDENT LOGIN </h4>
        </div>
        <div class="card-body">
          <div class="col-md-10 mx-auto">
            <form action="login/student.php" method="post">
              <div class="form-group">
                <input class="form-control" type="number" placeholder=" Rollnumber" name="rollnumber" required>
              </div>
              <div class="form-group">
                <input class="form-control" type="password" placeholder=" Password" name="password" required>
              </div>
              <div class="form-group">
                <button type="submit" name="student_login" class="btn btn-info text-white btn-md">Submit</button>
              </div>

            </form>

          </div>
        </div>
       </div>
        <div class="card-footer">
          <div class="bg-accent-blue">
            <a href="admin_login.php" class="text-sm">Log as Admin</a>
          </div>
        </div>

     </div>

  </div>



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
