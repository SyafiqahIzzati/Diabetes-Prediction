<?php
  session_start();
  $x=$_SESSION['adminID'];
  
	    $i=$_POST["id"];
   $m=$_POST["title"];					  
  $t=$_POST["section"]; 
  $p=$_POST["description"];	


// Create connection
$conn=mysqli_connect("localhost","root","","diabetes");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//SQL Statement
$sql = "UPDATE info SET 
      title='$m',
	  section='$t',
	  infoDetail='$p',
	  date=NOW(),
	  adminID='$x'	  
		WHERE infoID='$i'";

if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Your Update Success');document.location.href='editInfo.php';</script>");
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);




?>