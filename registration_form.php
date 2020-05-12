<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" type="text/css" href="registyle.css">
<head>
<body>
	<div class="form">
	<img class="image" src="./images/logo.png" alt=""><br><br>
<form action="regis.php" method="POST">
<input class="input" type="text" name="name" placeholder="Name"><br><br>
<input class="input" type="text" name="reg_no" placeholder="Registration number"><br><br>
<input class="input"  type="text" name="email" placeholder="Email"><br><br>
<input class="input" type="password" name="password" placeholder="please enter your password"><br><br>
<input class="input"  type="password" name="c_password" placeholder="please conform your password"><br><br>
  <input class="input" style="border-radius:2px;background:red;color:white" type="submit"  name="submit" value="Submit">
</form>
<div>
</body>
</head>