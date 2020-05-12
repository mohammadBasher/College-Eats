<?php
$server_name="localhost";
$admin_name="admin";
$password="localhost";
$dbname="first_DB";
//Create conection
$con= mysqli_connect($server_name,$admin_name,$password,$dbname);
//Check conection
if(!$con){
	die("conection failed:".mysqli_conect_error());
}
//sql to create table
$sql = "CREATE TABLE feedback_table(
    name VARCHAR(20),
	canteen VARCHAR(30),
	item VARCHAR(30) ,
	feedback VARCHAR(200)
	)";
	if(mysqli_query($con,$sql)){
	echo "TABLE first_table created successfully";
}else{
	echo "Error creating TABLE:".mysqli_error($con);
}
mysqli_close($con);


?>