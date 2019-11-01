<?php
session_start();



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
 
 
if(empty($r)){
	$w='NULL';
}else{
	$w="'".$r."'";
}

if(empty($s)){
	$z='NULL';
}else{
	$z="'".$z."'";
}
if(empty($v)){
	$y='NULL';
}else{
	$y="'".$y."'";
}
 
 
 
 
 
 
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
