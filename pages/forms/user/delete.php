<?php

include('../../../include/connection.php');

if(isset($_GET['del']))
{
    $del=$_GET['del'];
    $delete_records= "DELETE FROM user WHERE user_id=$del ";
    $result= mysqli_query($conn,$delete_records);
    if($result==true){
        header("location: user_list.php?delete_success= Records deleted");

    }
}

?>