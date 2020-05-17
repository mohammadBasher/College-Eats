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
    if(isset($_SESSION["Reg_no"]) and isset($_SESSION["password"])){
    	$Reg_no=$_SESSION["Reg_no"];
	    $password=$_SESSION["password"];
	$check="SELECT * FROM registration_table WHERE Reg_no='$Reg_no' AND Password='$password'";
    $result=mysqli_query($connect,$check)  or die(mysqli_error($connect));
	if(mysqli_num_rows($result)==1){
             header("location:feedback_form.php");
	}
	
	else
		echo "Either You are not a registered user or you fill one or more field wrong";
    }
    else{
    	header("location:Error.html");
}

mysqli_close($connect);
?>
