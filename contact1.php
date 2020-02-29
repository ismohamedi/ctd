<?php
include 'database/ctdconnect.php';
 // class ContactUs{
	// var $email;
	// var $phone;
	// var $name;
	// var $msg;
	//  public function send_comments(){
		if(isset($_POST['send'])){
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$name  = $_POST['name'];
			$msg   = $_POST['comment'];


			$send = "INSERT INTO `comments`(`user_email`, `comment`, `sent_on`, `received_on`) VALUES ) VALUES('$email','$phone','$msg',now())";
           $send_comments = mysqli_query($connection,$send);
			if ($send_comments) {
				echo'<script>alert("thanks '.$name.' for your Comment")
				window.location.assign("contact.php");
				</script>';
			}
			else{
				echo'<script>alart("Sorry  '.$name.' failed to send the comment try again")</script>';
			}
		}



	// 	 }

	// }





?>