<!DOCTYPE html>
<html>
<head>
<title>Feedback form</title>
<link rel="stylesheet" type="text/css" href="table_style.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body 
style="
background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('./images/fruit.jpg'); font-family: 'Montserrat', sans-serif;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
    height:100vh;
    color: white;
    
"
>
<?php
$server_NAME="localhost";
$admin_NAME="admin";
$password="localhost";
$database="first_DB";
$connect=mysqli_connect($server_NAME,$admin_NAME,$password,$database);
if(!$connect){
    die('connection failed:'.mysql_error());
    }
    $feedback="SELECT * FROM feedback_table 
    WHERE canteen='bika'";
    $result=mysqli_query($connect,$feedback);
    echo "<table class='table'><thead><th>Registration Number</th><th>Item</th><th>Feedback</th></thead><tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<td>".$row['Reg_no']."</td><td>".$row['item']."</td><td>".$row['feedback'];
        echo "</td></tr><tr>";
    }
    echo "</table>";

    mysqli_close($connect);
?>
</body>
</html>