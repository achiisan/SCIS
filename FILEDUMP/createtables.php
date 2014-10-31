<?php
	include 'connectDB.php';

	$query = 'CREATE TABLE  SENIOR_CITIZEN (
			OSCA_id_number INT(100),
			Type_of_application VARCHAR(10),
			Surname VARCHAR(30),
			Given_name VARCHAR(50),
			Middle_name VARCHAR(30),
			Address VARCHAR(100),
			Barangay VARCHAR(30),
			City VARCHAR(50),
			Telephone_number VARCHAR(15),
			Years_of_residency INT(100),
			Date_of_birth VARCHAR(64),
			Place_of_birth VARCHAR(60),
			Age INT(100),
			Civil_status VARCHAR(60),
			Name_of_spouse  VARCHAR(60),
			Age_of_spouse INT(100),
			Work_experience VARCHAR(60),
			Educational_attainment VARCHAR(60),
			Is_employed VARCHAR(10),
			Position VARCHAR(60),
			Employer VARCHAR(60),
			Work_address VARCHAR(60),
			Salary_per_month FLOAT,
			Work_Telephone_Number VARCHAR(60),
			Other_income VARCHAR(60),
			Amount_of_income FLOAT,
			Is_Philhealth_member VARCHAR(30),
			Philhealth_number INT(100),
			Is_dependent_of_Philhealth_member VARCHAR(30),
			Dependent_Philhealth_member VARCHAR(60),

			PRIMARY KEY (OSCA_id_number)
		)';

	mysql_query($query, $db) or die (mysql_error($db));

	$query = 'CREATE TABLE FAMILY_MEMBER(
			OSCA_id_number INT(100),
			Family_member_name VARCHAR(100),
			Family_member_occupation VARCHAR(100)

		)';

	mysql_query($query, $db) or die (mysql_error($db));

	echo "Table Created!"

			
?>
