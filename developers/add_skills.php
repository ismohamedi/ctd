<?php
session_start();
include '../database/ctdconnect.php';
if (!$_SESSION['email']) {
	echo'<script> window.loction.assign("../login.php")</script>';
}

//////////////////// GETTING DEV OR GRAPHIC DESIGNER ID FROM THE DEVELOPERS ACCOUNT TABLE////////////////
$user_email  = $_SESSION['email'];
$dev_details = mysqli_query($connection,"SELECT * FROM `developers_accounts` WHERE email = '$user_email'");
$dev_id      = mysqli_fetch_array($dev_details);
$id          = $dev_id['dev_id'];

////////////////////////// THEN SAVING THE DATA FROM HTML FORM TO THE DATABSE ///////////////////////////
if(isset($_POST['save'])){
	$skill_category    = mysqli_real_escape_string($connection,$_POST['skill_type']);
	$skill_name        = mysqli_real_escape_string($connection,$_POST['skill_title']);

	///////////// THEN CONVERTING SKILL CATEGORY INTO CATEGORY_ID FOR STORING INTO THE TABLE AS fk OF skill categories//////////////////////////////
	$categories        = mysqli_query($connection,"SELECT * FROM `skills_category` WHERE skill_type = '$skill_category'");
    $categories_type   = mysqli_fetch_array($categories);
    $category_id       = $categories_type['skill_category_id'];
    echo $category_id;

    /////////////////////// THEN INSERT INTO THE SKILLS TABLE/////////////////////////////
    $save_data         = mysqli_query($connection,"INSERT INTO  `developers_skills`( `skill_category_id`, `skill_title`, `added_on`, `updated_on`, `dev_id`) VALUES('$category_id','$skill_name ',now(),now(),'$id')");
    if($save_data){
    	echo'<script> alert("😊 New skill is successfully added");
    	window.location.assign("dev_profile.php");
    	</script>';
    }
    else{
    	echo'<script> alert("😓 Sorry failed to add new skill try again");
    	window.location.assign("dev_profile.php");
    	</script>';
    }

}

 ?>