<!DOCTYPE html>
<html>
<head>
<title>Feedback form</title>
<link rel="stylesheet" type="text/css" href="./registyle.css">
<head>
<body style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('./images/fruit.jpg');">
	<div class="form" style="background: brown;height:490px;">
			<img class="image" src="./images/logo.png" alt=""><br><br>
<form action="login.php" method="POST" autocomplete="off">
<input class="input" type="text" name="name" placeholder="Name" required><br><br>
<input class="input" type="password" name="password" placeholder="please enter your password" required><br><br>
<input class="input" type="text" name="canteen" placeholder="Canteen" required><br><br>
<input class="input" type="text" name="item" placeholder="Item" required><br><br>
<textarea class="input" type="text" rows="5" cols="40" name="feedback" placeholder="enter your feedback here" required></textarea><br><br>
  <input  class="input" style="border-radius:2px;background:red;color:white" type="submit"  name="submit" value="Submit">  <br>
  <button class="input" style="background:blue"><a style="color:white;text-decoration:none" href="registration_form.php">Register Here</a></button>
</form>
</div>
</body>
</head>