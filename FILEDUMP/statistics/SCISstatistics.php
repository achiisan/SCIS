<?php include "header.php" ?>

<?php

	$rCounter = 0;	
	include 'private-files/connectDB.php';

	$query = 'SELECT * FROM SENIOR_CITIZEN';

	if($query == null){

		echo "No results.";
	}

	else{
	
	$result = mysqli_query($db, $query);
	
	while($row = mysqli_fetch_array($result))
		{
	
		$rCounter++;
		}

	echo "$rCounter Senior Citizens registered.<br>";	
	mysqli_query($db, $query) or die (mysqli_error($db));
	
	}
?>

