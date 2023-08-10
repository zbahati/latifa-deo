<?php
session_start();
include('../include/connection.php');

$password = $_POST['password'];
$username = $_POST['rollnumber'];

// Sanitize and escape input values
$password = mysqli_real_escape_string($conn, $password);
$username = mysqli_real_escape_string($conn, $username);

$select = "SELECT * FROM student WHERE Rollnumber = '$username' AND Password = '$password'";
$query = mysqli_query($conn, $select);

if (mysqli_num_rows($query) > 0) {
  $_SESSION['rollnumber'] = $username;
  header("location: ../student_admin.php");
} else {
  header("location: ../login.php?error=Username or password error");
}
?>
