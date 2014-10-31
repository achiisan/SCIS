<?php
//MYSQL DATABASE 

//CHANGE 'localhost' 'root' to your server name and username of your database. After the username add ,'password' as password of your database 
$db = mysqli_connect('mysql.hostinger.ph', 'u820865224_scis', 'regrecario') or
	die('Unable to Connect to mySQL');


	mysqli_select_db($db, 'u820865224_scis') or die(mysql_error($db));
?>
