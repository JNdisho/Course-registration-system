<?php
session_start();
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "mis_400";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['LogIn'])){
$uname = ($_POST['username']);
$password = ($_POST['password']);
$query = "select * from registration WHERE User_name = '$uname' AND Password = '$password'";

$query_run = mysqli_query($conn, $query);
if(mysqli_num_rows($query_run)>0){
	//valid
	echo '<script type = "text/javascript"> alert("You have logged in successfully.") </script>';
	header("refresh: 0; url = http://localhost/MIS%20400/After%20Log%20Files/HomePage.php");
}
else{
	echo '<script type = "text/javascript"> alert("You have not logged in successfully. Please try again.") </script>';
	header("refresh: 0; url = http://localhost/MIS%20400/Log_In.php");
	return false;
}
}
?>