<?php 
$name = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$gender = $_POST['gender'];

include 'connect.php';
$con = connect();
$sql = "INSERT into `registration` (name,email,password,contact,gender)
	VALUES ('$name','$email','$password','$number','$gender')";
if ($con->query($sql)) {
	echo "WELCOME";
}
else{
	echo "Please Try Again";
}
?>