<?php 
$con = mysqli_connect("localhost","root","","ivehicle");
$user_name = mysqli_real_escape_string($con,$_POST['user_name']);
$owner_name = mysqli_real_escape_string($con,$_POST['owner_name']);

$query = "Update vehicle_info set owner_name='$owner_name' where user='$user_name'";
$done = mysqli_query($con,$query) or die(mysqli_error($con));
echo'<!DOCTYPE html>
	<html>
	<body>
	<p>Submitted Successfully</p>
	  <br>
	  <p>Click <a href="../html/admin-panel.php">Here </a>to Go back</p></body>
	</html>';
	



?>