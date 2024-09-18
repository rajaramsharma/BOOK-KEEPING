<?php 
include('database.php'); 
// create a variable
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT * FROM register_login WHERE email = '$email' AND password = 
'$password' ";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
    header("Location: home.php");
 }
} else {
 echo " <br/>invalid email or password";
}
mysqli_close($connect);
?> 