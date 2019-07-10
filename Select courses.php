<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<title> Select Units </title>
<link rel = "stylesheet" type = "text/css" href = "myStyle8.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<!-- Navigation script starts here -->
	<nav>
	<div class = "navigation">
	<a href = "http://localhost/MIS%20400/After%20Log%20Files/HomePage.php"> Homepage </a>
	<a href = "http://localhost/MIS%20400/After%20Log%20Files/Select%20Courses.php" class = "active"> Select Course </a>
	<a href = "http://localhost/MIS%20400/After%20Log%20Files/Enrollment%20history.php"> Enrollment History </a>
	<a href = "http://localhost/MIS%20400/Home_page.php"> LogOut </a>
	</div>
	</nav>
	<!-- Navigation script ends here -->
	<br>
	<br>
	<h1> <mark> Select Units </mark> </h1>
	<br> 
	<br>
	<div class = "Course_reg">
	<form name = "Course registration" method = "POST" action = "Process_course.php">
	<!-- Session -->
	<label> Session <label> <br> <br>
	<select name = "session" required>
		<option value = "BIL 111"> -- Select session -- </option>
		<option value = "2018"> 2018 </option>
		<option value = "2019"> 2019 </option>
		<option value = "2020"> 2020 </option>
		<option value = "2021"> 2021 </option>
		<option value = "2022"> 2022 </option>
	</select>
	<br>
	<br>
	<!-- Session -->
	<!-- Session -->
	<label> Semester <label> <br> <br>
	<select name = "semester" required>
		<option value = "BIL 111"> -- Select semester -- </option>
		<option value = "August"> August </option>
		<option value = "January"> January </option>
		<option value = "June"> June </option>
	</select>
	<br>
	<br>
	<!-- Session -->
	<!-- Session -->
	<label> Course </label> <br> <br>
	<select name = "course" required>
		<option value = "BIL 111"> -- Select Course -- </option>
		<option value = "BIL 111"> ACS 451 </option>
		<option value = "BIL 111"> ACS 454 </option>
		<option value = "BIL 111"> BIL 111 </option>
		<option value = "BIL 112"> BIL 112 </option>
		<option value = "HPE 113"> HPE 113 </option>
		<option value = "ENV 112"> ENV 112 </option>
		<option value = "BIO 111"> BIO 111 </option>
		<option value = "BUS 417"> BUS 417 </option>
		<option value = "BUS 313"> BUS 313 </option>
		<option value = "BUS 328"> BUS 328 </option>
		<option value = "MIS 211"> MIS 211 </option>
		<option value = "MIS 212"> MIS 212 </option>
		<option value = "MIS 212"> MIS 400 </option>
		<option value = "MIS 313 "> MIS 313 </option>
		<option value = "MIS 416"> MIS 416 </option>
	</select> <br> <br>
	<input type = "submit" name = "enroll" value = "Enroll">
	<br>
	<br>
	<!-- Session -->
	</form>
	</div>
</body>
</html>