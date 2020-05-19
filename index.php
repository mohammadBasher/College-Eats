<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLEGE EATS</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/f0bf3b62b1.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="nav">
    <ul style="list-style: none;">
        <li id="logo"><img src="./images/logo.png" alt=""></li>
        <li><a href="feedback.php">FeedBack</a></li>
        <li><a href="login_check_for_order.php">Order Now</a></li>
      
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
      echo "<li><a href='log_out.php'>log out ".$Reg_no."</a></li>";
    }
    else 
      echo"<li><a href=login_form.php>Login</a></li>";
 ?>
    </ul>    
    </div>
    <div class="main">
        
    </div>
     <br><br><br>
    <div class="heading"><h2>Canteens at Our College</h2> </div>
            <br><br><br>
    <div class="product">
        <div class="bika">
          <h2>Bika Canteen</h2>
          <br><br><br>
          <span><a href="./bika.php">Visit</a></span>
        </div>
        <div class="chichi">
            <h2>Chichi Canteen</h2>
            <br><br><br>
          <span><a href="./chichi.php">Visit</a></span>
        </div>
        <div class="yamuna">
           <h2>Yamuna Canteen</h2>
           <br><br><br>
          <span><a href="./yamuna.php"> Visit</a></span>
        </div>
        <div class="raj">
            <h2>Raj Canteen</h2>
            <br><br><br>
          <span><a href="./raj.php">Visit</a></span>
        </div>
    </div>
  <div class="footer">
    <div class="connect">
      <div class="fb">
     <a href=""><i class="fab fa-facebook-f fa-2x"></i></a> 
    </div>
    <div class="insta">
     <a href=""><i class="fab fa-instagram fa-2x"></i></a> 
    </div>
    <div class="quora">
     <a href=""><i class="fab fa-quora fa-2x"></i></a> 
    </div>
  </div>
    <br><br>
    <p >&copy;2020 college eats</p>
    </div>
</body>
</html>