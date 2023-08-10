<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>add student</title>

    <?php include('../../../include/head.php') ?>
  <!-- Google Font: Source Sans Pro -->

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include('../../../include/nav.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php include('../../../include/sidebar.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ADD RECORDS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right p-10">
              <li class="breadcrumb-item"><a href="../../../index.php">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- /.col (left) -->
          <div class="col-md-11 m-auto">
          <?php
                if(isset($_GET['dup'])){
                  ?>
                  <div class="alert alert-warning" role="alert">
                                <?php
                            $success= $_GET['dup'];
                            echo $success;
                            ?>
                            </div>
                            <?php
                }

                if(isset($_GET['success'])){
                  ?>
                  <div class="alert alert-success" role="alert">
                                <?php
                            $duplicated= $_GET['success'];
                            echo $duplicated;
                            ?>
                            </div>
                            <?php
                }


                ?>
          <form action="./add_student_code.php" method='POST'>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD STUDENT</h3>
              </div>
              <div class="card-body row mx-auto px-2">

                <div class="form-group col-md-5 mx-auto">
                  <label for="exampleInputEmail1">Roll number</label>
                  <input type="number" name="rollnumber" class="form-control" id="exampleInputEmail1" required placeholder="Enter Roll number">
                </div>
                <div class="form-group col-md-5 mx-auto">
                  <label for="exampleInputPassword1">First name</label>
                  <input type="text" name="fname"  class="form-control" id="exampleInputPassword1" required placeholder=" Enter First name">
                </div>
                <div class="form-group col-md-5 mx-auto">
                  <label for="exampleInputPassword1"> Last name</label>
                  <input type="text" name="lname" class="form-control" id="exampleInputPassword1" placeholder=" Enter  Last name " required>
                </div>
                <div class="form-group col-md-5 mx-auto">
                  <label for="exampleInputPassword1"> Department</label>
                  <input type="text" name="department" class="form-control" id="exampleInputPassword1" placeholder=" Enter  Department" required>
                </div>
                <div class="form-group col-md-5 mx-auto">
                  <label for="exampleInputPassword1"> Year</label>
                  <input type="text" name="year" class="form-control" id="exampleInputPassword1" placeholder=" Enter  year" required>
                </div>
                <div class="form-group col-md-5 mx-auto">
                  <label for="exampleInputPassword1"> Password</label>
                  <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder=" Enter  password" required>
                </div>
                <div class="form-group col-md-5 mx-auto">
                  <label for="exampleInputPassword1"> Phone number</label>
                  <input type="tel" name="tel" pattern="^(\+250)?[0-9]{10}$" class="form-control" id="exampleInputPassword1" placeholder=" Enter  password" required>
                </div>

                <div class="form-group pl-5 mx-auto">
                  <input type="Submit" name="save_student" class="btn btn-primary pl-5 pr-5" id="exampleInputPassword1" value="Save">
                </div>

                <!-- /.form group -->


              </div>

              <!-- /.card-body -->
            </div>


            </form>
            <!-- /.card -->

          </div>
          <!-- /.col (right) -->

        </div>

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
<!-- Select2 -->
<script src="../../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- BS-Stepper -->
<script src="../../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>
</html>
