<?php

include('../../../include/connection.php');

if(isset($_GET['del']))
{
    $del=$_GET['del'];
    $select = "SELECT * FROM exam WHERE id = '$del'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    $exam_date = $row['date'];
    $exam = $row['exam_title'];
    $exam_category = $row['exam_name'];
    $rollnumber =$row['rollnumber'];
    $supervisor = $row['supervisor'];
    $insert = "INSERT INTO `proof_archive`(`rollnumber`, `exam_title`, `exam_name`, `date`, `supervisor`) VALUES ('$rollnumber','$exam','$exam_category','$exam_date','$supervisor') ";
    $Isinserted = mysqli_query($conn, $insert);

    if($Isinserted) {

    $delete_records= "DELETE FROM exam WHERE id=$del ";
    $result= mysqli_query($conn,$delete_records);
    if($result==true){
        header("location: participants_list.php?delete_success= Proof of the student created successfully");

    }

    }
}

?>