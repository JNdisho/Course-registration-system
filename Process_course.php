<?php
session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "mis_400";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$conn){
	echo 'Not connected to the server';
}
if(!mysqli_select_db($conn, $dbName)){
	echo 'Database not selected';
}

if(isset($_POST['enroll'])){
	$session = ($_POST['session']);
	$semester = ($_POST['semester']);
	$course = ($_POST['course']);
	
	$sql = "INSERT INTO enrollment VALUES('$session', '$semester', '$course')";
	
	if(!mysqli_query($conn, $sql)){
	echo '<script type = "text/javascript"> alert("You have not successfully enrolled for the selected course. Please try again.") </script>';
	header("Location: http://localhost/MIS%20400/After%20Log%20Files/Select%20Courses.php");
	return false;
	
}
else{
	echo '<script type = "text/javascript"> alert("You have successfully enrolled for the selected course.") </script>';
	header("refresh: 0; url = http://localhost/MIS%20400/After%20Log%20Files/Select%20Courses.php");
	
	/*header("refresh: 2; url = http://localhost/MIS%20400/Log_In.php;");*/
}
}
?>
