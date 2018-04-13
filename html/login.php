<?php 

require '../includes/common.php';
 ?>

<html>
<head>
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
  <?php include '../includes/header.php'; ?>
   <div class="container">
   	<div class="row">
      		<div class="col-sm-4 col-sm-offset-4" >
            <form action="../php/login_submit.php" method="POST">
   			<div class="panel panel-primary" style="margin-top:20%">
   				<div class="panel-heading"><h3 style="text-align:center">Login</h3></div>
   				<div class="content" style="margin:10px;">
   					<div class="form-group">
   						<label for="email">Email :</label>
   						<input type="email" placeholder="Email" class="form-control" name="email" maxlength="30" required>
   					</div>
   					<div class="form-group">
   						<label for="passwd">Password:</label>
   						<input type="password" placeholder="Password" class="form-control" name="passwd" required>
   					</div>
   					<div class="form-group">
   						<a href=""><button type="submit" class="btn btn-primary btn-block">Submit</button></a>
   					</div>
   				</div>
   				<div class="panel-footer">
   					<p>Don't have Account Click <a href="signup.php">Here</a></p>
   				</div>
   			</div>
            </form>
   		</div>
   	</div>
   </div>
 <footer class="navbar-fixed-bottom">
   <p style="text-align:centre">Copyright &copy; Lifestyle Store. All Rights
Reserved | Contact Us: +91 90000 00000</p>
   
   </footer>
</body>
   
</html>