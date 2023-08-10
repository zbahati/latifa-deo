<?php
session_start();
include('../include/connection.php');

$password = $_POST['password'];
$username = $_POST['username'];
$role = $_POST['role'];

// Sanitize and escape input values
$password = mysqli_real_escape_string($conn, $password);
$username = mysqli_real_escape_string($conn, $username);
$role = mysqli_real_escape_string($conn, $role);

$select = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password' AND Role = '$role'";
$query = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($query);
$userId = $row['user_id'];
if (mysqli_num_rows($query) == 1) {
  if($role == 'Admin'){
    $_SESSION['username'] = $username;
    header("location: ../index.php");
  }
  else{
    $_SESSION['username'] = $username;
    $_SESSION['UserId'] = $userId;
    header('location: ../supervisor_admin.php');
  }
} else {
  header("location: ../admin_login.php?error=Username or password error");
}
?>
