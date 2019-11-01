
<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

include('connect-db.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry

$result = mysql_query("DELETE FROM questionnaire WHERE idquestionnaire='$id'")

or die(mysql_error());


 if($result)
  {
	 echo ("<script>alert('Your data have been deleted..');document.location.href='deleteQuestion.php';</script>");
  }
  else
  {
      echo mysql_error();
	  echo ("<script>alert('Your data have been deleted..');document.location.href='deleteQuestion.php';</script>");
  }
  }








?>