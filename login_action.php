<?php
session_start();

//////////////////// including the database connection file////////////
include 'database/ctdconnect.php';

if (isset($_POST['login'])) {

	//////////////// taking the data from the html form for validation with those from the database////////////////////////
	$email    = mysqli_real_escape_string($connection,$_POST['Email']);
	$pass     = md5(mysqli_real_escape_string($connection,$_POST['Password']));
	$remember = mysqli_real_escape_string($connection,$_POST['remember']);

	//////////// selecting data from the database for validation with those from the html form/////////////////
	$data      = mysqli_query($connection,"SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'");
	
	if(mysqli_num_rows($data)==TRUE){
            $_SESSION['email'] = $email;
        while($row=mysqli_fetch_array($data)){
                

            // /////////////////////////////code for generating session time out of the system if 10 minutes the system is idle it return to loinin form for security//////////////////////////////////////////////////////////
                $_SESSION['start'] = time();
                $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
                $_SESSION['remember'] = $remember;
                if($row['user_role'] == "Developer"){
                echo'<script>
            window.location.assign("developers/dev_home.php");
            </script>
            ';
        }
        elseif ($row['user_role'] == "Customer") {
        	# code...
        }
    }
}
else{
	echo'<script>alert(" 😓 sorry username or password is wrong try again");
	window.location.assign("login.php")</script>';

}


}
?>