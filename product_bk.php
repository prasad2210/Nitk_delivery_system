<?php
if(isset($_POST["submit"])){
	//ini_set('display_errors','1');
	$username = $_POST['username'];
	$store_name = $_POST['storename'];
	$prod_name = $_POST['prod_name'];
	$quantity = $_POST['quantity'];
	$exp_date = $_POST['exp_date'];
	$price = $_POST['price'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','login');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into store(username, store_name, prod_name, quantity, exp_date, price) values(?, ?, ?)");
		$stmt->bind_param("ssssss", $username, $store_name, $prod_name, $quantity, $exp_date, $price);
		$execval = $stmt->execute();
		echo $execval;
		echo " . Product Added successfuly";
		//echo "<script>setTimeout(\"location.href = 'Html/product.html';\",2500);</script>";
		$stmt->close();
		$conn->close();
	}
}
?>