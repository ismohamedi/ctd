<?php
session_start();
if(!$_SESSION['email']){
	echo'<script>
	window.location.assain("../login.php")
	</script>';
}
include '../database/ctdconnect.php';





// ////////////////////THEN TAKING THE VARIABLES FROM THE HTML FORM//////////////////////////////////////
if (isset($_POST['update'])) {
	$first_name  = mysqli_real_escape_string($connection,$_POST['fname']);
	$last_name   = mysqli_real_escape_string($connection,$_POST['lname']);
	$phone       = mysqli_real_escape_string($connection,$_POST['phone']);

/////////////////////// THEN TAKING USER ID FOR THE PROFILE UPDATION///////////////////////////////////
$user_email      = $_SESSION['email'];
$dev_details     = mysqli_query($connection,"SELECT * FROM `developers_accounts` WHERE email = '$user_email'");
$dev_data          = mysqli_fetch_array($dev_details);
$id              = $dev_data['dev_id'];


	//////////////////////////// CHECKING IF THE INPUT IS EMPTY/////////////////////////////////////////
	if(empty($first_name)){
		$first_name = $dev_data['first_name'];
	}
	if(empty($last_name)){
		$last_name  = $dev_data['last_name'];
	}
	if(empty($phone)){
		$phone      = $dev_data['phone_number'];
	}
	
	///////////////////////////// UPLOADING PHOTO TO THE DATABASE AND THE PHOTO FOLDER//////////////////

	$file_name   = $_FILES["photo"]["name"];
    $tmp_name    = $_FILES["photo"]["tmp_name"];
    $path        = '../profile_photos/';
    if(!empty($file_name)){
move_uploaded_file($tmp_name, $path.$file_name);
    }
    else{
    	$file_name = $dev_data['photo'];
    }

//////////// //// THEN UPDATION OF THE USER DETAILS/////////////////////////////////////////////////////
$update_profile  = mysqli_query($connection,"UPDATE `developers_accounts` SET `first_name`='$first_name',`last_name`='$last_name',`phone_number`='$phone',`photo`='$file_name',`updated_on`= now() WHERE dev_id ='$id'");

if($update_profile){
	echo'<script> alert("Thanks your Account successfully updated");
	window.location.assign("dev_profile.php");
	</script>';
}
else{
	echo'<script> alert("Sorry updation failed try again");
	window.location.assign("dev_profile.php");
	</script>';
}
	
}
;

 ?>