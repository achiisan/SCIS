<!-- LOGIN/SIGNUP PAGE -->
<?php
	error_reporting(E_ERROR); //Remove any error prompts

	session_start();
	if ($_SESSION['auth'] == 1){
		header("Location: home.php");
	}//if the user is already logged in, continue to home
?>
<!DOCTYPE html>
<html>
<head>
	<title>OSCA-SCIS</title>
	<!-- Call External Plugins -->
	<script src="custom_scripts/jquery-2.1.1.js"></script>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="custom_scripts/styler.css"/>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="custom_scripts/scis.js"></script>
</head>
<body id="login" >
	<div class="col-lg-5">
	<!-- Login Form -->
	<form name="form-login"  role="form"  method="post" action="login.php">
		
		<div id="login-form" class="form-group">
			<!-- Logo -->
			<img src="custom_scripts/img/seal.png" width="50px;"/>
			<button id="menu-toggle">
				<h3>SCIS.</h3>
			</button>

			<?php
					// If the user had an invalid username/password combination prompt this alert
					if ($_GET['errcode'] == 1 ){
							echo '<p class="alert alert-danger">&nbsp</span>Oops! Wrong username/password combination</p> ';
					}
						// if the user had a successful signup prompt this alert
					if ($_GET['signup'] == 1 ){
							echo '<p class="alert alert-success">&nbsp</span>User successfully added</p> ';
					}
						// else prompt this alert
					elseif ($_GET['signup'] == 2 ){
							echo '<p class="alert alert-warning">&nbsp</span>Add user not permitted</p> ';
					}
						
				?>
			<!-- Get input from user (LOGIN) -->
			<div class="input-group">
				<span class="input-group-addon"> Username:</span>
				<input class="form-control" type="text" name="username" required="">
			</div>
			<div class="input-group">
			<span class="input-group-addon"> Password :</span>
			<input class="form-control" type="password" size="20" name="password" required="">
			</div>
			<button class="btn btn-info" type="submit">Log in</button>
			<button class="btn btn-warning" id="signup" type="button">Sign up</button>
		</div>
	</form>
	</div>

	<!-- Signup modal page -->
	<div class="modal fade" id="modal-signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
			<div class="modal-header">
			<h4>Sign up</h4>			
			</div>
			<div class="modal-body">
				<div id="modalContent">
					<!-- Get info from user -->
					<form action="register.php" role="form" method="post" id="signup-now">
		<div id="input-group">
		<p>Enter username</p>
		<input type="text" name="username" required="">
		</div>

		<div id="input-group">
		<p>Password</p>
		<input type="password" size="20" name="password" required="" min="4" max="20">
		</div>

		<div id="input-group">
		<p>Confirm Password</p>
		<input type="password" size="20" name="confirm_password" required="" min="4" max="20">
		</div>
		<div id="input-group">
		<p>Account Type</p>
		<input type="radio" required="" name="account_type" value="admin">Admin
		<input type="radio" required="" name="account_type" value="staff">Staff<br>
		</div>		

		<p><button type="submit">Register Account</button></p>	
					</form>
				</div>
				
			</div>
		    </div>
		  </div>
		</div>
</body>
</html>
