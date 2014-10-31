<?php include 'header.php';?>
<!-- View All Applications -->
<div id="header_subpage1" class="col-xs-12 col-lg-12 col-md-12">
			<div id="header-label" class="themebg yey col-xs-10 col-md-4 col-lg-4">
				
				<h1>All Applications </h1>	
				
				
			</div>
			
			
	</div>
	<form id="view-as" class="col-lg-12 bgwhite" role="search" method="post">
	
		<div class="input-group col-lg-4">
		<select class="form-control" name="order" required="">
			<option value="SC_IDNO">OSCA ID Number</option>
			<option value="SC_LNAME">Name</option>
			<option value="SC_BARANGAY">Barangay</option>
			<option value="SC_GENDER">Gender</option>
			<option value="SC_BPLACE">Birthplace</option>
			<option value="SC_CIVILSTATUS">Civil Status</option>
		</select><br>
		<button class="btn btn-info">Order By</button>
		</div>
	</form>
	<div id="result">
		<?php include 'private-files/connectDB.php';

		 $query = 'SELECT SC_IDNO, SC_LNAME, SC_FNAME, SC_MNAME, SC_GENDER, SC_BPLACE, SC_CIVILSTATUS, SC_BARANGAY FROM sr_citizen_table WHERE SC_IDNO != 201200000';

		 $result = mysqli_query($db, $query) or die();
		?>
		<div class="col-lg-12 col-xs-12 col-md-12 bgwhite">
			
		<?php
		 include "private-files/listtable.php";

		 ?>

	</div>

	</body>
</html>


	

