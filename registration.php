<?php
	//ini_set('display_errors','1');
	$firstName = $_POST['username'];
	$lastName =$_POST['lastName'];
	$category = $_POST['category'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$username = $_POST['username'];

	// Database connection
	$conn = new mysqli('localhost','root','','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(firstName, lastName, category, email, password, username) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $firstName, $lastName, $category, $email, $password, $username);
		$execval = $stmt->execute();
		echo $execval;
		echo " . Registration successfull";
		echo "<script>setTimeout(\"location.href = 'Html/index.html';\",2500);</script>";
		$stmt->close();
		$conn->close();
	}
?>