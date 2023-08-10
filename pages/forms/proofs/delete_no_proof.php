<?php

include('../../../include/connection.php');

if(isset($_GET['del']))
{
    $del=$_GET['del'];
    $delete_records= "DELETE FROM no_proof WHERE no_proof_id=$del ";
    $result= mysqli_query($conn,$delete_records);
    if($result==true){
        header("location: no_proof_list.php?delete_success= Records deleted");

    }
}

?>