<?php
session_start();
include 'database/ctdconnect.php';

if(isset($_POST['register'])){

	/////////////////VARIABLES FROM THE HTML FORM////////////////////////

	$email       = mysqli_real_escape_string($connection,$_POST['Email']);
	$role        = mysqli_real_escape_string($connection,$_POST['role']);
	$password    = md5(mysqli_real_escape_string($connection,$_POST['Password']));
	$password1   = md5(mysqli_real_escape_string($connection,$_POST['ConfirmPassword']));
	$_SESSION['email'] = $email;

///////////CHECKING FOR MATCHING OF THE PASSWORDS/////////////////////////
	if($password == $password1){
		if($role != "Select your role"){
		$save_data = "INSERT INTO `users`(`email`, `user_role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES('$email','$role','','$password','',now(),now())";
		$pass_data = mysqli_query($connection, $save_data);
		if($pass_data){
  
  
			 $system_email = "codetechdevelopers1@gmail.com";  
			 $subject = "Confirm your Email for CodeTechDevelopers Community";   
			 $comment = "http://localhost/ctd/developers/reg_dev.php";    
      //send email
         mail($email, $subject, $comment, "From:" . $system_email);  

         echo'<script> alert("😊 Thanks You have successfully registered to the community view your email address for confirmation so as to proceed");
            window.location.assign("developers/reg_dev.php"); 
            

         </script>';
         
         



		}
		else{
			echo'<script> alert(" ooh 😓 sorry registration failed try again!!");
			window.location.assign("register.php");</script>';
		}

	}
	else{
         	echo'<script> alert(" ooooh 😓 Sorry please select your role to the community");
         	window.location.assign("register.php");</script>';
         }


	}
	else{
		echo'<script> alert(" ooh 😓 Passwords did not match please enter correctly!!");
		window.location.assign("register.php");</script>';
	}


}




?>