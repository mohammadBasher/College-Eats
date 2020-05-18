<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" type="text/css" href="./registyle.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<head >
<body style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('./images/fruit.jpg');">
	
<div class="form" style="background: rgb(58,180,164);
background: linear-gradient(90deg, rgba(58,180,164,1) 0%, rgba(238,215,215,1) 55%, rgba(208,252,69,1) 100%); border-radius: 5px;">
	
<img class="image" src="./images/logo.png" alt=""><br><br>

<form action="regis.php" method="POST" autocomplete="off">

<input class="input" type="text" name="name" placeholder="Name" required><br><br>

<input class="input" type="text" name="reg_no" placeholder="Registration number" required><br><br>

<input class="input"  type="text" name="email" placeholder="Email" required><br><br>

<input class="input" type="password" name="password" placeholder="please enter your password" required><br><br>

<input class="input"  type="password" name="c_password" placeholder="please conform your password" required><br><br>

<!-- <span class="input" style="border-radius:2px;background:red;color:white; border-radius: 30px;" type="submit"  name="submit" value="Submit" >submit</span> -->

<input class="input" style=" border:none; background:red;color:white; border-radius: 30px;" type="submit"  name="submit" value="Submit">
</form>
<div>
</body>
</head>