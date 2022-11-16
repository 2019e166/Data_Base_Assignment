<?php session_start(); ?>
<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<?php
$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'onlineshoestore'; 

    $connection = mysqli_connect('localhost', 'root', '', 'onlineshoestore');
?>