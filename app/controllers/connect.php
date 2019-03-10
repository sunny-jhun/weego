<?php 

$host = 'db4free.net';
$username = 'weegodb1996new';
$password = 'Sunz.1996';
$dbname = 'weegonew_db';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

 //echo 'connected succesfully';

 ?>