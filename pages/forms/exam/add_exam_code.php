<?php
include('../../../include/connection.php');
if (isset($_POST['save_exam'])) {
    $created_date = $_POST['created_date'];
    $exam_title = $_POST['exam_title'];
    $exam_category = $_POST['exam_category'];
    $student = $_POST['student'];
    $supervisor = $_POST['supervisor'];

    $check_dup = "SELECT * FROM exam WHERE date = '$created_date' AND exam_title = '$exam_title' AND exam_name = '$exam_category' AND rollnumber = '$student'";
    $result_dup = mysqli_query($conn, $check_dup);
    if (mysqli_num_rows($result_dup) > 0) {
        $error_message = "Exam for the same student, date, title, and category already exists";
        header("location: ./add_exam.php?duplicated=" . urlencode($error_message));
    } else {
        $insertExam = "INSERT INTO `exam`(`date`, `exam_title`, `exam_name`, `rollnumber`, `supervisor`) VALUES ('$created_date','$exam_title','$exam_category','$student','$supervisor')";
        $isInserted = mysqli_query($conn, $insertExam);
        if ($isInserted) {
            $success_message = "Exam Created Successfully";
            header("location: ./add_exam.php?credit_success=" . urlencode($success_message));
        } else {
            $error_message = "Exam not created Successfully";
            echo "<script>alert('$error_message');</script>";
        }
    }
}
?>
