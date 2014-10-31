<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	include 'private-files/connectDB.php';

	$user = 'SELECT * FROM account_table WHERE Account_username = "'.$username.'"';

	if(strlen($username) < 6){
	
		echo "Minimum username length is 6.";
		echo "<br><br>";
		return;
	}

	if(strlen($password) < 4){
	
		echo "Minimum password length is 4.";
		echo "<br><br>";
		return;
	}
	if($user == null)
	{
	
		echo "User does not exist.<br>";
		return;
	}

	else
	{
		$data = 'SELECT * FROM account_table WHERE Account_username = "'.$username.'"';
 		$query = mysqli_query($db, $data) or die("Couldn't execute query. ". mysql_error());
  		$data2 = mysqli_fetch_array($query); 	
		extract($data2) or die();
		
		if($Account_password != $password)
		{
		
			echo "Password is wrong.<br>";
			r
		}

		else
		{
		
			header("Location: index.php");
		}
		

	}
	
		
?>
