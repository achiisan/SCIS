<form name="form-createAccount" method="post" action="register.php">
 	<h2>Register account</h2>
		<p>Enter username</p>
		<input type="text" name="username" required="">

		<p>Password</p>
		<input type="password" size="20" name="password" required="" min="4" max="20">
		
		<p>Confirm Password</p>
		<input type="password" size="20" name="confirm_password" required="" min="4" max="20">
		
		<p>Account Type</p>
		<input type="radio" required="" name="account_type" value="admin">Admin
		<input type="radio" required="" name="account_type" value="staff">Staff<br>


	<p><button type="submit">Register Account</button></p>

</form>
