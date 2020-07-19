<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/custstore.css">
	<script>
		//function getstorename(){
			//var storename = document.getElementsByClassName("card").value;
			//alert(storename);
		//}
		function addcart(){
			alert('Product Added to cart');
		}
	</script>
</head>
<body>
	<?php
		// Create connection
		$conn = new mysqli('localhost','root','','login');

		//Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	?>
		  <div class="row">
			<div class="left_row">
			<h2>Stores List</h2>
		<?php
		 $sql = "SELECT store_name FROM store ";
		$storename = $conn->query($sql);
		
		if ($storename->num_rows > 0) {
		// output data of each row			
		 while($row = $storename->fetch_assoc()) { ?>
			  <div class="card" ><?php echo $row["store_name"];?></div>
		 <?php }
		 } else {
		  echo "0 results";
		}?>
		</div>
		 
		 <div class="content">
			<h2>Product List</h2>
		<?php
		 $sql = "SELECT * FROM product WHERE store_name='Mayuri Footware' ";
		$storename = $conn->query($sql);
		
		if ($storename->num_rows > 0) {
		// output data of each row			
		 while($row = $storename->fetch_assoc()) { ?>
			  <div class="card1" onclick="getstorename();">
			  <?php echo $row["prod_name"];?>
			  <button class="addcart" onclick="addcart();">Add to Cart</button>
			  </div>
		 <?php }
		 } else {
		  echo "0 results";
		}?>
		</div>
		  </div>
		  
		<?php $conn->close();
	?>


</body>
</html>
