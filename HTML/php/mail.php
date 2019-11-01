<?php
session_start();



  $m=$_POST["name"];					  
  $t=$_POST["email"]; 
  $p=$_POST["message"];	

 

 
 
 
 
 
// Create connection
$conn=mysqli_connect("localhost","root","","diabetes");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//SQL Statement
$sql = "INSERT INTO respond(respondID,email,feedback, status,name) 
	VALUES ('','$t','$p','','$m')";

if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Your Respond Has been Successfully Sent');");
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);



	//header('Location: home.php?msg=Password Incorrect!!');
	echo ("<script>alert('Your Respond Has Been Fail To Send . Try Again..');");

?>
