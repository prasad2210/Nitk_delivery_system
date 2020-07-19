<?php
	if(isset($_POST["submit"])){
		//ini_set('display_errors','1');
		$username = $_POST['username'];
		$store_name = $_POST['storename'];
		$discription = $_POST['discription'];
		

		// Database connection
		$conn = new mysqli('localhost','root','','login');
		if($conn->connect_error){
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
		} else {
			$stmt = $conn->prepare("insert into store(username, store_name, discription) values(?, ?, ?)");
			$stmt->bind_param("sss", $username, $store_name, $discription);
			$execval = $stmt->execute();
			echo $execval;
			echo " . Data Added successfull";
			echo "<script>setTimeout(\"location.href = './product.php';\",2500);</script>";
			$stmt->close();
			$conn->close();
		}
	};
?>