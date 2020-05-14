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
	$password=$_POST['password'];
    $canteen=$_POST['canteen'];
    $item=$_POST['item'];
    $reg_no=$_POST['Reg_no'];
	
	$quantity=$_POST['quantity'];
	$check="SELECT * FROM registration_table WHERE name='$name' AND Password='$password' AND email='$email'";
    $result=mysqli_query($connect,$check)  or die(mysqli_error($connect));
	if(mysqli_num_rows($result)==1){
	     $fill="INSERT INTO order_table (name,email,Reg_no,canteen,item,quantity) VALUES ('$name','$email','$reg_no','$canteen','$item','$quantity')";
	     $new_result=mysqli_query($connect,$fill)  or die(mysqli_error($connect));
	     echo "Your order has been recorded";
	}
	
	else
		echo "Either You are not a registered user or you fill one or more field wrong";

mysqli_close($connect);
?>
