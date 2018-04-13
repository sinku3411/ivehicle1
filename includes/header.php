<?php
	echo '
<header>
		<div class="navbar navbar-inverse" style="margin-bottom:0">
		    <div class="container">
				<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#target">
			  	<span class="icon-bar"></span>
			  	<span class="icon-bar"></span>
			  	<span class="icon-bar"></span>
			  </button>
					<a href="index.php" class="navbar-brand">iVehicle</a>
				</div>
               <div id="target" class="collapse navbar-collapse">
				';
				if(isset($_SESSION['email'])){
                    echo'<ul class="nav navbar-nav navbar-left">
                    <li style="font-weight:bold;text-align:center"><a href="">Welcome ';echo $_SESSION["name"] ;echo'</a></li></ul>
                    <ul class = "nav navbar-nav navbar-right">
                    <li style="text-align:center"><a href="#">Option1</a></li>
				<li style="text-align:center"><a href="#"><span class="glyphicon glyphicon-wrench"></span>Settings</a></li>
				<li style="text-align:center"><a href="../php/logout.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
				</ul>';

				}
				else{
					echo '
                    <ul class="nav navbar-nav navbar-right">
					<li style="text-align:center"><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span>SignUp</a></li>
					<li style="text-align:center"><a href="login.php"><span class="glyphicon glyphicon-user"></span>Login</a></li>';
				}
				echo '	
				</ul>
			</div>
			</div>
			
		</div>
	</header>';
?>