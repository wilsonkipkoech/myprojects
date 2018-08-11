<?php
 include('config/dbConn.php');

 $f_name=$_POST["firstname"];
 $l_name=$_POST["lastname"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 $re_password=$_POST["re_password"];
 $mobile=$_POST["mobile"];
 $address=$_POST["address"];



 $name="/^[A-Z][a-zA-Z ]+$/";
 $emailValidation="/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2,4})$/";
 $number="/^[0-9]+ $/";


   if (empty($f_name) || empty($l_name) || empty($email)|| empty($password) || empty($re_password) || empty($mobile) ||empty($address) ) {
   	echo "
      <div class='alert alert-warning' >
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>All fields are mandatory...</b>

      </div>";
   }
   else{

   // 	    if(!preg_match($name,$f_name)) {
   // 	echo "$f_name is not invalid";
   // 	exit();
   // }

   // if (!preg_match($name,$l_name)) {
   // 		echo "$l_name is invalid";
   // 		exit();
   // }
if (!preg_match($emailValidation,$email)) {
		echo "
      <div class='alert alert-warning' >
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This format of  $email is incorrect</b>

      </div>";
	
	exit();
}
 if (strlen($password) < 9 ) {
 		echo "
      <div class='alert alert-warning' >
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>The password you entered is weak</b>

      </div>";
 	exit();
 }
 if (strlen($re_password) < 9 ) {
 		echo "
      <div class='alert alert-warning' >
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>The password you entered is weak </b>

      </div>";
 	
 	exit();
 }

 if ($password !=$re_password) {
 		echo "
      <div class='alert alert-warning' >
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password must be the same</b>

      </div>";
 	
 }

 // if (!preg_match($number, $mobile)) {
 // 	echo "The mobile number you e ntered is not valid ";
 // 	exit();
 // }
 // if (!(strlen($mobile)==10)) {
 // 	echo "Mobile number must be a 10 digit number";
 // }
 // check for an existing email
  $sql ="SELECT user_id FROM user_info WHERE email='$email' LIMIT 1";
  $check_query=mysqli_query($con,$sql);
  $count_email=mysqli_num_rows($check_query);

if($count_email >0 ){
		echo "
      <div class='alert alert-warning' >
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Email address already available. Try another email address</b>

      </div>";
	
	exit();
   }else{
    $password=md5($password);
   
   	$sql="INSERT INTO user_info (firstname, lastname, email, password, re_password, mobile, address) VALUES ('$f_name', 
    '$l_name', '$email', '$password', '$re_password', '$mobile', '$address')";
   	$run_query=mysqli_query($con,$sql);
   	if ($run_query) {

   			echo "
      <div class='alert alert-success' >
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>You have registered successfully...!</b>

      </div>";
   		
   	}
   }
}

  
?>