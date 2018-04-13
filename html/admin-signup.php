<html>
<head>
<?php
require '../includes/common.php';
if(isset($_SESSION['email']))
{
     header('location:dashboard.php');
}
?>
<title>iVehicle</title>
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
               <form method="POST" action="../php/admin-signup.php" id="form" >
     			<h1>Admin's Only</h1>
     			<div class="form-group" >
     				<label for="adminid" id="adminid_er">Admin Id :</label>
     				<input type="text" id="adminid" placeholder="Admin ID" maxlength="20" class="form-control" name="adminid"   required>
     			</div>
     			<div class="form-group">
     				<label for="passwd" id="passwd_er"> Password :</label>
     				<input type="password" id="passwd" placeholder="Max-25-Characters" maxlength="25" class="form-control" name="passwd" required>
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