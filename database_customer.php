<?php
$connect = mysqli_connect('localhost', 'root', '', 'addcustomer');

if (mysqli_connect_error()) {
   echo 'Failed to connect: ' . mysqli_connect_error();
} else {
   header("Location: home.php");
}
?>