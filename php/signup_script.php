<?php 
$con = mysqli_connect("localhost","root","","ivehicle");
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$passwd = $_POST['passwd'];
$mobile = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$query1 = "Select id from users where email = '$email'";
$exe = mysqli_query($con,$query1) or die(mysqli_error($con));
$run = mysqli_fetch_array($exe);
if($run[0])
{
	echo "User Exists with That Email";
	echo'<!DOCTYPE html>
	<html>
	<body>
	  <br>
	  <p>Click <a href="../html/login.php">Here </a>to Login</p></body>
	</html>';
	
	
}

else
{
$query = "Insert into .users(name,email,passwd,mobile,city,address) values('$name','$email','$passwd','$mobile','$city','$address')";
$done = mysqli_query($con,$query) or die(mysqli_error($con));
echo'<!DOCTYPE html>
	<html>
	<body>
	<p>Submitted Successfully</p>
	  <br>
	  <p>Click <a href="../html/login.php">Here </a>to Login</p></body>
	</html>';
	

}

?>