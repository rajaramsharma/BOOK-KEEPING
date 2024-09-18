<?php 
include('database.php'); 
// create a variable
$ID=$_POST['id'];
$Name=$_POST['name'];
$Address=$_POST['address'];
$Password=$_POST['password'];
$Email=$_POST['email'];
 echo "Database Connected";
//Execute the query 
mysqli_query($connect,"INSERT INTO register_login(id,name,address,password,email)
 VALUES('$ID','$Name','$Address','$Password','$Email')");//register_login is the table to be created in database

?>