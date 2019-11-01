<?php

session_start();

if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  }
	
			

  

 
// To add the file in the database
mysql_connect('localhost', 'root', '') or die("Unable to connect to database.");
mysql_select_db('diabetes') or die("Unable to select the DB.");
mysql_query("UPDATE respond SET status = 'already' WHERE respondID= $id") or die("MySQL Query Error: " . mysql_error() . "<br><br>". "The SQL was: <br><br>");

header("Location: newMessage.php");   
	
 ?>