<?php
//GENERATES LOGS TABLE

include 'connectDB.php';

$query ='SELECT * FROM LOGS';

$result = mysqli_query($db, $query) or die($mysqli_error($db));
?>
<table class="table table-hover">



<?php
	//action_window = "'action_window'";
	$rCounter = 0;
	while($row = mysqli_fetch_array($result)) {
		echo '<tr>';
		echo '<td><strong>'.$row['USERNAME'].'</strong> '.$row['ACTION'].' = '.$row['LOG_INFO'].' on '.$row['DATE'].'</td>';
		echo '</tr>';
	}
?>
</table>