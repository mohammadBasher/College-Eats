<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>
<link rel="stylesheet" type="text/css" href="registyle.css">
<head>
<body>
	<div class="form">
	<img class="image" src="./images/logo.png" alt=""><br><br>
<form action="regis.php" method="POST" autocomplete="off">
<input class="input" type="text" name="name" placeholder="Name" required><br><br>
<input class="input" type="text" name="reg_no" placeholder="Registration number" required><br><br>
<input class="input"  type="text" name="email" placeholder="Email" required><br><br>
<input class="input" type="password" name="password" placeholder="please enter your password" required><br><br>
<input class="input"  type="password" name="c_password" placeholder="please conform your password" required><br><br>
  <input class="input" style="border-radius:2px;background:red;color:white" type="submit"  name="submit" value="Submit">
</form>
<div>
</body>
</head>