<?php
	if(isset($_POST["submit"])){


    // Create connection
    $conn = new mysqli('localhost','root','','login');

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $myUsername = mysqli_real_escape_string($conn, $_POST['username']); 
    $myPassword = mysqli_real_escape_string($conn, $_POST['password']);   


	 $sql = "SELECT * FROM users WHERE username ='$myUsername' AND password='$myPassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
	$count = mysqli_num_rows($result);
    if ($count == 1) {
        echo "login successfull"; 
		echo "<script>setTimeout(\"location.href = 'Html/ss.html';\",2500);</script>";		
    } 
    else
    {      
        echo "login unsuccessfull, please try again";    
		echo "<script>setTimeout(\"location.href = 'Html/index.html';\",2500);</script>";	
    }
	
    $conn->close();
}
else{
	echo "jhfydydj";
}


?>
