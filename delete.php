<?php

$conn=mysqli_connect('localhost','root','','vote');
$name=$_REQUEST['name'];
$query = "DELETE FROM regform WHERE name='$name'";
$res = mysqli_query($conn,$query);
if($res)
{
    echo "DELETED";
  
} 


?>