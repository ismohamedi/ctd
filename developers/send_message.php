<?php
session_start();
if (!$_SESSION['email']) {
	echo'<script> window.location.assign("login.php")</script>';
}
include '../database/ctdconnect.php';

//////////// selecting name of the user from the developers accounts////////////////////////////////////////////////
if(isset($_GET['attachment'])){
	$message      = mysqli_real_escape_string($connection,$_GET['message']);
	$email        = $_SESSION['email'];

	////////////////////////////////// CODE FOR SELECTING SENDER ID TO BE SAVED INTO THE DATABASE////////////////////////////
	$user         = mysqli_query($connection,"SELECT `id` FROM users WHERE email = '$email'");
	$user_data    = mysqli_fetch_array($user);
	$user_id      = $user_data['id'];
	$status       = "available";

////////////////////////////////// CODE FOR SELECTING user name  TO BE USED AS THE SENDER OF THE MESSAGE////////////////////////////
	$sender       = mysqli_query($connection,"SELECT * FROM `developers_accounts` WHERE email = '$email'");
	$sender_data  = mysqli_fetch_array($sender);
	$sender_name  = $sender_data['first_name'];

	///////////////////// CODE FOR UPLADING DOCUMENTS FROM THE HTML FORM////////////////////////////////
	$file_name    = $_FILES["attachment"]["name"];
    $tmp_name     = $_FILES["attachment"]["tmp_name"];
    $path         = '../chat_documents/';
move_uploaded_file($tmp_name, $path.$file_name);


	//////////////////////////////////// THEN INSERTING DATA TO THE DATABASE //////////////////////////////////////
	$send_data = mysqli_query($connection,"INSERT INTO `chat_room`(`sender_Id`, `message`, `file`, `sent_on`, `updated_on`, `message_status`) VALUES('$user_id','$message','$file_name',now(),now(),'$status')");
	if ($send_data) {
		echo'<script> window.location.assign("forum_chat.php")</script>';
	}
	else{
		echo'<script> alert("ooops message not send");
		window.location.assign("forum_chat.php")
		</script>';
	}
	}
	else{
		echo"oops";
	}
?>