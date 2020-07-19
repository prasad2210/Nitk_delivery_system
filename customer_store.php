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
	$temp_var=0;
		// Create connection
		$conn = new mysqli('localhost','root','','login');

		//Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	?>
		  <div class="row" id="left">
			<div class="left_row">
			<h2>Stores List</h2>
		<?php
		 $sql = "SELECT store_name FROM store ";
		$storename = $conn->query($sql);
		$s_arr = array();
		
	
		if ($storename->num_rows > 0) { $s_count = 0;
		// output data of each row			
		 while($row = $storename->fetch_assoc()) { ?>
			  <div class="card"><?php echo $s_count;?>.  <?php echo $row["store_name"];?></div><?php $s_arr["$s_count"] = $row["store_name"];?>
		 <?php $s_count++;}
		 } else {
		  echo "0 results";
		}?>
		
		</div>
         
		<form action = "#" method="get">
		Select Store Name:
		<input type="text" name = "val1" id="val1"></input>
		<br></br>
		
		<input type="submit" value="Ok"></input>
		</form>
		 
		<?php
		$X = 1;
		
			$temp_var= htmlentities($_GET['val1']);
		
		?>
		
		 <div class="content">
			
			<h2>Product List</h2>
		<?php
		
		 $sql = "SELECT * FROM product WHERE store_name='$s_arr[$temp_var]' ";
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
