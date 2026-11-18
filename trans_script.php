<?php
session_start();
include 'include/db_connection.php';
$name = $_POST['name'];
$quan = $_POST['quan'];
// $age = $_POST['age'];
$section = $_POST['section'];
$price = $_POST['price'];


$test = "UPDATE price SET quantity = quantity - $quan WHERE pname = '$name'";
mysqli_query($dbcon,$test);


 $sql = "INSERT INTO trans (pname,section,quantity,price) VALUES ('$name','$section','$quan','$price')";
        if (mysqli_query($dbcon,$sql)) {
             echo "Transaction Added Successfully!";
          }
          else{
            echo mysqli_error($dbcon);
          }





?>