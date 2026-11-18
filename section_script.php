<?php
session_start();
include 'include/db_connection.php';
$name = $_POST['name'];
$block = $_POST['block'];




 $sql = "INSERT INTO section (section,block) VALUES ('$name','$block')";
        if (mysqli_query($dbcon,$sql)) {
             echo "Section Added Successfully!";
          }
          else{
            echo mysqli_error($dbcon);
          }




?>