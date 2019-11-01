
<?php

/*

DELETE.PHP


*/



// connect to the database

include('connect-db.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry

$result = mysql_query("DELETE FROM respond WHERE respondID='$id'")

or die(mysql_error());


 if($result)
  {
	 echo ("<script>alert('Your data have been deleted..');document.location.href='inbox.php';</script>");
  }
  else
  {
      echo mysql_error();
	  echo ("<script>alert('Your data have been deleted..');document.location.href='inbox.php';</script>");
  }
  }
  ?>