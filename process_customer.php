<?php 
include('database_customer.php'); 
// create a variable
$Name=$_POST['name'];
$Address=$_POST['address'];
$Phone=$_POST['phone'];
$Credit=$_POST['credit'];
$bill=$_POST['bill'];
 echo "Database Connected";
//Execute the query 
mysqli_query($connect,"INSERT INTO Customer_details(name,address,phone,credit,bill)
 VALUES('$Name','$Address','$Phone','$Credit','$bill')");//register_login is the table to be created in database

?>