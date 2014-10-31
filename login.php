<?php
	//LOGIN LOGIC FUNCTIONS
	session_start();
	//clear the authentication token
	$_SESSION['auth'] = 0;
	//get the username and password input
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//connect to the database
	include 'private-files/connectDB.php';

	//query to find the username
	$user = 'SELECT * FROM account_table WHERE Account_username = "'.$username.'"';

	//check if the username input is less than 6
	if(strlen($username) < 6){
	
		echo "Minimum username length is 6.";
		echo "<br><br>";
		header("Location: index.php?errcode=1"); 
	}

	//check if the password is less than 4
	if(strlen($password) < 4){
	
		echo "Minimum password length is 4.";
		echo "<br><br>";
		header("Location: index.php?errcode=1"); 
	}

	//check if the query has an error / blank
	if($user == null)
	{
	
		echo "User does not exist.<br>";
		header("Location: index.php?errcode=1"); 
	}

	//else
	else
	{
		//make a query again and invoke it in mysql
		$data = 'SELECT * FROM account_table WHERE Account_username = "'.$username.'"';
 		$query = mysqli_query($db, $data) or die("Couldn't execute query. ". mysql_error());
  		//fetch the data of the query
  		$data2 = mysqli_fetch_array($query); 
  		//if the query does returns a result, extract the result from the array it is contained
  		if ($data2 != NULL){
		extract($data2) or die();
		}
		//else if the query is null, output an error 
		else {
				header("Location: index.php?errcode=1"); 
		}
		
		//now check the password with the user input password
		if($Account_password != md5($password))
		{
			//if the password is incorrect output an error
			echo "Password is wrong.<br>";
			header("Location: index.php?errcode=1"); 
			

			
		}
		
		else
		{
			//authenticate and activate login token
			$_SESSION['auth'] = 1;
			//reset the input token
			$_SESSION['HAS_INPUT'] = 0;
			//save the username for future use
			$_SESSION['login-user'] = $Account_username;

			//set the timezone and redirect to the home page
			date_default_timezone_set('Asia/Manila'); 
			header("Location: home.php");
			
			
		}
		

	}

	
	
		
?>
