<?php

session_start();


  $n=$_POST["name"];					
  $o=$_POST["email"];
  $p=$_POST["feedback"];

  

 
// To add the file in the database
mysql_connect('localhost', 'root', '') or die("Unable to connect to database.");
mysql_select_db('diabetes') or die("Unable to select the DB.");
mysql_query("INSERT INTO respond SET respondID='',email='$o',name='$n',
feedback='$p',status='notRead',time=NOW()") or die("MySQL Query Error: " . mysql_error() . "<br><br>". "The SQL was: <br><br>");
mysql_close();
echo ("<script>alert('Your message has been sent. Thanks for your respond');document.location.href='home.php';</script>");
 ?>