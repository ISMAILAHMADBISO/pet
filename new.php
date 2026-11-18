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
                        <li><a class="active" href="new.php"><span class="bi bi-plus-circle-fill"></span> Add New Pet</a></li>
                        <li><a href="view.php"><span class="bi bi-view-list"></span> View Pet</a></li>
                        <li><a href="trans.php"><span class="bi bi-book"></span> New Transaction</a></li>
                        <li><a  href="section.php"><span class="bi bi-shield-check"></span> Add Section</a></li>
                        <li><a href="admin.php"><span class="bi bi-signpost"></span> Logout</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Add Pet</h3>
                            <br>
                             <p style="color: mediumpurple;line-height: 0px !important;text-align: center;" class="animate__animated animate__fadeInDown" id="error"></p>
                                     <form id="formadd" name="form1" method="post">
                                <label>Pet Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter Pet Name" class="form-control" required>
                                <br>
                                 <label>Pet Quantity</label>
                                <input type="number" name="quan" id="quan" placeholder="Enter Pet Quantity" class="form-control" required>
                                <br>
                                <label>Pet Age</label>
                                <input type="text" name="age" id="age" placeholder="Enter Pet Quantity" class="form-control" required>
                                <br>
                                <label>Pet Section</label>
                                <select class="form-control" name="section" id="section">
                                    <?php  

                                    $sql1 = "SELECT * FROM section";
                                    $run2 = mysqli_query($dbcon,$sql1);
                                    while($rows = mysqli_fetch_assoc($run2)){
                                        ?>
                                        <option value="<?php echo $rows['section']; ?>-<?php echo $rows['block']; ?>"><?php echo $rows['section']; ?>-<?php echo $rows['block']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <br>
                                <center><button class="btn btn-warning btn-lg btn-block firstbtn animate__animated animate__fadeInUp" id="save">
                      <span id="spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="width: 25px; height: 25px;display: none;"></span>
                SUBMIT
            </button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="list">
                                <h4 style="color:purple;background-color: #fff;padding:  5px;border-radius:  4px 4px 0px 0px;font-family: Bold;">Recently Added</h4>
                                <br>
                                  <?php

                                 $counter = 1;
                                                $sql = "SELECT * FROM pet ORDER BY id DESC LIMIT 5";
                                                $run = mysqli_query($dbcon,$sql);
                                                while($row = mysqli_fetch_assoc($run)){
                                               
                                            ?>
                                   <div class="row">
                                                    <div class="col-2">
                                                       <h1 style="background-color: #fff;width: 50px;height: 50px;border-radius: 10px;text-align:center;color: purple;"><?php echo $counter++; ?></h1> 
                                                    </div>
                                                    <div class="col-10">
                                                        <h6 style="color: #fff;line-height: 20px;"><?php echo $row['pname']; ?></h6>
                                                       <a href="del_p.php?id=<?php echo $row['id']; ?>"> <badge class="badge badge-warning">Delete</badge></a>
                                                    </div>
                                                </div>
                                                <br>
                                            <?php } ?>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
    </section>
        





<script type="text/javascript">
    $(document).ready(function(){

//SIGN UP

 $(document).on('submit','#formadd', function(e){
                e.preventDefault();
                $("#save").attr("disabled", "disabled");
                $("#spinner").show();
                var name = $('#name').val();
                var section = $("#section").val();
                if (name!="" && section!="") {
                    $.ajax({
                        method: "POST",
                        url: "p_script.php",
                        data: $(this).serialize(),
                        success: function(data){
                          
                                  $("#save").removeAttr("disabled");

                                $("#success").show();
                                $("#spinner").hide();
                                $('#name').val("");
                                $("#block").val("");
                                $('#error').html(data);
                            }
                        });
                }else{
                     $('#error').html("<span style='color:#0df6e1;' class='animate__animated animate__fadeInUp'>All fields are required!</span>");
                     $("#save").removeAttr("disabled");
                        $("#spinner").hide();

                }
            });


//END OF SIGN UP

  });

</script>    
</body>
</html>



