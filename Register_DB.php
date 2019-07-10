<?php
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

if(isset($_POST['submit'])){
	$fname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$mname = mysqli_real_escape_string($conn, $_POST['middlename']);
	$lname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$uname = mysqli_real_escape_string($conn, $_POST['username']);
	$passport_ID_number = mysqli_real_escape_string($conn, $_POST['passport_or_ID']);
	$dob = mysqli_real_escape_string($conn, $_POST['date']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$cnumber = mysqli_real_escape_string($conn, $_POST['contact_number']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
	/* This script prevents the user from entering the same password */
	if($password != $cpassword){
		echo '<script type = "text/javascript"> alert("The passwords do not match") </script>';
		header("refresh: 0; url = http://localhost/MIS%20400/Register.php");
		return false;
	}
	$sql = "INSERT INTO registration VALUES('$fname', '$mname', '$lname', '$uname', '$passport_ID_number', '$dob', '$gender',  '$cnumber ', '$email', '$password', '$cpassword')"; 

if(!mysqli_query($conn, $sql)){
	echo '<script type = "text/javascript"> alert("You have not successfully registered. Please try again.") </script>';
	header("Location: http://localhost/MIS%20400/Register.php");
	return false;
	
}
else{
	echo '<script type = "text/javascript"> alert("You have successfully registered. Please LogIn to register for courses.") </script>';
	header("refresh: 0; url = http://localhost/MIS%20400/Log_In.php");
	/*header("refresh: 2; url = http://localhost/MIS%20400/Log_In.php;");*/
}
}
?>