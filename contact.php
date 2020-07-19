<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$regid = $_POST['regid'];
	$subject = $_POST['subject'];
	// Database connection
	$conn = new mysqli('localhost','root','','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(fname, lname, regid, subject) 
		values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $fname, $lname, $regid, $subject);
		$stmt->execute();
		echo " . Thanks For Your Valuable Suggestion";
		$stmt->close();
		$conn->close();
	}
?>


