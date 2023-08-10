<?php
include '../../../include/connection.php';
if (isset($_POST['save_user'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $check_dup = "SELECT * FROM user WHERE Username = '$username'";
    $result_dup = mysqli_query($conn, $check_dup);
    if (mysqli_num_rows($result_dup) > 0) {
      $error_message = "Username already exists";
      header("location: ./add_user.php?duplicated=" . urlencode($error_message));
      exit();
    } else {
      $insertUser = "INSERT INTO `user`(`Username`, `Password`, `Role`) VALUES ('$username','$password','$role')";

      $isInserted = mysqli_query($conn, $insertUser);
      if ($isInserted) {
        $success_message = "User Created Successfully";
        header("location: ./user_list.php?credit_success=" . urlencode($success_message));
        exit();
      } else {
        $error_message = "User not created Successfully";
        header("location: ./add_user.php?error=" . urlencode($error_message));
        exit();
      }
    }
}
?>
