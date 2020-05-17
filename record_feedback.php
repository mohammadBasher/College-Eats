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
    	$name=$_SESSION["name"];
    	$canteen=$_POST['canteen'];
    	$item=$_POST['item'];
    	$feedback=$_POST['feedback'];
    $fill="INSERT INTO feedback_table (name,canteen,item,feedback) VALUES ('$name','$canteen','$item','$feedback')";
     $result=mysqli_query($connect,$fill)  or die(mysqli_error($connect));
     echo "your feedback has been recorded";
?>