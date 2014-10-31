<?php include "header.php" ?>

<?php
	$idNo = $_GET['SC_IDNO'];	//gets the id no.
	$rCounter = 0;	
	include 'private-files/connectDB.php';

	$query = 'SELECT * FROM SENIOR_CITIZEN WHERE SC_IDNO = '.$idNo.'';

	if($query == null){

		echo "No results found.";
	}

	else{
	
	$result = mysqli_query($db, $query);
	
	$row = mysqli_fetch_array($result);	//prints the info
		
	
		echo $row['SC_IDNO'];
		echo $row['SC_LNAME'];
		echo $row['SC_FNAME'];
		echo $row['SC_MNAME'];

		echo $row['APP_TYPE'];
		echo $row['SC_STREET'];
		echo $row['SC_BARANGAY'];
		echo $row['SC_CITY'];
		echo $row['SC_TELNUM'];
		echo $row['SC_YRSOFRES'];
		echo $row['SC_BDAY'];
		echo $row['SC_BPLACE'];
		echo $row['SC_GENDER'];
		echo $row['SC_CIVILSTATUS'];
		echo $row['SC_NAMESPOUSE'];
		echo $row['SC_AGESPOUSE'];
		echo $row['SC_EDUCATTAIN'];
		echo $row['SC_EMPLOYMENT'];
		echo $row['SC_POSITION'];
		echo $row['SC_SALARY'];
		echo $row['SC_EMPLOYER'];
		echo $row['SC_WORKADDR'];
		echo $row['SC_WORKTEL'];
		echo $row['SC_OTHERINCOME'];
		echo $row['SC_OTHERINCOMEAMT'];
		echo $row['SC_PHILHEALTHMEM'];
		echo $row['SC_PHILHEALTHDEP'];
		echo $row['SC_PHILHEALTHNO'];
		echo $row['SC_PHILHEALTHDEPNO'];
				
		mysqli_query($db, $query) or die (mysqli_error($db));
		
		}

	
	}
?>

