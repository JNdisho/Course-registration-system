<!DOCTYPE html>
<html>
<head>
<title> Log In </title>
<link rel = "stylesheet" type = "text/css" href = "myStyle5.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<!-- Navigation script starts here -->
	<nav>
	<div class = "navigation">
	<a href = "http://localhost/MIS%20400/Home_page.php"> Home </a>
	<a href = "http://localhost/MIS%20400/About_Us.php"> About Us </a>
	<a href = "http://localhost/MIS%20400/Register.php"> Register </a>
	<a href = "http://localhost/MIS%20400/Contact_Us.php"> Contact Us </a>
	<a href = "http://localhost/MIS%20400/Log_In.php" class = "active"> Log In </a>
	</div>
	</nav>
	<!-- Navigation script ends here -->
	<br>
	<br>
	<h1> <mark> Log In </mark> </h1>
	<br>
	<br>
	<!-- Log In form script starts here -->
	<div class = "Log_In_Form">
	<form name = "Log_In" method = "POST" action = "Database Files/LogIn.php">
	<input type = "text" name = "username" Placeholder = "Username" required> <br>
	<input type = "password" name = "password" placeholder = "Password" required> <br>
	<input type = "submit" name = "LogIn" value = "LogIn">
	</form>
	</div>
	<!-- Log In script ends here -->
</body>
</html>