<?php
session_start();
$server_NAME="localhost";
$admin_NAME="admin";
$password="localhost";
$database="first_DB";
$connect=mysqli_connect($server_NAME,$admin_NAME,$password,$database);
if(!$connect){
	die('connection failed:'.mysql_error());
    }
     unset($_SESSION['Reg_no']);
     unset($_SESSION['password']);
        	header("location:index.php");
mysqli_close($connect);
?>