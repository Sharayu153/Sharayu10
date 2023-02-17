<?php
 $servername="localhost";
 $username="root";
 $password="";
 $databasename="interior_db";

 $conn=mysqli_connect($servername,$username,$password,$databasename);
// now check the connection
 if(!$conn)
 {
 	die("Connection Failed:" . mysqli_connect_error());
 }

 if(isset($_POST['save']))
 {	
      $name = $_POST['name'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $requirement = $_POST['requirement'];
	 $sql_query = "INSERT INTO `design` (`name`, `mobile`, `email`,`address`, `requirement`) VALUES ('$name', '$mobile','$email', '$address', '$requirement');";

	 if (mysqli_query($conn, $sql_query)) 
 	 {
     		echo "Submited successfully !";
 } 
 	 else
      {
 		echo "Error " . $sql_query . mysqli_error($conn);
 	 }
 	 mysqli_close($conn);
  
 }

?>
