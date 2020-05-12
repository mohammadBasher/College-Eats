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
    $canteen=$_POST['canteen'];
    $item=$_POST['item'];
	$password=$_POST['password'];
	$feedback=$_POST['feedback'];
	$check="SELECT * FROM registration_table WHERE name='$name' AND Password='$password'";
    $result=mysqli_query($connect,$check)  or die(mysqli_error($connect));
	if(mysqli_num_rows($result)==1){
	     $fill="INSERT INTO feedback_table (name,canteen,item,feedback) VALUES ('$name','$canteen','$item','$feedback')";
	     $new_result=mysqli_query($connect,$fill)  or die(mysqli_error($connect));
	     echo "Your feedback has been recorded";
	}
	
	else
		echo "Either You are not a registered user or you fill one or more field wrong";

mysqli_close($connect);
?>
