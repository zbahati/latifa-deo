<?php
include('../../../include/connection.php');
if (isset($_POST['save_student'])) {
    $rollnumber = $_POST['rollnumber'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];

    $check_dup = "SELECT * FROM student WHERE Rollnumber ='$rollnumber'";
    $result_dup = mysqli_query($conn, $check_dup);
    if (mysqli_num_rows($result_dup) > 0) {
        header('location: ./add_student.php?dup= Student already registered');
    } else {
        $insertUser = "INSERT INTO `student`(`Rollnumber`, `Fname`, `Lname`, `Password`, `Department`, `Year`, `Phone`) VALUES ('$rollnumber','$fname','$lname','$password','$department','$year','$tel')";
        $isInserted = mysqli_query($conn, $insertUser);
        if ($isInserted) {
        header('location: ./add_student.php?success= Student Created Successfully');

        } else {
            echo "<script>alert('Student not created Successfully');</script>";
        }
    }
}
?>
