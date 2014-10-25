<form name="form-application" method="post" action="newApplication.php">
	<fieldset>
		TYPE OF APPLICATION:<br>
		<input type="radio" required="" name="apptype" value="new">New
		<input type="radio" required="" name="apptype" value="replacement">Replacement of lost/old/unidentified or non-LB issued/correction of entry on the old ID<br>
	</fieldset>
	Name:<br>
	Surname: <input type="text" name="surname" required="">
	Given Name: <input type="text" name="givenname" required="">
	Middle Name: <input type="text" name="middlename" required=""><br>
	
	<!-- Etong address kailangan pang baguhin base dun sa sinabi ni Sir. -->
	
	Address: <textarea maxlength="1000" required="" name="address"></textarea>
	Tel. No.: <input type="number" name="telnum" required=""><br>
	Years of Residency: <input type="number" required="" name="yearsOfRes"><br>
	Date of Birth: <input type="date" name="birthday">
	Place of Birth: <input type="text" name="birthplace">
	Age: <input type="number" name="age"><br>
	Gender:
		<input type="radio" required="" name="gender" value="male">Male
		<input type="radio" required="" name="gender" value="female">Female<br>
	Civil Status: <input type="text" name="civilstatus" required="">
	If married, name of spouse: <input type="text" name="spousename">
	Age: <input type="number" name="spouseage"><br>
	Educational Attainment: 
		<select name="educattain" required="">
			<option value="elemug">Elementary Undergraduate</option>
			<option value="elemgrad">Elementary Graduate</option>
			<option value="hsug">Highschool Undergraduate</option>
			<option value="hsgrad">Highschool Graduate</option>
			<option value="collug">College Undergraduate</option>
			<option value="collgrad">College Graduate</option>
			<option value="postgrad">Post-Graduate</option>
		</select><br>
	Are you presently employed?
		<input type="radio" name="employed" value="yes">Yes
		<input type="radio" name="employed" value="no">No<br>
	If yes: Position: <input type="text" name="position">
	Salary per month: Php <input type="number" name="salaryvalue"><br>
	Employer: <input type="text" name="employer"><br>
	Address: <textarea maxlength="1000" name="workaddress"></textarea>
	Tel.No.: <input type="number" name="worktelnum"><br>
	Other sources of income: <input type="text" name="otherincomesrc">
	How Much: <input type="number" name="incomesrcamt"><br>
	Are you a member of PHILHEALTH?
		<input type="radio" name="phmember" value="yes">Yes
		<input type="radio" name="phmember" value="no">No<br>
	If Yes, PHILHEALTH Membership No.: <input type="number" name="phmemno"><br>
	Are you a dependent of PHILHEALTH member?
		<input type="radio" name="phdependent" value="yes">Yes
		<input type="radio" name="phdependent" value="no">No<br>
	If Yes, specify <input type="text" name="phspecify"><br>
	
	<!-- MEMBERS OF THE FAMILY -->
	<!-- Multiple values dito. Di ko alam kung paano iimplement sa mysql. -->
	
	<br>I hereby certify that all the information above are true and correct to the best of my knowledge and ability. <br><br>
	
	
	<!-- Signature or thumb mark here; align right -->
	Signature or Thumb mark of Senior Citizen<br><br>
	
	
	<!-- Yung fields dito dapat pwede lang lagyan kung new application. -->
	<strong>REQUIREMENTS FOR NEW APPLICANT:<br></strong>
	1. Latest CTC (Cedula) No. <input type="number" name="cedulanum">, issued on <input type="date" name="ceduladate"> at <input type="text" name="cedulaplace"><br>
	2. Photocopy of any of the following supporting documents, i.e. Birth certificate or Voter's ID, Driver's License, or any government issued valid ID indicating full name and date of birth. (Bring original)<br>
	3. <strong>PICTURES: </strong> 4 pieces 1x1<br>
	<br>
	
	<button type="submit">Submit</button>
	
	<!-- Naisip ko lang, pwedeng after clicking submit, dun nalang ilagay sa next page yung para sa OSCA ID chuchu para di na magtatanong yung gagamit para saan yun. Atsaka para naman lang kasi yun sa personnel -->
</form>