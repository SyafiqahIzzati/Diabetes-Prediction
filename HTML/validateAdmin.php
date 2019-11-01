<?php
session_start();


//connect db
	$con=mysqli_connect("localhost","root","","diabetes");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$x=$_POST['adminID'];
$y=$_POST['password'];


$q="SELECT * FROM admin WHERE adminID='$x'"; 

// SQL statement
$result=mysqli_query($con,$q);
$ada=mysqli_num_rows($result);

//kalau ada dalam database
if($ada>0){
	$row = mysqli_fetch_array($result);
	$pass1 = $row['adminID'];
	$pass2 = $row['adminPassword'];
		
	if($x==$pass1){		
		if($pass2 == $y){
			$_SESSION['adminID']= $x;
			echo ("<script>alert('Login Success!');document.location.href='adminIndex.php';</script>");
		}
		else
		if ($y!=$pass2){
			echo ("<script>alert('Username & Password Incorrect. Try Again!');document.location.href='login.php';</script>");
		}
	}
	else{
			echo ("<script>alert('Username & Password Incorrect. Try Again!');document.location.href='login.php';</script>");
		}
}
else {
	echo ("<script>alert('Login Unsuccesful!');document.location.href='login.php';</script>");

}
?>