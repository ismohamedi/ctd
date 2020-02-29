<?php
session_start();
if(!$_SESSION['email']){
echo'<script> window.location.assign("../login.php")</script>';

}
include '../database/ctdconnect.php';
// ////////////////////////////CODE FOR SENDING DATA TO THE DATABASE FROM THE HTML FORM FOR DEVELOPER REGISTRATION/////////////////////////
if (isset($_POST['save'])) {
	$email         = $_SESSION['email'];
	$first_name    = mysqli_real_escape_string($connection,$_POST['first_name']);
	$last_name     = mysqli_real_escape_string($connection,$_POST['last_name']);
	$country_name  = mysqli_real_escape_string($connection,$_POST['country']);
	$phone_number  = mysqli_real_escape_string($connection,$_POST['phone']);
	$gender        = mysqli_real_escape_string($connection,$_POST['gender']);
	
	////////////////////////// CODE FOR COUNTRY ID /////////////////////////////////////////////
	$country_data  = mysqli_query($connection,"SELECT `id` FROM `apps_countries` WHERE country_name = '$country_name' ");
	$country       = mysqli_fetch_array($country_data);
	$country_name  = $country['id'];

	////////////////////////// CODE FOR TAKING THE USER ID FROM THE USER_ACCOUNT////////////////////////////////
	$take_id       = mysqli_query($connection,"SELECT * FROM `users` WHERE email = '$email'");
	$id_taken      = mysqli_fetch_array($take_id);
	$user_id       = $id_taken['id'];
   
	/////////////////// CODE FOR UPLOADING THE FILE TO THE FILES FOLDER AND TO THE DATABASE/////////////////
	$file_name   = $_FILES["resume"]["name"];
    $tmp_name    = $_FILES["resume"]["tmp_name"];
    $path        = '../Dev_CV_resume/';
move_uploaded_file($tmp_name, $path.$file_name);

	//////////// THEN CODE FOR INSERTING ALL OF DATA TO THE DATABASE FRON THE HTML FORM//////////////////
$save_data = mysqli_query($connection,"INSERT INTO `developers_accounts`(`first_name`, `last_name`,`gender`, `country`, `email`, `phone_number`, `cv_resume`, `photo`, `user_id`, `created_on`, `updated_on`) VALUES('$first_name','$last_name','$gender','$country_name','$email','$phone_number','$file_name','','$user_id',now(),now())");
if($save_data){
	echo'<script> alert(" 😊 Thanks you have successfully complete the full Registration to the community now you are ready to go");
        window.location.assign("dev_home.php");
	</script>';
}
else{
	echo'<script> alert("OOoooooooh 😓 sorry some errors happened registration as Developer failed please try again!!!");
	window.location.assign("reg_dev.php");
	
	</script>';
}
}
?> 