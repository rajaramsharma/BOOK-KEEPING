<?php
$connect = mysqli_connect('localhost', 'root', '', 'register');

if (mysqli_connect_error()) {
   echo 'Failed to connect: ' . mysqli_connect_error();
} else {
   header("Location: login.php");
}
?>
