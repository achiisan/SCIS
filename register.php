<?php
	//Creates a user and then puts it on a database.
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$account_type = $_POST['account_type'];
	$confirm_password = $_POST['confirm_password'];
	
	#to check username
/*
	
	$data = 'SELECT * FROM accounts WHERE username = "'.$username.'"';
 	#$query = mysql_query($data) or die("Couldn't execute query. ". mysql_error());
  	#$data2 = mysql_fetch_array($query); 	

	if($data == $Account_username){
		
		echo "username is already used.<br>";
			
	
	}	
*/

	include 'private-files/connectDB.php';
	
	if(strlen($username) < 6){
	
		echo "Minimum username length is 6.";
		echo "<br><br>";


	}

	

	if(strlen($password) < 4){
	
		echo "Minimum password length is 4.";
		echo "<br><br>";


	}

	if($password != $confirm_password){
	
		echo "Password does not match. Re-enter your password.";
		echo "<br>";
	

	}

	else{
	#register here	
	$password = md5($password);

	$query = 'INSERT INTO account_table
			 ( Account_username, Account_password, Account_type)
			 VALUES
			 ( "'.$username.'", "'.$password.'", "'.$account_type.'")';
			
						
			mysqli_query($db, $query) or die (header("Location: index.php?signup=2"));
	
			
			header("Location: index.php?signup=1");
	
	}
?>



