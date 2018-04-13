<?php 
include'../includes/common.php';
$adminid = mysqli_real_escape_string($con,$_POST['adminid']);
$passwd = $_POST['passwd'];
$email_1 = "Select adminid from ivehicle.admin where adminid='$adminid' AND passwd = '$passwd'";
$name= "Select adminid from ivehicle.admin where adminid='$adminid' AND passwd = '$passwd'";
$exe = mysqli_query($con,$email_1) or die(mysqli_error($con));
$name_1 = mysqli_query($con,$name) or die(mysqli_error($con));
$name_2 = mysqli_fetch_array($name_1);
$row = mysqli_fetch_array($exe);
if(mysqli_num_rows($exe)==0)
{
	echo"No such Admin Exists";
}
else{
	$_SESSION["email"] = $adminid;
	$_SESSION["admin_id"] = $row[0];
	$_SESSION["name"] = $name_2[0];
	header('location:../html/admin-panel.php');
}


?>