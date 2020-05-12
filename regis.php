
<?php
$server_NAME="localhost";
$admin_NAME="admin";
$password="localhost";
$database="first_DB";
$connect=mysqli_connect($server_NAME,$admin_NAME,$password,$database);
if(!$connect){
	die('connection failed:'.mysql_error());
	}
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];
	if($c_password==$password){
	$user_info="INSERT INTO registration_table (name,email,Reg_no,Password)
	VALUES('$_POST[name]','$_POST[email]','$_POST[reg_no]','$_POST[password]')";
	if(!mysqli_query($connect,$user_info))
	echo "Error:".mysqli_error($connect);
	else{
		echo "Your information was added to the database";
    }
	}
	else{
		echo "<h1>Please enter same password on both columns:</h1>".mysqli_error($connect);
	}
	
    mysqli_close($connect);
?>
