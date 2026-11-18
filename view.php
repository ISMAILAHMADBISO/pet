<?php
include "include/db_connection.php"
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-icons/bootstrap-icons.css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/sweetalert.js"></script>
	<script type="text/javascript" src="js/script.js"></script>	
</head>
<body>


 <section id="main">
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 sidebar">
                    <br>
                    <h3>ADMIN DASHBOARD</h3>
                    <br><br>
                    <ul>
                        <li><a  href="dashboard.php"><span class="bi bi-dash"></span> Dashboard</a></li>
                        <li><a href="new.php"><span class="bi bi-plus-circle-fill"></span> Add New Pet</a></li>
                        <li><a class="active" href="view.php"><span class="bi bi-view-list"></span> View Pet</a></li>
                        <li><a href="trans.php"><span class="bi bi-book"></span> New Transaction</a></li>
                        <li><a href="section.php"><span class="bi bi-shield-check"></span> Add Section</a></li>
                        <li><a href="admin.php"><span class="bi bi-signpost"></span> Logout</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Pet</h3>
                            <table>
                                <tr>
                                    <th>S/N</th>
                                    <th>Pet Name</th>
                                    <th>Section</th>
                                    <th>Quantity</th>
                                    <th>Age</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                 <?php

                                 $counter = 1;
                                                $sql = "SELECT * FROM pet ORDER BY id DESC";
                                                $run = mysqli_query($dbcon,$sql);
                                                while($row = mysqli_fetch_assoc($run)){
                                               
                                            ?>
                                <tr>
                                    <td><?php echo $counter++; ?></td>
                                    <td><?php echo $row['pname']; ?></td>
                                    <td><?php echo $row['section']; ?></td>
                                    <td><?php echo $row['quantity']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><?php echo $row['sdate']; ?></td>
                                    <td><a href="del_p.php?id=<?php echo $row['id']; ?>"> <badge class="badge badge-warning">Delete</badge></a></td>
                                </tr>
                                 <?php } ?>
                            </table>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
    </section>
        


</body>
</html>



