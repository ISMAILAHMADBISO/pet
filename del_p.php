<?php 

include 'include/db_connection.php';

$id = $_GET['id'];


$sql = "DELETE FROM pet WHERE id = '$id'";

if (mysqli_query($dbcon,$sql)) {
	echo "<script>alert('Pet Deleted Successfully')</script>";
		echo "<script>window.open('new.php','_self')</script>";
}
else{
	echo "<script>alert('Not Successfully')</script>";
		echo "<script>window.open('new.php','_self')</script>";
}

?>