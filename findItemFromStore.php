<? php 
	session_start();
	require_once('inc/connection.php');
?>
<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'onlineshoestore'; 

	$connection = mysqli_connect('localhost', 'root', '', 'onlineshoestore');
?>