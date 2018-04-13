<?php
require '../includes/common.php';
$vehicle_no = $_GET["car_no"];
$color = $_GET["car_color"];
$user = $_SESSION["name"];
$query = "Insert into .vehicle_info(user,vehicle_no,color) values('$user','$vehicle_no','$color')";
$done = mysqli_query($con,$query) or die(mysqli_error($con));
echo "Result will be fetched in 30 seconds please wait ";
header("Refresh:10;url='../html/admin-login.php'");


?>