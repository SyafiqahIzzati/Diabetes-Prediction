<?php

session_start();
$a = $_SESSION['user'];

  $n=$_POST["mark"];					
  $o=$_POST["risk"];					
 $p=$_POST["bmi"];					
  $q=$_POST["probability"]; 				
  $r=$_POST["recommendation"];
  

 
// To add the file in the database
mysql_connect('localhost', 'root', '') or die("Unable to connect to database.");
mysql_select_db('diabetes') or die("Unable to select the DB.");
mysql_query("INSERT INTO result SET resultno='',mark='$n',risk='$o',bmi='$p',recommendation='$r',probability='$q',
email='$a',date=NOW()") or die("MySQL Query Error: " . mysql_error() . "<br><br>". "The SQL was: <br><br>");
mysql_close();
echo ("<script>alert('Your result has been saved');document.location.href='home.php';</script>");
 ?>