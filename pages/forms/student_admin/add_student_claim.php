<?php
include('../../../include/connection.php');
if (isset($_POST['add_claim'])) {
    $rollnumber = $_POST['rollnumber'];
    $exam_title = $_POST['exam_title'];
    $exam_category = $_POST['exam_category'];
    $date = $_POST['date'];
    $tel = $_POST['tel'];
    $details = $_POST['details'];
    $status = "Pending";

        $insertUser = "INSERT INTO `claim`(`rollnumber`, `exam_title`, `exam_name`, `date`, `phone`, `description`,`status`) VALUES ('$rollnumber','$exam_title','$exam_category','$date','$tel','$details','$status')";
        $isInserted = mysqli_query($conn, $insertUser);
        if ($isInserted) {
        header('location: ./claim_form.php?success= Your claim was recieved, Wait we will contact you soon');

        } else {
            echo "<script>alert('claim not created Successfully');</script>";
        }
    }

?>
