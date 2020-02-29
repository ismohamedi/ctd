<?php
session_start();
if (!$_SESSION['email']) {
	echo'<script> window.location.assign("../login.php")</script>';
}
include '../database/ctdconnect.php';

////////////////////// TAKING USER DATA FROM THE DATABASE FOR UPDATE //////////////////////////////////
$user_email      = $_SESSION['email'];
$dev_details     = mysqli_query($connection,"SELECT * FROM `developers_accounts` WHERE email = '$user_email'");
$dev_data        = mysqli_fetch_array($dev_details);
$id              = $dev_data['dev_id'];


/////////////////// THEN TAKING DATA FROM HTML FORM /////////////////////////////////////////////////////
if (isset($_POST['upload'])) {
	$file_name   = $_FILES["cv_resume"]["name"];
    $tmp_name    = $_FILES["cv_resume"]["tmp_name"];
    $path        = '../Dev_CV_resume/';
    if(!empty($file_name)){
move_uploaded_file($tmp_name, $path.$file_name);
}
else{
  $file_name     = $dev_data['cv_resume'];
}

//////////////////// THEN UPDATING THE DATABASE TABLE//////////////////////////////////////
$update_cv       = mysqli_query($connection,"UPDATE `developers_accounts` SET cv_resume = '$file_name' WHERE dev_id = '$id'");
if ($update_cv) {
	echo '<script>
	alert("Thanks your CV/Resume successfully Updated");
	window.location.assign("dev_profile.php");
	</script>';
}
else{
	echo '<script>
	alert("Sorry your CV/Resume Updation failed please try again after 30 seconds");
	window.location.assign("dev_profile.php");
	</script>';

}
}
?>