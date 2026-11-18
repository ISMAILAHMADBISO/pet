<?php
session_start();
include 'db_connection.php';



if (isset($_POST['alogin'])) {
  
  $uname = $_POST['uname'];
  $pword = $_POST['pword'];

  
       $check_user = "SELECT * FROM admin WHERE uname = '$uname' AND pword='$pword'";
       $run = mysqli_query($dbcon,$check_user);
       if (mysqli_num_rows($run)>0) {
        $_SESSION['uname'] = $email;
          echo "<script>window.open('dashboard.php','_self')</script>";
        }else{
         echo "<script>window.open('admin.php?msg=error','_self')</script>";
      } 
}




if (isset($_POST['create'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $gsm = $_POST['gsm'];
  $pword = $_POST['pword'];

  $insert = "INSERT INTO account (name, email, gsm, password) VALUES ('$name','$email','$gsm','$pword')";
  if (mysqli_query($dbcon,$insert)) {
      $_SESSION['email']=$email;
    echo "<script>window.open('apply.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('apply.php?msg=error','_self')</script>";
  }
}


if (isset($_POST['chnage_ppic'])) {
  $ppic = $_POST['ppic'];
  $email = $_POST['email'];

  $filename=$_FILES['ppic']['name'];
  move_uploaded_file($_FILES['ppic']['tmp_name'], "passport/".$_FILES['ppic']['name']);

  $sql =  "UPDATE account SET ppic = '$filename' WHERE email = '$email' ";
  if (mysqli_query($dbcon,$sql)) {
    echo "<script>window.open('index.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('index.php?msg=error','_self')</script>";
  }
}

if (isset($_POST['apply'])) {

  $fullname = $_POST['fullname'];
  $sor = $_POST['sor'];
  $email = $_POST['email'];
  $gsm = $_POST['gsm'];
  $marital = $_POST['marital'];
  $nation = $_POST['nation'];
  $address = $_POST['address'];
  $lga = $_POST['lga'];
  $pob = $_POST['pob'];
  $dob = $_POST['dob'];
  $sex = $_POST['sex'];
  $disability = $_POST['disability'];
  $sname_1 = $_POST['sname_1'];
  $sname_2 = $_POST['sname_2'];
  $sname_3 = $_POST['sname_3'];
  $sname_4 = $_POST['sname_4'];
  $sname_5 = $_POST['sname_5'];
  $sname_6 = $_POST['sname_6'];
  $add_1 = $_POST['add_1'];
  $add_2 = $_POST['add_2'];
  $add_3 = $_POST['add_3'];
  $add_4 = $_POST['add_4'];
  $fmy_1 = $_POST['fmy_1'];
  $fmy_2 = $_POST['fmy_2'];
  $fmy_3 = $_POST['fmy_3'];
  $fmy_4 = $_POST['fmy_4'];
  $tmy_1 = $_POST['tmy_1'];
  $tmy_2 = $_POST['tmy_2'];
  $tmy_3 = $_POST['tmy_3'];
  $tmy_4 = $_POST['tmy_4'];

  $qualification_1 = $_POST['qualification_1'];
  $qualification_2 = $_POST['qualification_2'];
  $qualification_3 = $_POST['qualification_3'];
  $qualification_4 = $_POST['qualification_4'];
  $noe = $_POST['noe'];
  $doe = $_POST['doe'];
  $exam_centre = $_POST['exam_centre'];
  $exam_no = $_POST['exam_no'];
  $s1 = $_POST['s1'];
  $s2 = $_POST['s2'];
  $s3 = $_POST['s3'];
  $s4 = $_POST['s4'];
  $s5 = $_POST['s5'];
  $s6 = $_POST['s6'];
  $s7 = $_POST['s7'];
  $s8 = $_POST['s8'];
  $s9 = $_POST['s9'];
  $g1 = $_POST['g1'];
  $g2 = $_POST['g2'];
  $g3 = $_POST['g3'];
  $g4 = $_POST['g4'];
  $g5 = $_POST['g5'];
  $g6 = $_POST['g6'];
  $g7 = $_POST['g7'];
  $g8 = $_POST['g8'];
  $g9 = $_POST['g9'];
  $first_choice = $_POST['first_choice'];
  $second_choice = $_POST['second_choice'];

   $check_email_query="select * from applicants WHERE email='$email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
    

    if(mysqli_num_rows($run_query)>0)  
    {  
     echo "<script>window.open('index.php?msg=aerror','_self')</script>";
    } else{ 


  $insert_into = "INSERT INTO applicants (fullname, sor, email, gsm, marital, nation, address, lga, pob, dob, sex, disability, sname_1,  add_1, fmy_1, tmy_1, qualification_1 ,sname_2, add_2, fmy_2, tmy_2, qualification_2, sname_3, add_3, fmy_3, tmy_3,qualification_3,  sname_4, add_4,fmy_4, tmy_4,qualification_4, noe, doe,exam_centre,  exam_no, s1,g1, s2,g2, s3,g3, s4,g4, s5,g5, s6,g6,s7,g7,s8,g8,s9,g9,first_choice, second_choice, status) VALUES ('$fullname','$sor','$email','$gsm','$marital','$nation','$address','$lga','$pob','$dob','$sex','$disability','$sname_1','$add_1','$fmy_1','$tmy_1','$qualification_1','$sname_2','$add_2','$fmy_2','$tmy_2','$qualification_2','$sname_3','$add_3','$fmy_3','$tmy_3','$qualification_3','$sname_4','$add_4','$fmy_4','$tmy_4','$qualification_4', '$noe', '$doe','$exam_centre',  '$exam_no', '$s1','$g1', '$s2','$g2', '$s3','$g3', '$s4','$g4', '$s5','$g5', '$s6','$g6','$s7','$g7','$s8','$g8','$s9','$g9','$first_choice','$second_choice','APPLIED')";

  if (mysqli_query($dbcon,$insert_into)) {
    echo "<script>window.open('index.php?msg=asuccess','_self')</script>";
  }
  else{
    echo mysqli_error($dbcon);
   //echo "<script>window.open('index.php?msg=aserror','_self')</script>";
  }
} 
}

if (isset($_POST['update'])) {

  $amessage = $_POST['amessage'];

  $insert = "INSERT INTO amessage (amessage) VALUES ('$amessage')";
  if (mysqli_query($dbcon,$insert)) {
    
    echo "<script>window.open('message.php?msg=success','_self')</script>";
  
  }
  else{
    echo "<script>window.open('message.php?msg=error','_self')</script>";
  }
}


?>
