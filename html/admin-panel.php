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
     <div class="jumbotron">
     	 <h1>Admin PANEL </h1>
     </div>
   </div>
    <div class="container" style="margin-top:2%">
    	<div class="row ">
    		<div class="col-sm-5 col-sm-offset-4 well">
    		<h2>Requested Queries</h2>
                <?php
                    
                    $query ="Select * from vehicle_info where owner_name IS NULL ";
                    $result = mysqli_query($con,$query)or die(mysqli_error($con));
                    $num_rows = mysqli_num_rows($result); ?> 
                    
                    
    			<div class="table-responsive">
    			 <table class="table table-hover">
    			 <tbody>
    			 	<tr>
    			 	   <th>
    			 		User Name
    			 	   </th>
    			 	   <th>
    			 		Vehicle No.
    			 	   </th>
    			 	   <th>
    			 		Color
    			 	   </th>
    			 	</tr>
               <?php while($num_rows>0) { 
                 $row = mysqli_fetch_array($result) or die(mysqli_error($con));?>
                     <tr>
                        <td><?php echo $row['user']; ?></td>
                     
                        <td><?php echo $row['vehicle_no']; ?></td>
                     
                        <td><?php echo $row['color']; ?></td>
                        <?php
                         $num_rows=$num_rows-1;
                          }?>
                     </tr>
                    
    			 </tbody>
    				    			
    			</table>

    		</div>
            
           
    	</div>
    </div>
    </div>
    <div class="row">
    	<div class="col-sm-5 col-sm-offset-4 well">
    		<form action="../php/owner-fill.php" method="POST">
    			<div class="form-group" >
    				<label for="user_name">User name:</label>
    				<input type="text" id="user_name" name="user_name" placeholder="Enter User Name" class="form-control">
    			</div>
    			<div class="form-group" >
    				<label for="user_name">Owner Name:</label>
    				<input type="text" id="owner_name" name="owner_name" placeholder="Enter Owner Name" class="form-control">
    			</div>
    			<input type="submit" value="Submit Result" class="btn btn-success">
    		</form>
    	</div>
    </div>


</body>
   
</html>