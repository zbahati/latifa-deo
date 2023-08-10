<?php
session_start();
if(isset($_SESSION['rollnumber'])){
 $userId = $_SESSION['rollnumber']
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Absent exam List</title>

  <?php include('../../../include/head.php') ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   <?php include('../../../include/nav.php') ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('../../../include/student_sidebar.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Absent Exams </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../../student_admin.php">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <?php
            if(isset($_GET['delete_success'])){
              ?>
              <div class="alert alert-success" role="alert">
                <?php echo $_GET['delete_success'] ?>
              </div>
              <?php
            }
            if(isset($_GET['deleteAbsent'])){
              ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $_GET['deleteAbsent'] ?>
              </div>
              <?php
            }

            ?>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Exam Proof LIST</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <th>No</th>
                    <th>Date</th>
                    <th>Exam title</th>
                    <th>Exam category</th>
                    <th>Status</th>
                  </thead>
                  <tbody>
                    <?php include('../../../include/connection.php');
                    $select="SELECT * FROM no_proof where rollnumber= '$userId'";
                    $query=mysqli_query($conn,$select);
                    $i=1;
                    while($row=mysqli_fetch_assoc($query)){
                      ?>
                       <tr>
                      <td><?php echo $i++ ?></td>
                      <td><?php echo $row['date'] ?></td>
                      <td><?php echo $row['exam_title'] ?></td>
                      <td><?php echo $row['exam_name'] ?></td>
                      <td>
                        <a href="#" class="badge badge-btn badge-danger">Retake</a>
                  </tr>
                  <?php
                    }
                    ?>

                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th col-span='8'>Date</th>

                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });


</script>
</body>
</html>
<?php
}
else{
  header('location: ./login.php');
}
?>