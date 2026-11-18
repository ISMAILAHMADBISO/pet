<?php
include "include/server.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pet Store Management System</title>
	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-icons/bootstrap-icons.css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/sweetalert.js"></script>
	<script type="text/javascript" src="js/script.js"></script>	
	<style type="text/css">
		body{
  			height: 100vh;
 			background-image: linear-gradient(to right, mediumpurple, purple);
		}
	</style>  
</head>

<body>
 <?php
    if (isset($_GET['msg']) && $_GET['msg']=="error") { ?>
        <script>
       
             swal.fire({
              icon : 'error',
                 type : 'error',
                 title : 'Error',
                 text : 'Wrong Login Details, try Again',
                	confirmButtonColor: 'mediumpurple',
             })
       
    </script> 
    <?php }
?>
	<section id="login">
		<div class="login">
			<h2>ADMIN LOGIN</h2>
			<center>
				<a href="index.php"><h4 class="badge badge-warning">Go Back</h4></a>
			</center>
			<br>
				<form action="admin.php" method="POST">
					<label>Username</label>
					<input type="text" name="uname" class="form-control" required="" placeholder="Enter Username">
					<br>
					<label>Password</label>
					<input type="password" name="pword" class="form-control" required="" placeholder="Enter Password">
					<br>
					<button class="btn btn-primary btn-lg btn-block" name="alogin">Login</button>
				</form>
		</div>
	</section>

	
</body>
</html>