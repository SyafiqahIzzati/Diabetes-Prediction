<?php
session_start();

  $n=$_POST["Fname"];	
  $q=$_POST["Lname"];
  $r=$_POST["email"];
  $m=$_POST["gender"];		
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
	$sql = "INSERT INTO user(email,password,firstName,lastName,gender) 
	VALUES ('$r','$y','$n','$q','$m')";

	if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Registration Success');document.location.href='home.php';</script>");
	$_SESSION['user']= $r;
	}
	else {
   	echo ("<script>alert('Registration Failed because email has been used. Try Again..');document.location.href='register.php';</script>");
	}
	

// Close connection
mysqli_close($conn);
}

else{
	//header('Location: register.php?msg=Password Incorrect!!');
	echo ("<script>alert('Registration Failed. Try Again..');document.location.href='register.php';</script>");
}
?>