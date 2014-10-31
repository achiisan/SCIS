

<?php
	//GET INFO OF ONE USER AS DEFINED BY A GET VARIABLE


	$idNo = $_GET['SC_IDNO'];	//gets the id no.
	$rCounter = 0;	
	include 'connectDB.php';

	$query = 'SELECT * FROM sr_citizen_table WHERE SC_IDNO = '.$idNo.'';

	if($query == null){

		echo "No results found.";
	}

	else{
	
	$result = mysqli_query($db, $query);
	
	$row = mysqli_fetch_array($result);	//prints the info
		
		echo '<h1>'.$row['SC_IDNO'].'</h1>';
		echo '<h3>'.$row['SC_LNAME'].',';
		echo $row['SC_FNAME'];
		echo $row['SC_MNAME'].'</h3>';

		echo '<strong>Address: </strong>' .$row['SC_STREET'];
		echo $row['SC_BARANGAY'].', ';
		echo $row['SC_CITY'].'</br>';
		echo '<strong>Telephone Number: </strong>'.$row['SC_TELNUM'].'</br>';
		echo '<strong>Years of Residency: </strong>' .$row['SC_YRSOFRES'].'</br>';
		echo '<strong>Birthday: </strong>' .$row['SC_BDAY'].'</br>';
		echo '<strong>Birth Place: </strong>' .$row['SC_BPLACE'].'</br>';
		echo '<strong>Gender: </strong>' .$row['SC_GENDER'].'</br>';
		echo '<strong>Civil Status: </strong>' .$row['SC_CIVILSTATUS'].'</br>';
		echo '<strong>Name of Spouse: </strong>' .$row['SC_NAMESPOUSE'].'</br>';
		echo '<strong>Age of Spouse: </strong>' .$row['SC_AGESPOUSE'].'</br>';
		echo '<strong>Education : </strong>' .$row['SC_EDUCATTAIN'].'</br>';
		echo '<strong>Are you employed?: </strong>' .$row['SC_EMPLOYMENT'].'</br>';
		echo '<strong>Position: </strong>' .$row['SC_POSITION'].'</br>';
		echo '<strong>Salary: </strong>' .$row['SC_SALARY'].'</br>';
		echo '<strong>Employer: </strong>' .$row['SC_EMPLOYER'].'</br>';
		echo '<strong>Work Address: </strong>' .$row['SC_WORKADDR'].'</br>';
		echo '<strong>Work Contact Number: </strong>' .$row['SC_WORKTEL'].'</br>';
		echo '<strong>Other income source: </strong>' .$row['SC_OTHERINCOME'].'</br>';
		echo '<strong>Amount of other income source: </strong>' . $row['SC_OTHERINCOMEAMT'].'</br>';
		echo '<strong>Is the applicant Philhealth member?: </strong>' .$row['SC_PHILHEALTHMEM'].'</br>';
		echo '<strong>Is the applicant a dependent of a Philhealth member?: </strong>' .$row['SC_PHILHEALTHDEP'].'</br>';
		echo '<strong>Philhealth account number: </strong>' .$row['SC_PHILHEALTHNO'].'</br>';
		echo '<strong>Philhealth dependent account number: </strong>' .$row['SC_PHILHEALTHDEPNO'].'</br>';
		;
		
		}

		$query2 = 'SELECT * FROM family_member WHERE SC_IDNO IN ('.$idNo.')';
		
		$result2 = mysqli_query($db, $query2) or die(mysqli_error($db));
		echo '<strong>Family Member</strong></br>';
		while($row = mysqli_fetch_array($result2)) {
		
		echo '<strong>Name: </strong>'.$row['SC_DEPNAME'].' <strong> Occupation: </strong>'.$row['SC_DEPOCCUPATION'].'</br>';
		}
	
?>

