<!DOCTYPE html>
<html>
<head>
<title> Contact Us </title>
<link rel = "stylesheet" type = "text/css" href = "myStyle4.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<!-- Navigation script starts here -->
	<nav>
	<div class = "navigation">
	<a href = "http://localhost/MIS%20400/Home_page.php"> Home </a>
	<a href = "http://localhost/MIS%20400/About_Us.php"> About Us </a>
	<a href = "http://localhost/MIS%20400/Register.php"> Register </a>
	<a href = "http://localhost/MIS%20400/Contact_Us.php" class = "active"> Contact Us </a>
	<a href = "http://localhost/MIS%20400/Log_In.php"> Log In </a>
	</div>
	</nav>
	<!-- Navigation script ends here -->
	<br>
	<br>
	<h1> <mark> Contact Us </mark> </h1>
	<br>
	<br>
	<!-- Contact form script starts here -->
	<div class = "contact-form">
	<form name = "Email_Form" method = "POST" action = "Email_Form.php">
	<input type = "text" name = "full_name" placeholder = "Full Name" required> <br>
	<input type = "email" name = "email" placeholder = "Email" required> <br>
	<input type = "text" name = "subject" placeholder = "Subject" required> 
	<textarea rows = "10" cols = "30" placeholder = "Your message" required> </textarea>
	<input type = "submit" name = "submit" value = "Submit">
	</form>
	</div>
	<!-- Contact form script ends here -->
</body>
</html>