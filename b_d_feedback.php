<!DOCTYPE html>
<html>
<head>
<title>Feedback form</title>
<link rel="stylesheet" type="text/css" href="table_style.css">
</head>
<body>
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
    echo "<table class='table'><thead><th>User Name</th><th>Item</th><th>Feedback</th></thead><tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<td>".$row['name']."</td><td>".$row['item']."</td><td>".$row['feedback'];
        echo "</td></tr><tr>";
    }
    echo "</table>";

    mysqli_close($connect);
?>
</body>
</html>