<?php
include 'connectDB.php';

$query = 'CREATE TABLE sr_citizen_table(

				APP_TYPE VARCHAR(10),
				SC_NAME VARCHAR(100),
				SC_ADDRESS VARCHAR(300),
				SC_TELNUM VARCHAR(15),
				SC_YRSOFRES INT,
				SC_GENDER VARCHAR(10),
				SC_CIVILSTATUS VARCHAR(15),
				SC_EDUCATTAIN VARCHAR(30),
				
				PRIMARY KEY(SC_NAME)
				
			)
			ENGINE = InnoDB';

mysql_query($query, $db) or die (mysql_error($db));
?>