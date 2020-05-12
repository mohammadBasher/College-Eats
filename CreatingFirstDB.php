<?php
$server_name="localhost";
$admin_name="admin";
$password="localhost";
//Create connection
$conn= mysqli_connect($server_name,$admin_name,$password);
//Check connection
if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}
//Create database
$sql="CREATE DATABASE first_DB";
if(mysqli_query($conn,$sql)){
	echo "Database created successfully";
}else{
	echo "Error creating database:".mysqli_error($conn);
}
mysqli_close($conn);
?>