
<?php

/*

DELETE.PHP


*/



// connect to the database

include('connect-db.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_POST['name']))

{

// get id value

$id = $_POST['name'];



// delete the entry

$result = mysql_query("DELETE FROM info WHERE infoID='$id'")

or die(mysql_error());


 if($result)
  {
	 echo ("<script>alert('Your data have been deleted..');document.location.href='deleteinfo.php';</script>");
  }
  else
  {
      echo mysql_error();
	  echo ("<script>alert('Your data have been deleted..');document.location.href='deleteinfo.php';</script>");
  }
  }
  ?>