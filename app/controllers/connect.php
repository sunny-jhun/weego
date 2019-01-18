<?php 

$host = 'db4free.net';
$username = 'weego1996';
$password = 'Sunz.1996';
$dbname = 'weego_db';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

 //echo 'connected succesfully';

 ?>