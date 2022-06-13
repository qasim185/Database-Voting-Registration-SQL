<?php
$conn=mysqli_connect('localhost','root','','vote');

$User=$_POST['name'];
$address=$_POST['address'];
$id=$_POST['Id'];
$votes=$_POST['votes'];
$photo=$_FILES['photo']['name'];
$tempname = $_FILES['photo']['tmp_name'];   
     
        move_uploaded_file($tempname,"images/$photo"); 
 
$query="INSERT INTO regform(`name`, `address`, `cnic`,`totalvotes`, `image`) VALUES ('$User','$address','$id','$votes','$photo')";

$res=mysqli_query($conn,$query);
if ($res)
{
    echo "Inserted";
    
}
else{
    echo "Values not inserted";


}



?>