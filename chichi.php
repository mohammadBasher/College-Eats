<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHICHI</title>
    <link rel="stylesheet" href="./chichi.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="menu_style.css">
</head></body>
</html>
<body>
    <div class="nav">
        <ul style="list-style: none;">
            <li id="logo"><img src="./images/logo.png" alt=""></li>
            <li><a href="registration_form.php">Register</a></li>
            <li><a href="login_form.php">Login</a></li>
            <li><a href="./index.html">Home</a></li>
        </ul>    
        </div>
        <div class="main">
            <div class="info">
                <br><br><br><br><br>
                <h2>CHICHI CANTEEN</h2>
                <br>
                <b>Location : Near the robotics club MNNIT  </b>
                <br><br>
                <b>Timing   : Open from 11 am to 10 pm </b>
                <br><br>

            </div>
                <div class="menu">
  <?php
$server_NAME="localhost";
$admin_NAME="admin";
$password="localhost";
$database="first_DB";
$connect=mysqli_connect($server_NAME,$admin_NAME,$password,$database);
if(!$connect){
    die('connection failed:'.mysql_error());
    }
    $feedback="SELECT * FROM menu_table 
    WHERE canteen='chichi'";
    $result=mysqli_query($connect,$feedback);
    echo "<table class='table'><thead><th>S.No</th><th>Item</th><th>Price</th></thead><tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<td>".$row['S.No']."</td><td>".$row['Item']."</td><td>".$row['Price'];
        echo "</td></tr><tr>";
    }
    echo "</table>";

    mysqli_close($connect);
?>  
                   
                </div>
                 <div class="give-feed">
                    <br><br><br>
                    <span><a href="feedback.php">Give Feedback</a></span><br><br><br>
                    
                </div>                 
                <br>
                <div class="disp-feed">
                 <span><a href="c_d_feedback.php">See Feedbacks </a></span><br><br>
                </div>
        </div>
</body>
 </html>
