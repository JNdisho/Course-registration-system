<!DOCTYPE html>
<html>
<head>
<title> Register </title>
<link rel = "stylesheet" type = "text/css" href = "myStyle3.css">
<meta name = "viewport" content = "width = device-width initial-scale = 1">
</head>
<body>
	<!-- Navigation script starts here -->
	<nav>
	<div class = "navigation">
	<a href = "http://localhost/MIS%20400/Home_page.php"> Home </a>
	<a href = "http://localhost/MIS%20400/About_Us.php"> About Us </a>
	<a href = "http://localhost/MIS%20400/Register.php" class = "active"> Register </a>
	<a href = "http://localhost/MIS%20400/Contact_Us.php"> Contact Us </a>
	<a href = "http://localhost/MIS%20400/Log_In.php"> Log In </a>
	</div>
	</nav>
	<!-- Navigation script ends here -->
	<br>
	<br>
	<h1> <mark> Register </mark> </h1>
	<br>
	<br>
	<!-- Registration form begins here -->
	<div class = "form">
	<img src = "img_avatar.png" class = "profile-picture" width = "200" height = "200">
	<div class = "Reg">
	<form name = "Register" method = "POST" action = "Database Files/Register_DB.php">
	<input type = "text" name = "firstname" Placeholder = "Firstname" required> <br>
	<input type = "text" name = "middlename" Placeholder = "Middlename" required> <br>
	<input type = "text" name = "lastname" Placeholder = "Lastname" required> <br>
	<input type = "text" name = "username" Placeholder = "Username"required> <br>
	<input type = "text" name = "passport_or_ID" Placeholder = "ID or passport number" required> <br>
	<input type = "date" name = "date" Placeholder = "Date" required> <br>
	<select name = "gender" required>
		<option value = "Male"> Male </option>
		<option value = "Female"> Female </option>
	</select> <br>
	<input type = "text" name = "contact_number" Placeholder = "Contact Number" max = "20" required> <br>
	<input type = "email" name = "email" Placeholder = "Email" required> <br>
	<input type = "password" name = "password" placeholder = "Password" required> <br>
	<input type = "password" name = "cpassword" placeholder = "Confirm Password" required> <br>
	<input type = "submit" name = "submit" value = "Submit">
	</form>
	</div>
	</div>
	<!-- Registration form ends here -->
</body>
</html>