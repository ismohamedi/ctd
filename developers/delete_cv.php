<?php
session_start();
if(!$_SESSION['email']){
	echo'<script>
	window.location.assain("../login.php")
	</script>';
}
include '../database/ctdconnect.php';


/////////////////////// THEN TAKING USER ID FOR THE PROFILE UPDATION///////////////////////////////////
$user_email      = $_SESSION['email'];
$dev_details     = mysqli_query($connection,"SELECT * FROM `developers_accounts` WHERE email = '$user_email'");
$dev_data          = mysqli_fetch_array($dev_details);
$id              = $dev_data['dev_id'];


//////////// //// THEN DELETING CV_resume OF THE USER //////////////////////////////////////////////////
$update_profile  = mysqli_query($connection,"UPDATE `developers_accounts` SET cv_resume = ''   WHERE dev_id ='$id'");

if($update_profile){
	echo'<script> alert("Thanks your CV/resume successfully Deleted");
	window.location.assign("dev_profile.php");
	</script>';
}
else{
	echo'<script> alert("Sorry Deletion failed try again");
	window.location.assign("dev_profile.php");
	</script>';
}
;

 ?>