<?php
include "include/server.php";

$id = $_GET['id'];

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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/sweetalert.js"></script>
	<style type="text/css">
		@font-face{
  font-family: Mont;
  src: url(../fonts/Montserrat-Regular.ttf);
}
@font-face{
  font-family: Bold;
  src: url(../fonts/Montserrat-Bold.ttf);
}
*{
	margin: 0;
	padding: 0;
	font-family: Mont;
}
		body{
  			height: 100vh;
 			background-image: linear-gradient(to right, mediumpurple, purple);
		}
		.login{
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  width: 500px;
  background-color: #fff;
  padding: 30px;
  border-radius: 20px;
  margin-top: 140px;

}
.login h2{
  text-align: center;
  font-family: Bold;
  text-align: center;
  color: mediumpurple;
}
.login button{
 background-image: linear-gradient(to right, mediumpurple, purple);
 border:  none;
 box-shadow: 0px;
}
.login input{
  padding: 25px;
  border:  1px solid #ddd;
  box-shadow: 0px;
}
.login input:focus{
  border: 1px solid mediumpurple;
  box-shadow: none;
}
	</style>  
</head>

<body>
	<section id="login">
		<div class="login">
			<h2>DELIVERY FORM</h2>
			<center>
				<a href="index.php"><h4 class="badge badge-warning">Go Back</h4></a>
			</center>
			<br>
				<form action="checkout.php" method="POST">
					<label>Name</label>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input type="text" name="name" class="form-control" required="" placeholder="Enter Name">
					<br>
					<label>Phone Number</label>
					<input type="tel" name="gsm" class="form-control" required="" placeholder="Enter Phone Number">
					<br>
					<label>Address</label>
					<input type="text" name="address" class="form-control" required="" placeholder="Enter Address">
					<br>
					  <label>State</label>
                                               <select class="form-control" name="state">
                      <option value="Abia">Abia</option>
                      <option value="Adamawa">Adamawa</option>
                      <option value="Akwa Ibom">Akwa Ibom</option>
                      <option value="Anambra">Anambra</option>
                      <option value="Bauchi">Bauchi</option>
                      <option value="Bayelsa">Bayelsa</option>
                      <option value="Benue">Benue</option>
                      <option value="Borno">Borno</option>
                      <option value="Cross River">Cross River</option>
                      <option value="Delta">Delta</option>
                      <option value="Ebonyi">Ebonyi</option>
                      <option value="Edo">Edo</option>
                      <option value="Ekiti">Ekiti</option>
                      <option value="Enugu">Enugu</option>
                      <option value="Gombe">Gombe</option>
                      <option value="Imo">Imo</option>
                      <option value="Jigawa">Jigawa</option>
                      <option value="Kaduna">Kaduna</option>
                      <option value="Kano">Kano</option>
                      <option value="Katsina">Katsina</option>
                      <option value="Kebbi">Kebbi</option>
                      <option value="Kogi">Kogi</option>
                      <option value="Kwara">Kwara</option>
                      <option value="Lagos">Lagos</option>
                      <option value="Nasarawa">Nasarawa</option>
                      <option value="Niger">Niger</option>
                      <option value="Ogun">Ogun</option>
                      <option value="Ondo">Ondo</option>
                      <option value="Osun">Osun</option>
                      <option value="Oyo">Oyo</option>
                      <option value="Plateau">Plateau</option>
                      <option value="Rivers">Rivers</option>
                      <option value="Sokoto">Sokoto</option>
                      <option value="Taraba">Taraba</option> 
                      <option value="Yobe">Yobe</option>
                      <option value="Zamfara">Zamfara </option> 
                      <option value="FCT">FCT </option> 
                  </select><br>
                  <label>Date of Delivery</label>
					<input type="date" name="dod" class="form-control" required="">
					<br>
					<label>Time of Delivery</label>
					<input type="time" name="tod" class="form-control" required="">
					<br>
					<button class="btn btn-primary btn-lg btn-block" name="order">Proceed</button>
				</form>
		</div>
		<br><br>
	</section>

	
</body>
</html>