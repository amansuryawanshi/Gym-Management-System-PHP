<?php

session_start();
if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gym | Login</title>
	<link rel="stylesheet" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/entypo.css">
</head>
<body>
<?php include "header.php" ?>
<body class="page-body login-page login-form-fall">
    	<div id="container">
			<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="#" class="logo">
				<img src="./images/logowhite.png" style="width: 150px; height:auto; margin-top:50px;" alt="" />
			</a>
			
			<p class="description" style="color: wheat; align-self:center;">Dear user, log in to access the admin area!</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form action="secure_login.php" method='POST' id="bb">				
				<div class="form-group col-md-12">					
			
						
							<input type="text" style="border-radius: 50px; padding-left:20px; color:white; " placeholder="User ID" class="  form-control" name="user_id_auth" id="textfield" data-rule-minlength="6" data-rule-required="true" autocomplete="off">
					
				</div>				
								
				<div class="form-group col-md-12">					
					
						
						<input type="password" style="border-radius: 50px; padding-left:20px; color:white;  " name="pass_key" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Password">
							
				</div>
				
				<div class="form-group">
					<button type="submit" name="btnLogin" class="section-button btn btn-effect text-uppercase" style="border-radius: 50px;  ">
						Login In
						<i class="entypo-login"></i>
					</button>
				</div>
			</form>
		
				<div class="login-bottom-links">
					<a href="forgot_password.php" class="link">Forgot your password?</a>
				</div>			
		</div>
		
	</div>
	
</div>

		</div>
<?php include "footer.php" ?>
</body>
</html>
