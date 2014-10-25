<?php
	$apptype = $_POST['apptype'];
	$surname = $_POST['surname'];
	$givenname = $_POST['givenname'];
	$middlename = $_POST['middlename'];
	$address = $_POST['address'];
	$telnum = $_POST['telnum'];
	$yearsOfRes = $_POST['yearsOfRes'];
	$gender = $_POST['gender'];
	$civilstatus = $_POST['civilstatus'];
	$educattain = $_POST['educattain'];
	
	include 'connectDB.php';

	$query = 'INSERT INTO sr_citizen_table
			 ( APP_TYPE, SC_NAME, SC_ADDRESS, SC_TELNUM, SC_YRSOFRES, SC_GENDER, SC_CIVILSTATUS, SC_EDUCATTAIN )
			 VALUES
			 ( "'.$apptype.'", "'.$surname.' '.$givenname.' '.$middlename.'","'.$address.' ", "'.$telnum.'", "'.$yearsOfRes.'", "'.$gender.'","'.$civilstatus.'", "'.$educattain.'")';
			 
			 mysql_query($query, $db) or die ('<p class="alert alert-warning"> <span class=" glyphicon glyphicon-warning-sign">&nbsp</span><strong>Oops!</strong> The OSCA ID number is already in database.');
			 echo '<p class="alert alert-success"><span class="glyphicon glyphicon-saved">&nbsp</span>Application Added!</p>';
			 
			 $action = 1;
?>