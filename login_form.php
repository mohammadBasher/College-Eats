<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="./registyle.css">
<head>
<body style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('./images/fruit.jpg');">
	<div class="form" style="background: brown;height:490px;">
			<img class="image" src="./images/logo.png" alt=""><br><br>
<form action="login.php" method="POST" autocomplete="off">
<input class="input" type="text" name="Reg_no" placeholder="Registration Number" required><br><br>
<input class="input" type="password" name="password" placeholder="please enter your password" required><br><br>
  <input  class="input" style="border-radius:2px;background:red;color:white" type="submit"  name="submit" value="Submit">  <br>
  <button class="input" style="background:blue"><a style="color:white;text-decoration:none" href="registration_form.php">Register Here</a></button>
</form>
</div>
</body>
</head>