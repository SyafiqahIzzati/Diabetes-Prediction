<?php
session_start();
if(!isset($_SESSION['user']))
echo ("<script>alert('Please log in!');document.location.href='login.php';</script>");

$a = $_SESSION['user'];
include 'db.php';


        $password = $_POST['pswdasal'];
        $newpassword = $_POST['baru1'];
        $confirmnewpassword = $_POST['baru2'];
        $result = mysql_query("SELECT password FROM user WHERE email='$a'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE user SET password='$newpassword' where 

email='$a'");
        if($sql)
        {
        echo ("<script>alert('Your Update Success');document.location.href='home.php';</script>");
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>