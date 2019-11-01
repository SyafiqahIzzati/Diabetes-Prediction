<?php
session_start();
if(!isset($_SESSION['adminID']))
echo ("<script>alert('Please log in!');document.location.href='login.php';</script>");

$a = $_SESSION['adminID'];
include 'db.php';


        $password = $_POST['pswdasal'];
        $newpassword = $_POST['baru1'];
        $confirmnewpassword = $_POST['baru2'];
        $result = mysql_query("SELECT adminPassword FROM admin WHERE adminID='$a'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE admin SET AdminPassword='$newpassword' where 

 adminID='$a'");
        if($sql)
        {
        echo ("<script>alert('Your Update Success');document.location.href='adminIndex.php';</script>");
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>