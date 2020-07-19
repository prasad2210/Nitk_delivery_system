<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/product.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src = "./javascript/product.js"></script>
	<style>
			.hidden{display:none !important;}
		</style>
		<script>
				function getdata(){
					document.getElementById("o_uname").value = localStorage.getItem("username");
					document.getElementById("o_sname").value = localStorage.getItem("storename");
				}
		</script>
</head>
<body onload="getdata()">
 <div class="container">
        <div class="row table">
			<h1 class="heading">Add your product here</h1>
	
			<form action="" method="post">
			<input type="text" name="username" id="o_uname" class="hidden">
			<input type="text" name="storename" id="o_sname" class="hidden">
            <table id="t01">
				<tbody>
					<tr>
						<th>Product Name : </th>
						<td><input type="text" id="p_name" name="prod_name" size=16/></td>
					</tr>
					<tr>
						<th>Quantity : </th> 
						<td><input type="number" id="qty" name="quantity" pattern="[0-9]+" size=16/></td>
					</tr>
					<tr>
						<th>Expiry Date : </th>
						<td><input type="date" name="exp_date" id="e_date"/></td>
					</tr>  
					<tr>  
						<th>Price : </th>
						<td><input type="number" id="price" name="price" pattern="[0-9]+" size=16/></td>
					</tr>
				</tbody>
            </table>
			<div class="btns">
				<button type="submit" onclick="addrecord()" name="submit">Add Product</button>
				<button type="button" class="popup" onclick="storerecord()">Done <span class="popuptext" id="myPopup">Your shop added successfully</span></button>      
			</div>
			</form>
			
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
						$stmt = $conn->prepare("insert into product(username, store_name, prod_name, quantity, exp_date, price) values(?, ?, ?, ?, ?, ?)");
						$stmt->bind_param("ssssss", $username, $store_name, $prod_name, $quantity, $exp_date, $price);
						$execval = $stmt->execute();
						//echo $execval;
						//echo " . Product Added successfuly";
						//echo "<script>setTimeout(\"location.href = 'Html/product.html';\",2500);</script>";
						$stmt->close();
						$conn->close();
					}
				}
			?>
        </div>
		
		<div class="row datalist">
			<h1 class="heading">List of Data</h1>
			<table id="t02">
				<tr>
				  <th>Product Name</th>
				  <th>Quantity</th> 
				  <th>Expiry Date</th>
				  <th>Price</th>
				</tr>
			</table>
		</div>
    </div>
 
    
   
</body>
</html>
