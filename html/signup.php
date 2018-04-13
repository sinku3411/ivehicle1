<html>
<head>
<?php
require '../includes/common.php';
if(isset($_SESSION['email']))
{
     header('location:product.php');
}
?>
<title>LifeShop</title>
	<!-- Latest compiled and minified CSS -->
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<?php include '../includes/header.php' ?>

     <div class="container">
     	<div class="row">
     		<div class=" col-sm-4  col-sm-offset-4">
               <form method="POST" action="../php/signup_script.php" id="form" >
     			<h1>Sign Up</h1>
     			<div class="form-group" >
     				<label for="name" id="name_er">Name :</label>
     				<input type="text" id="name" placeholder="Name" maxlength="20" class="form-control" name="name" pattern=".{1,}[a-zA-Z]" title="Enter Valid Name"  required>
     			</div>
     			<div class="form-group ">
     				<label for="email" id="email_er">Email :</label>
     				<input type="email" id="email" placeholder="Email" maxlength="35" class="form-control " name="email" required>
     			</div>
     			<div class="form-group">
     				<label for="passwd" id="passwd_er"> Password :</label>
     				<input type="password" id="passwd" placeholder="Max-25-Characters" maxlength="25" class="form-control" name="passwd" required>
     			</div>
                    <label for="contact" id="contact_er">Contact :</label>
     			<div class="input-group form-group">
                         <span class="input-group-addon">+91</span>
     				<input type="text" id="contact" placeholder="10 digit Mobile No." maxlength="10" class="form-control " name="contact" title="Enter Valid 10 digit Number" required>
     			</div>
     			<div class="form-group">
     				<label for="city" id="city_er" >City :</label>
     				<input type="text" id="city" placeholder="City" maxlength="20" class="form-control" name="city" required>
     			</div>
     			<div class="form-group">
     				<label for="address" id="address_er">Address :</label>
     				<input type="text" id="address" placeholder="Address" maxlength="50" class="form-control" name="address" required>
     			</div>
     			<div class="form-group">
     				<button type="submit" name="submission" class="btn btn-success btn-block" >Sign Up</button>
     			</div>
                    </form>
     		</div>
     	</div>
     </div>
     <?php include '../includes/footer.php' ?>
	</body>
	</html>