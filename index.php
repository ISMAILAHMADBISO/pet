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
</head>
<body>

	<section id="header">
		<ul>
			<li><a href="admin.php">Admin Login</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#header">Home</a></li>
		</ul>
		<div class="header_content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1>PET STORE MANAGEMENT <br>SYSTEM</h1>
						<p>This system helps store owners and employees maintain accurate records of available pets, accessories, food supplies, and grooming services. It also simplifies order tracking, billing, and reporting processes, reducing manual effort and minimizing errors.</p>
					</div>
					<div class="col-md-4">
						<center>
							<img src="img/pet2.jpg">
						</center>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br><br>
	<section id="services">
		<div class="container">
			<h1>SERVICES</h1>
			<div class="row">
				<div class="col-md-4">
					<div class="box shadow">
						<span class="bi bi-droplet"></span>
						<h6>Easy and Simple</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box shadow">
					<span class="bi bi-journal-code"></span>
					<h6>Proper Record Keeping</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.</p>
				</div>
				</div>
				<div class="col-md-4">
					<div class="box shadow">
					<span class="bi bi-arrow-clockwise"></span>
					<h6>Works faster </h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia.</p>
				</div>
				</div>
			</div>
		</div>
	</section>
	<br><br>
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="img/pet3.png">
				</div>
				<div class="col-md-6">
					<h1>ABOUT</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</section>
	<br><br>
		<section id="services">
		<div class="container">
			<h1>OUR STORE</h1>
			<div class="row">
				<div class="col-md-4">
					<div class="box shadow">
						<img src="img/intro.jpeg" style="width: 100%;">
						<h4>Healthy Pet</h4>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box shadow">
					<img src="img/oip.webp" style="width: 100%;">
					<h4>Conducive Environment</h4>
				</div>
				</div>
				<div class="col-md-4">
					<div class="box shadow">
					<img src="img/oip2.webp" style="width: 100%;">
					<h4>Good customer care</h4>
				</div>
				</div>
			</div>
		</div>
	</section>
	<br><br>
	<footer style="background-image: linear-gradient(to right, mediumpurple, purple);padding: 20px;">
		<h6 align="center" style="color: #fff;">&copy; Copyright <?php echo date('Y')?></h6>
	</footer>
<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>