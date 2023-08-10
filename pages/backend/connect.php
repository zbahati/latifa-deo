<?php

$host="localhost";
$username="root";
$password="";
$db_name="arbi_db";

$conn=mysqli_connect($host,$username,$password,$db_name);
if($conn!= true){
    echo "Something Went wrong!, please Try again";
}

?>