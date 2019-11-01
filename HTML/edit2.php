<?php
  session_start();
  $x=$_SESSION['adminID'];
  
	    $i=$_POST["idquestionnaire"];
   $m=$_POST["question"];					  
  $t=$_POST["mark1"]; 
  $p=$_POST["answer1"];	
  $q=$_POST["answer2"];
  $u=$_POST["mark2"];
  $r=$_POST["answer3"];
  $w=$_POST["mark3"];
  $s=$_POST["answer4"];
   $z=$_POST["mark4"];
  $v=$_POST["answer5"];
$y=$_POST["mark5"];

// Create connection
$conn=mysqli_connect("localhost","root","","diabetes");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//SQL Statement
$sql = "UPDATE questionnaire SET 
 idquestionnaire='$i',
      question='$m',
	  answer1='$p',
	  answer2='$q',
	  answer3='$r',
	  answer4='$s',
	  answer5='$v',
	  mark1	='$t',
	  mark2='$u',
	  mark3='$w',
	  mark4='$z',
	  mark5='$y'
	  
		WHERE idquestionnaire='$i'";

if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Your Update Success');document.location.href='editQuestion.php';</script>");
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);




?>