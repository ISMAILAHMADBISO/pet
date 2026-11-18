<?php 

include 'include/db_connection.php';

$id = $_GET['id'];


$sql = "DELETE FROM section WHERE id = '$id'";

if (mysqli_query($dbcon,$sql)) {
	echo "<script>alert('Section Deleted Successfully')</script>";
		echo "<script>window.open('section.php','_self')</script>";
}
else{
	echo "<script>alert('Not Successfully')</script>";
		echo "<script>window.open('section.php','_self')</script>";
}

?>