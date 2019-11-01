<?php

$con = mysqli_connect('localhost', 'root', '', 'diabetes');
if(isset($_GET['id']))
{
    $id = mysqli_real_escape_string($con,$_GET['id']);
    $query = mysqli_query($con,"SELECT * FROM files WHERE id=$id");
    while($row = mysqli_fetch_assoc($query))
    {
        $imageData = $row['file_data'];
    }
    header("content-type:image/jpeg");
    echo $imageData;
}
else
{
    echo "Error!";
}

?>