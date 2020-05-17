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
    $name=$_POST["name"];
    $password=$_POST["password"];
    	$check="SELECT * FROM registration_table WHERE name='$name' AND Password='$password'";
    $result=mysqli_query($connect,$check)  or die(mysqli_error($connect));
	if(mysqli_num_rows($result)==1){
    $_SESSION["name"]=$name;
    $_SESSION["password"]=$password;
    header("location:index.html");
}
else
echo "you are not a registered user";
mysqli_close($connect);
?>



