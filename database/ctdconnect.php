<?php
/////////////////// for database Connection////////////////////////

$user       = "root";
$server     = "localhost";
$password   = "";
$db         = "ctdcommunity";
 
 /////////////// connections ///////////////
$connection = mysqli_connect($server,$user,$password,$db);
if (!$connection) {
	echo "failed to connect";
}


?>