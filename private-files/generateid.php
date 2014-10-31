<?php
include "connectDB.php";

$query = 'SELECT SC_IDNO from sr_citizen_table ORDER BY SC_IDNO DESC';
$result = mysqli_query($db, $query);
$results_list = mysqli_fetch_array($result);
extract($results_list) or die();

$temp = $SC_IDNO;
$temp /= 100000;

$temp  = round (floatval($temp));
if ($temp == date("Y")){
	$SC_IDNO++;
}

else {
	$SC_IDNO = date("Y");
	$SC_IDNO *= 100000;
	$SC_IDNO++;
}

echo ($SC_IDNO);
?>
