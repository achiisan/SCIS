<?php 
?>
<!-- Generates the query for Applications Search/View on a Tabulat form -->
<div class="col-lg-12">

<table class="table table-hover">
<tr>
<th>OSCA ID NUMBER</th>
<th>Name</th>
<th>Gender</th>
<th>Birthplace</th>
<th>Civil Status</th>
<th>Barangay</th>
<th>More</th>
</tr>
<?php
	//action_window = "'action_window'";
	error_reporting(E_ERROR);
	$rCounter = 0;
	while($row = mysqli_fetch_array($result)) {
		  echo "<tr>";
		  echo "<td>" . $row['SC_IDNO'] . "</td>";
		  echo "<td>" . $row['SC_LNAME'] . ",";
		  echo $row['SC_FNAME'] . " ";
		  echo $row['SC_MNAME'] . "</td>";
		  echo "<td>" . $row['SC_GENDER'] . "</td>";
		  echo "<td>" . $row['SC_BPLACE'] . "</td>";
		  echo "<td>" . $row['SC_CIVILSTATUS'] . "</td>";
		  echo "<td>" . $row['SC_BARANGAY'] . "</td>";
		echo '<td><a id="test" ><button type="button" class="btn btn-success" onclick="modalshow('. $row['SC_IDNO'] .')">View Info</button></a></td>';
		  echo "</tr>";

		  //href="displayinfo.php?SC_IDNO='. $row['SC_IDNO'] .'"
		  $rCounter++;
}
	echo "<br>$rCounter results found.<br>";	
?>

</table>


		<div class="modal fade" id="modalinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
			<div class="modal-header">
			<h4>Application Information</h4>			
			</div>
			<div class="modal-body">
				<div id="modalContent">

				</div>
				
			</div>
		    </div>
		  </div>
		</div>
