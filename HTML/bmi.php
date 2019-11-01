<?php
session_start();



  $w=$_POST["weight"];					  
  $h=$_POST["height"]; 
  $hm=$h/100;
  
  $bmi=$w/($hm*$hm);

 
 
 
 
 
 
// Create connection
$conn=mysqli_connect("localhost","root","","diabetes");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//SQL Statement
$sql = "INSERT INTO questionnaire(idquestionnaire,question,answer1, answer2, answer3, answer4, answer5, mark1, mark2, mark3, mark4, mark5) 
	VALUES ('','$m','$p','$q','$r','$s','$v','$t','$u',$w,$z,$y)";

if (mysqli_query($conn, $sql)) {
	echo ("<script>alert('Add Question Successful');document.location.href='viewQuestion.php';</script>");
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);



	//header('Location: home.php?msg=Password Incorrect!!');
	echo ("<script>alert('Add Question Failed. Try Again..');document.location.href='addQuestion.php';</script>");

?>