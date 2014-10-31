<?php include 'connectDB.php';
//IF OTHER VIEW IS SELECTED, THIS WILL BE INVOKED
 $order = $_POST['order'];
 $query = 'SELECT SC_IDNO, SC_LNAME, SC_FNAME, SC_MNAME, SC_GENDER, SC_BPLACE, SC_CIVILSTATUS, SC_BARANGAY FROM sr_citizen_table WHERE SC_IDNO != 201200000 ORDER BY '.$order;

 $result = mysqli_query($db, $query) or die();
?>
<div class="col-lg-12 col-xs-12 col-md-12 bgwhite">
	
<?php
 include "listtable.php";

 ?>
