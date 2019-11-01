<?php
session_start();
$x=$_SESSION['adminID'];


  $q=$_POST["name"];
  $r=$_POST["email"];
  $m=$_POST["tel"];		
	// Create connection
	$conn=mysqli_connect("localhost","root","","diabetes");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
				}
				
	//SQL Statement
	$sql = "UPDATE admin set
			adminName='$q',
			adminEmail='$r',
			noPhone='$m'
	
	  
		WHERE adminID='$x'";

	if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Edit Profile Success');document.location.href='updateProfile.php';</script>");
	$_SESSION['adminID']= $n;
	}
	else {
   	echo ("<script>alert('Edit Profile Failed because email has been used. Try Again..');document.location.href='updateProfile.php';</script>");
	}
	

// Close connection
mysqli_close($conn);



?>