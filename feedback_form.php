<!DOCTYPE html>
<html>
<head>
<title>Feedback form</title>
<link rel="stylesheet" type="text/css" href="./registyle.css">
<head>
<body style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('./images/fruit.jpg');">
	<div class="form" style="background: brown;height:490px;">
			<img class="image" src="./images/logo.png" alt=""><br><br>
<form action="record_feedback.php" method="POST" autocomplete="off">
<select name="canteen" class="input" value="select">
	<option>bika</option>
	<option>chichi</option>
	<option>raj</option>
    <option>yamuna</option>
</select><br><br>
<select name="item" class="input">
	<option>item1</option>
	<option>item2</option>
	<option>item3</option>
    <option>item4</option>
</select><br><br>
<textarea class="input" type="text" rows="5" cols="40"  name="feedback" placeholder="enter your feedback here" required></textarea><br><br>
  <input  class="input" style="border-radius:2px;background:red;color:white" type="submit"  name="submit" value="Submit">  <br>
  <button class="input" style="background:blue"><a style="color:white;text-decoration:none" href="registration_form.php">Register Here</a></button>
</form>
</div>
</body>
</head>