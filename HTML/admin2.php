<?php
session_start();

  $n=$_POST["adminID"];	
  $q=$_POST["adminName"];
  $r=$_POST["adminEmail"];
  $m=$_POST["tel"];		
  $y=$_POST["password"];
  $o=$_POST["Cpassword"];
 
  

if($y == $o){

	// Create connection
	$conn=mysqli_connect("localhost","root","","diabetes");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
				}
				
				


	//SQL Statement
	$sql = "INSERT INTO admin(adminID,adminName,adminPassword,adminEmail,noPhone) 
	VALUES ('$n','$q','$y','$r','$m')";

	if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Registration Success');document.location.href='newAdmin.php';</script>");

	}
	else {
   	echo ("<script>alert('Registration Failed because there is error. Try Again..');document.location.href='newAdmin.php';</script>");
	}
	

// Close connection
mysqli_close($conn);
}

else{
	//header('Location: register.php?msg=Password Incorrect!!');
	echo ("<script>alert('Registration Failed. Try Again..');document.location.href='newAdmin.php';</script>");
}
?>