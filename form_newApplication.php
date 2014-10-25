<?php include "header.php"?>
	<script type="text/javascript">
				
	$(document).ready(function(){
		$("#form-template").validate({
			
			submitHandler: function(form) {
				
				$.post('newApplication.php', $("#form-application").serialize(), function(data) {
					$('#status').html(data);

				});

			

				
			}
		});
	});
	</script>
	<div id="header_subpage1" class="col-xs-12 col-lg-12 col-md-12">
			<div id="header-label" class="themebg yey col-xs-10 col-md-4 col-lg-4">
				
				<h1>New Application </h1>	
				
				
			</div>
			
			
		</div>

	<div id="status">
	</div>
	<div class="col-xs-12 col-lg-8 col-md-8">
	<form role="form" enctype="multipart/form-data" class="panel panel-default"name="form-application" id="form-application" method="post">

	<div class="panel-heading"><strong>New Application</strong></div>
	
	<fieldset class="well">
		<strong>TYPE OF APPLICATION:<br></strong>
		<p><input type="radio" required="" name="apptype" value="new">New</p>
		<p><input type="radio" required="" name="apptype" value="replacement">Replacement of lost/old/unidentified or non-LB issued/correction of entry on the old ID<br></p>
	</fieldset>
	<h3>&nbsp; Personal Information</h3>
	
	<label>&nbsp;&nbsp; Name:</label>
	<div class="form-inline name">
		
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Surname</strong></span>-->
			<input class="form-control" type="text" name="surname" placeholder="Last Name" required="">
		</div>
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Given Name</strong></span>-->
			 <input class="form-control" type="text" name="givenname" placeholder="First Name" required="">
		</div>
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Middle Name</strong></span>-->
			 <input class="form-control" type="text" name="middlename" placeholder="Middle Name" required="">
		</div>
	
	</div>

	<label>&nbsp;&nbsp; Address:</label>
	<div  class="form-inline name">
		
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Surname</strong></span>-->
			<input class="form-control" type="text" name="streetname" placeholder="Street Name" required="">
		</div>
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Given Name</strong></span>-->
			 <input class="form-control" type="text" name="barangay" placeholder="Barangay" required="">
		</div>
		<div class="input-group">
			<!--<span class="input-group-addon"><strong>Middle Name</strong></span>-->
			 <input class="form-control" type="text" name="city" placeholder="City" required="">
		</div>
	
	</div>

	</hr>

	<div class="form-inline">
		
		<div class="input-default input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Telephone Number</strong></span>
			  <input class="form-control" type="number" name="telnum" required="">
		</div>
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Years of Residency</strong></span>
			  <input class="form-control" type="number" name="yearsOfRes" required="">
		</div>
		
	
	</div>

	<div class="form-inline">
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Date of Birth</strong></span>
			  <input class="form-control" type="date" name="birthday" required="">
		</div>
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Place of Birth</strong></span>
			  <input class="form-control" type="text" name="birthplace" required="">
		</div>
		
	
	</div>
	
	<div class="form-inline">
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Gender</strong></span>
			 <input  type="radio" required="" name="gender" value="male">Male
			<input type="radio" required="" name="gender" value="female">Female<br>
		</div>

	<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Civil Status</strong></span>
				<select name="civilstas" class="form-control" required="">
				<option value="Single">Single</option>
				<option value="Married">Married</option>
				<option value="Widowed">Widowed</option>
				<option value="Divorced">Divorced</option>
				</select>
			</div>
		
		
	
	</div>
	
	<hr/>
	<h3>&nbsp; Spouse' Information</h3>

	<div class="form-inline">
		
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Name of Spouse</strong></span>
			  <input class="form-control" type="text" name="spousename" required="">
		</div>
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Age of Spouse</strong></span>
			  <input class="form-control" type="number" name="spouseage" required="">
		</div>
		
	
	</div>
	
	
	<hr/>
	<h3>&nbsp; Education and Employment</h3>

	<div class="form-inline">
		
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Educational Attainment</strong></span>
			 <select class="form-control" name="educattain" required="">
			<option value="elemug">Elementary Undergraduate</option>
			<option value="elemgrad">Elementary Graduate</option>
			<option value="hsug">Highschool Undergraduate</option>
			<option value="hsgrad">Highschool Graduate</option>
			<option value="collug">College Undergraduate</option>
			<option value="collgrad">College Graduate</option>
			<option value="postgrad">Post-Graduate</option>
		</select><br>
		</div>
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Are you presently employed?</strong></span>
			 <input type="radio" name="employed" value="yes">Yes
		<input type="radio" name="employed" value="no">No<br>
		</div>
		
	
	</div>
	
	
	<hr/>

	<h4>&nbsp; Sources of Income</h4>

	<div class="form-inline">
		
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Position</strong></span>
			  <input class="form-control" type="text" name="position" >
		</div>
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Salary Per Month</strong></span>
			  <input class="form-control" type="number" name="salaryvalue" >
		</div>
		
	
	</div>
	
	<div class="form-inline">
		
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Employer</strong></span>
			  <input class="form-control" type="text" name="employer" >
		</div>
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Address</strong></span>
			  <input class="form-control" type="number" name="workaddress" required="">
		</div>
		
	
	</div>

	<div class="form-inline">
		
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Telephone Number</strong></span>
			  <input class="form-control" type="number" name="worktelnum" required="">
		</div>
		
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Other Sources of income</strong></span>
			  <input class="form-control" type="text" name="incomesrc" required="">
		</div>
	
	</div>

	<div class="form-inline">
		
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Amount </strong></span>
			  <input class="form-control" type="number" name="incomesrcamt" required="">
		</div>
		
	
	</div>
	
	<hr/>

	<h3>&nbsp; Philhealth Membership</h3>

	<div class="form-inline">
		
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Are you a member of PhilHealth? </strong></span>
			  	<input type="radio" name="phmember" value="yes">Yes</input>
				<input type="radio" name="phmember" value="no">No</input><br>
		</div>

		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Are you a dependent of a Philhealth member? </strong></span>
			  	<input type="radio" name="phdependent" value="yes">Yes</input>
				<input type="radio" name="phdependent" value="no">No </input><br>
		</div>
		
	
	</div>

	
	<div class="form-inline">
		
			
		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Philhealth Number </strong></span>
			  <input class="form-control" type="number" name="phmemno" required="">
		</div>

		<div class="input-default  input-group col-lg-5 col-xs-12 col-md-5">
			<span class="input-group-addon"><strong>Philhealth Dependent Number </strong></span>
			  <input class="form-control" type="number" name="phspecify" required="">
		</div>
	
	</div>

	<hr/>
	
	</div>
	<div class="col-xs-12 col-lg-4 col-md-4">
	</div>

	<div class="col-xs-12 col-lg-12 col-md-12 ">
	<div class="panel panel-default">
<!-- MEMBERS OF THE FAMILY -->
	<!-- Multiple values dito. Di ko alam kung paano iimplement sa mysql. -->
	
	<br>I hereby certify that all the information above are true and correct to the best of my knowledge and ability. <br><br>
	
	
	<!-- Signature or thumb mark here; align right -->
	Signature or Thumb mark of Senior Citizen<br><br>
	
	

	<button id="submit" class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal">Submit</button>
	
	<!-- Naisip ko lang, pwedeng after clicking submit, dun nalang ilagay sa next page yung para sa OSCA ID chuchu para di na magtatanong yung gagamit para saan yun. Atsaka para naman lang kasi yun sa personnel -->

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
			<div class="modal-body">
		      		<h3>Your OSCA ID Number IS:</h3>
				<h1>2014000001</h1>
			</div>
		    </div>
		  </div>
		</div>

	</form>
	</div>		
	</div>
</body>
</html>
