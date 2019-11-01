<?php

$con = mysqli_connect('localhost', 'root', '', 'diabetes');
if(isset($_GET['title']))
{
    $id = mysqli_real_escape_string($con,$_GET['title']);
    $query = mysqli_query($con,"SELECT * FROM info WHERE infoID='$id'");
    while($row = mysqli_fetch_assoc($query))
    {
        $p = $row['pic'];
    }
    header("content-type:image/jpeg");
    echo $p;
}
else
{
    echo "Error!";
}

?>