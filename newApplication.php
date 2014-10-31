<?php
	// Get the information from form and transfer it on a variable
	session_start();
	$apptype = 1;
	$surname = $_POST['surname'];
	$givenname = $_POST['givenname'];
	$middlename = $_POST['middlename'];
	$streetname = $_POST['streetname'];
	$barangay= $_POST['barangay'];
	$city= 'Los Banos, Laguna';
	$telnum = $_POST['telnum'];
	$yearsOfRes = $_POST['yearsOfRes'];
	$birthday = $_POST['birthday'];
	$birthplace = $_POST['birthplace'];
	$gender = $_POST['gender'];
	$civilstatus = $_POST['civilstas'];
	$spousename = $_POST['spousename'];
	$spouseage = $_POST['spouseage'];
	$educattain = $_POST['educattain'];
	$employed = $_POST['employed'];
	$position = $_POST['position'];
	$salaryvalue = $_POST['salaryvalue'];
	$employer = $_POST['employer'];
	$workaddress = $_POST['workaddress'];
	$worktelnum = $_POST['worktelnum'];
	$incomesrc = $_POST['incomesrc'];
	$incomesrcamt = $_POST['incomesrcamt'];
	$phmember = $_POST['phmember'];
	$phdependent = $_POST['phdependent'];
	$phmemno = $_POST['phmemno'];
	$phspecify = $_POST['phspecify'];

	$fmem1name = $_POST['fmem1name'];
	$fmem1occupation =  $_POST['fmem1occupation'];

	$fmem2name = $_POST['fmem2name'];
	$fmem2occupation =  $_POST['fmem2occupation'];

	$fmem3name = $_POST['fmem3name'];
	$fmem3occupation =  $_POST['fmem3occupation'];


	// Connect to database
	include 'private-files/connectDB.php';
	// Generate ID of New Application
	include 'private-files/generateid.php';

	// Insert the information to the senior citizen database
	$query = 'INSERT INTO sr_citizen_table
			 ( APP_TYPE, SC_LNAME, SC_FNAME, SC_MNAME, SC_STREET, SC_BARANGAY, SC_CITY, SC_TELNUM, SC_YRSOFRES, SC_BDAY, SC_BPLACE, SC_GENDER, SC_CIVILSTATUS, SC_NAMESPOUSE, SC_AGESPOUSE, SC_EDUCATTAIN, SC_EMPLOYMENT, SC_POSITION, SC_SALARY, SC_EMPLOYER, SC_WORKADDR, SC_WORKTEL, SC_OTHERINCOME, SC_OTHERINCOMEAMT, SC_PHILHEALTHMEM, SC_PHILHEALTHDEP, SC_PHILHEALTHNO, SC_PHILHEALTHDEPNO, SC_IDNO )
			 VALUES
			 ( "'.$apptype.'", "'.$surname.' ","'.$givenname.' ","'.$middlename.'","'.$streetname.' ", "'.$barangay.'", "'.$city.'", "'.$telnum.'","'.$yearsOfRes.'", "'.$birthday.'", "'.$birthplace.'", "'.$gender.'", "'.$civilstatus.'", "'.$spousename.'", "'.$spouseage.'", "'.$educattain.'", "'.$employed.'", "'.$position.'", "'.$salaryvalue.'", "'.$employer.'", "'.$workaddress.'", "'.$worktelnum.'", "'.$incomesrc.'", "'.$incomesrcamt.'", "'.$phmember.'" , "'.$phdependent.'" , "'.$phmemno.'", "'.$phspecify.'", "'.$SC_IDNO.'"     )';
			 //echo $query;
			 mysqli_query($db, $query) or die (mysqli_error($db));
			 //echo '<p class="alert alert-success"><span class="glyphicon glyphicon-saved">&nbsp</span>Application Added!</p>';
			 
	

			// Insert the information about the family members to a separate table
			$query= ' INSERT INTO family_member (SC_IDNO, SC_DEPNAME, SC_DEPOCCUPATION) VALUES ('.$SC_IDNO.', "'.$fmem1name.'", "'.$fmem1occupation.'"), ('.$SC_IDNO.', "'.$fmem2name.'", "'.$fmem2occupation.'"), ('.$SC_IDNO.', "'.$fmem3name.'", "'.$fmem3occupation.'")';
			mysqli_query($db, $query) or die(mysql_error($db));


			date_default_timezone_set('Asia/Manila'); 
				 // Generate a log and then put it on the table
			$query = 'INSERT INTO LOGS (DATE, ACTION, USERNAME, LOG_INFO) VALUES("'.date('Y-m-d H:i:s').'", "Added user", "'.$_SESSION['login-user'].'", "Application '.$SC_IDNO.'")';
			mysqli_query($db, $query) or die(mysqli_error($db));

			$sServer  =  getenv("SCRIPT_NAME");
			//echo $sServer;
			// Activate Input token
			$_SESSION['HAS_INPUT'] = 1;
			// Redirect back to home
			header("Location: home.php");
			die();
			
	

?>
