<?php
session_start();
include 'include/db_connection.php';
$name = $_POST['name'];
$quan = $_POST['quan'];
$age = $_POST['age'];
$section = $_POST['section'];




 $sql = "INSERT INTO pet (pname,section,quantity,age) VALUES ('$name','$section','$quan','$age')";
        if (mysqli_query($dbcon,$sql)) {
             echo "Pet Added Successfully!";
          }
          else{
            echo mysqli_error($dbcon);
          }




?>