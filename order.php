<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Poultry Management System</title>
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
</head>
<body>

	<section id="header">
		<ul>
			<li><a href="admin.php">Admin Login</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="order.php">Place Order</a></li>
			<li><a href="#header">Home</a></li>
		</ul>
		<div class="header_content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1>PET STORE MANAGEMENT <br>SYSTEM</h1>
						
					</div>
					<div class="col-md-4">
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<br><br>
	
		<section id="services">
		<div class="container">
			<h1>OUR STORE</h1>
			<div class="row">

				<?php 
				include "include/db_connection.php";
				$sql = "SELECT * FROM pet ORDER BY id DESC";
				$run = mysqli_query($dbcon,$sql);
				while ($row=mysqli_fetch_assoc($run)) {
				
				?>


				<div class="col-md-4">
					<div class="box shadow">
						<img src="img/<?php echo $row['ppic']; ?>" style="width: 100%;">
						<h4 style="font-family: Bold;margin-top: 8px;"><?php echo $row['pname']; ?></h4>
						<h6>Age: <?php echo $row['age']; ?></h6>
						<h6>Price: <?php echo $row['price']; ?></h6>
						<a href="checkout.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning btn-sm"><i class="bi bi-cart"></i> Order</button></a>
					</div>
				</div>
				 
				 <?php } ?>




			</div>
		</div>
	</section>
	<br><br>
	<footer style="background-image: linear-gradient(to right, mediumpurple, purple);padding: 20px;">
		<h6 align="center" style="color: #fff;">&copy; Copyright 2021</h6>
	</footer>
<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>