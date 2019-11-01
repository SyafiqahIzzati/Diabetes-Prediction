<?php

session_start();
$a = $_SESSION['adminID'];

  $n=$_POST["title"];					
  $o=$_POST["section"];					
  $r=$_POST["description"];
  
  
// This is the file we're going to add it in the database
$MY_FILE = $_FILES['file']['tmp_name'];
 
// To open the file and store its contents in $file_contents
$file = fopen($MY_FILE, 'r');
$file_contents = fread($file, filesize($MY_FILE));
fclose($file);
/* We need to escape some stcharacters that might appear in  file_contents,so do that now, before we begin the query.*/
 
$file_contents = addslashes($file_contents);
 
// To add the file in the database
mysql_connect('localhost', 'root', '') or die("Unable to connect to database.");
mysql_select_db('diabetes') or die("Unable to select the DB.");
mysql_query("INSERT INTO info SET infoID='',title='$n',infoDetail='$r',
pic='$file_contents',adminID='$a',date=NOW(),section='$o'") or die("MySQL Query Error: " . mysql_error() . "<br><br>". "The SQL was: $SQL<br><br>");
mysql_close();
echo ("<script>alert('Add Information Successful');document.location.href='adminIndex.php';</script>");
 ?>