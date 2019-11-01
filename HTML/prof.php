<?php
session_start();
$x=$_SESSION['user'];


  $q=$_POST["fname"];
  $r=$_POST["gender"];
  $m=$_POST["lname"];	
 
	// Create connection
	$conn=mysqli_connect("localhost","root","","diabetes");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
				}
				
	//SQL Statement
	$sql = "UPDATE user set
			firstName='$q',
			lastName='$m',
			gender='$r'
	
	  
		WHERE email='$x'";

	if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Edit Profile Success');document.location.href='userProfile.php';</script>");
	$_SESSION['user']= $x;
	}
	else {
   	echo ("<script>alert('Edit Profile Failed. Try Again..');document.location.href='userProfile.php';</script>");
	}
	

// Close connection
mysqli_close($conn);



?>