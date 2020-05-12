<?php
$server_NAME="localhost";
$admin_NAME="admin";
$password="localhost";
$database="first_DB";
$connect=mysqli_connect($server_NAME,$admin_NAME,$password,$database);
if(!$connect){
	die('connection failed:'.mysql_error());
    }
	$name=$_POST['name'];
	$email=$_POST['email'];
	$reg_no=$_POST['reg_no'];
	$password=$_POST['password'];
	$check="SELECT * FROM registration_table WHERE name='$name' AND email='$email' AND Reg_no='$reg_no' AND Password='$password'";
    $result=mysqli_query($connect,$check)  or die(mysqli_error($connect));
	if(mysqli_num_rows($result)==1){
		echo "you are logged in succesfully";
	}
	
	else
		echo "You are not a registered user";

mysqli_close($connect);
?>
