<?php
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "mis_400";
//connect with mysql_affected_rows
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	
//select database
	mysqli_select_db($conn, $dbName);
	
//select query
	//$sql = "DELETE FROM `enrollment` WHERE Course = '$_GET[del]'";
	//DELETE FROM `enrollment` where Course = 'BIL 112';
	
//execute the query
if(isset($_POST['del'])){
	$delRecord = ($_POST['del']);
	$Sql_del = "DELETE FROM `enrollment` where Course = '$_POST[del]'";
}

/*
	if(isset($_POST['delete'])){
	$deleteButton = ($_POST['Course']);
	$delQuery = "DELETE FROM `enrollment` WHERE Course = ''";
	if(mysqli_query($conn, $delQuery)){
			echo '<script type = "text/javascript"> alert("You have succeded in deleting the selected course") </script>';
			header("refresh: 1; url = http://localhost/MIS%20400/After%20Log%20Files/Enrollment%20history.php");
	}
		else{
			echo '<script type = "text/javascript"> alert("You have not succeded in deleting the selected course") </script>';
			header("refresh: 0; url = http://localhost/MIS%20400/After%20Log%20Files/Select%20Courses.php");
	}
	}*/
?>