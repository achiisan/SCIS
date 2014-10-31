<?php
include 'private-files/connectDB.php';

$create = 'CREATE TABLE account_table(
				
				Account_username VARCHAR(20),
				Account_password VARCHAR(20),
				Account_type VARCHAR(10),

				PRIMARY KEY(Account_username)
				
			)';

mysqli_query($db, $create) or die (mysql_error($db));
?>
