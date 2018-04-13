<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];
$con = mysqli_connect("localhost","root","","ivehicle") or die(mysqli_error($con));
$query = "Insert into .users(name,email,passwd,mobile,city,address) values('$name','$email','$passwd','$contact','$city','$address')";
$done = mysqli_query($con,$query) or die(mysqli_error($con));
echo "inserted";

?>
