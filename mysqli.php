<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$conn = mysqli_connect($host, $user, $pass);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';  

$sql = 'CREATE DATABASE Test';

if(mysqli_query($conn,$sql)){
    echo' Databease Test Created Successfully.';
}else {
    'Sorry Database Creation Failed.'.mysqli_error;
}

mysqli_close($conn);  
?>  