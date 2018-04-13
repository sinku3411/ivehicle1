<?php 
$con = mysqli_connect("localhost","root","","ivehicle");
$adminid = mysqli_real_escape_string($con,$_POST['adminid']);
$passwd = $_POST['passwd'];
$query1 = "Select adminid from admin where adminid = '$adminid'";
$exe = mysqli_query($con,$query1) or die(mysqli_error($con));
$run = mysqli_fetch_array($exe);
if($run[0])
{
	echo "Admin Exists with That Email";
	echo'<!DOCTYPE html>
	<html>
	<body>
	  <br>
	  <p>Click <a href="../html/login.php">Here </a>to Login</p></body>
	</html>';
	
	
}

else
{
$query = "Insert into .admin(adminid,passwd) values('$adminid','$passwd')";
$done = mysqli_query($con,$query) or die(mysqli_error($con));
echo'<!DOCTYPE html>
	<html>
	<body>
	<p>Submitted Successfully</p>
	  <br>
	  <p>Click <a href="../html/admin-signup.php">Here </a>to Login As Admin</p></body>
	</html>';
	

}

?>