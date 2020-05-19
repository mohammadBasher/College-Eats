<!DOCTYPE html>
<html>
<head>
<title>Feedback form</title>
<link rel="stylesheet" type="text/css" href="./registyle.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<head>
<body style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('./images/fruit.jpg'); font-family: 'Montserrat', sans-serif;">


	<div class="form" style=" background: rgb(58,180,164);
  background: linear-gradient(90deg, rgba(58,180,164,1) 0%, rgba(238,215,215,1) 55%, rgba(208,252,69,1) 100%);  border-radius: 5px; min-height: 80vh;" >
			<img class="image" src="./images/logo.png" alt=""><br>
    <h3 style="text-align:center; font-family: 'Montserrat'" >Feedback Form</h3>

<form action="record_feedback.php" method="POST" autocomplete="off">
<select name="canteen" class="input" value="select" style="font-family: 'Montserrat', sans-serif;">
	<option>bika</option>
	<option>chichi</option>
	<option>raj</option>
    <option>yamuna</option>
</select><br><br>


<select name="item" class="input" style="font-family: 'Montserrat', sans-serif;">
	<<option value="samosa">samosa</option>
  <option value="aloo-paratha">Aloo paratha</option>
  <option value="cold-drink">cold drink</option>
  <option value="maggi">maggi</option>
  <option value="chai">chai</option>
  <option value="sandwich">sandwich</option>
  <option value="coffie">coffie</option>
</select><br><br>


<textarea class="input" type="text" rows="5" cols="40"  name="feedback" placeholder="enter your feedback here" required></textarea><br><br>


  <input  class="input" style="border:none; border-radius:30px;background:#a043f7;color:white" type="submit"  name="submit" value="Submit">  <br>
  <br>
  <button class="input" style="border:none; border-radius:30px; background:#ed8061"><a style="color:white;text-decoration:none" href="registration_form.php">Register Here</a></button>
</form>
</body>
</head>