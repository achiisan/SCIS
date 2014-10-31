

<?php
	//CHECKS THE METHOD OF SEARCH AND THEN EXECUTES THE PROPER QUERY FOR IT

	
	$itemsearch = $_POST['itemsearch'];
	$searchby = $_POST['searchby'];


	include 'connectDB.php';
	
	if($searchby == 'OSCA ID number'){
		$query = 'SELECT * FROM sr_citizen_table WHERE SC_IDNO = '.$itemsearch.'';
		$result = mysqli_query($db, $query);
		 include "listtable.php";
		mysqli_query($db, $query) or die (mysqli_error($db));
	
	}else if($searchby == 'Name'){
		$query = 'SELECT * FROM sr_citizen_table WHERE SC_LNAME LIKE	"%'.$itemsearch.'%"';
		$result = mysqli_query($db, $query);
			 include "listtable.php";
		mysqli_query($db, $query) or die (mysqli_error($db));
	}else if($searchby == 'Address'){
		$query = 'SELECT * FROM sr_citizen_table WHERE SC_BARANGAY LIKE	"%'.$itemsearch.'%"';
		$result = mysqli_query($db, $query);
		 include "listtable.php";	
		mysqli_query($db, $query) or die (mysqli_error($db));
	}else if($searchby == 'Civil Status'){
		$query = 'SELECT * FROM sr_citizen_table WHERE SC_CIVILSTATUS LIKE	"%'.$itemsearch.'%"';
		$result = mysqli_query($db, $query);
		 include "listtable.php";	
		mysqli_query($db, $query) or die (mysqli_error($db));
	}else if($searchby == 'Gender'){
		$query = 'SELECT * FROM sr_citizen_table WHERE SC_GENDER LIKE "%'.$itemsearch.'%"';
		$result = mysqli_query($db, $query);
		 include "listtable.php";	
		mysqli_query($db, $query) or die (mysqli_error($db));
	}else if($searchby == 'Educational Attainment'){
		$query = 'SELECT * FROM sr_citizen_table WHERE SC_EDUCATTAIN LIKE	"%'.$itemsearch.'%"';
		$result = mysqli_query($db, $query);
		 include "listtable.php";	
		mysqli_query($db, $query) or die (mysqli_error($db));
	}else if($searchby == 'Years of Residency'){
		$query = 'SELECT * FROM sr_citizen_table WHERE SC_YRSOFRES LIKE	"%'.$itemsearch.'%"';
		$result = mysqli_query($db, $query);
		 include "listtable.php";	
		mysqli_query($db, $query) or die (mysqli_error($db));
	}

?>