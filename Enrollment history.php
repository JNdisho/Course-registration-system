<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<title> Enroll </title>
<link rel = "stylesheet" type = "text/css" href = "myStyle9.css">
<meta name = "viewport" content = "width = device-width initial-scale = 1">
</head>
<body>
	<!-- Navigation script starts here -->
	<nav>
	<div class = "navigation">
	<a href = "http://localhost/MIS%20400/After%20Log%20Files/HomePage.php"> Homepage </a>
	<a href = "http://localhost/MIS%20400/After%20Log%20Files/Select%20Courses.php"> Select Course </a>
	<a href = "http://localhost/MIS%20400/After%20Log%20Files/Enrollment%20history.php" class = "active"> Enrollment History </a>
	<a href = "http://localhost/MIS%20400/Home_page.php"> LogOut </a>
	</div>
	</nav>
	<!-- Navigation script ends here -->
	<br>
	<br>
	<h1> <mark> Enrollment history </mark> </h1>
	<br>
	<br>
	<!-- Registration form begins here -->
		<!-- <form name = "Course registration" method = "POST" action = "Process_course.php"> -->
	<form name = "Enrollment" method = "POST" action = "EnrollH.php">
	<table border = "1"> 
		<tr>
			<th> Session </th>
			<th> Semester </th>
			<th> Course </th>
		<tr>
		<?php
			$dbServername = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbName = "mis_400";
			
			$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
			$sql = "SELECT * FROM `enrollment`";
			$records = mysqli_query($conn, $sql);
			while($unit = mysqli_fetch_array($records)){
				echo "<tr>";
				echo "<td>" .$unit['Session']. "</td>";
				echo "<td>" .$unit['Semester']. "</td>";
				echo "<td>" .$unit['Course']. "</td>";
				//echo "<td> <a href = EnrollH.php?del = ".$unit['Course']."> Delete </a> </td>";
				//echo "<td>". "<input type = 'submit' name = 'delete' value = 'delete'>".  "</td>";
				echo "</tr>";
			}
		?>
	</table>
	</form>
	<!-- Registration form ends here -->
	
</body>
</html>