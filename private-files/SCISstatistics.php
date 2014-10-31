

<?php
	//COUNTS THE TOTAL SENIOR CITIZENS REGISTERED
	$rCounter = 0;	
	include 'private-files/connectDB.php';

	$query = 'SELECT * FROM sr_citizen_table';

	if($query == null){

		echo "No results.";
	}

	else{
	
	$result = mysqli_query($db, $query);
	
	while($row = mysqli_fetch_array($result))
		{
	
		$rCounter++;
		}
		$rCounter--;
	echo "$rCounter Senior Citizens registered.<br>";	
	mysqli_query($db, $query) or die (mysqli_error($db));
	
	}
?>

