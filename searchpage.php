<?php include "header.php";?>
<!-- This is the search pane being transferred to a separate search page. Same mechanics follows.  -->
<div id="header_subpage1" class="col-xs-12 col-lg-12 col-md-12">
			<div id="header-label" class="themebg yey col-xs-10 col-md-4 col-lg-4">
				
				<h1>Search Application </h1>	
				
				
			</div>
			
			
	</div>

<div class="col-lg-12 col-md-12 col-xs-12 bgwhite">
<div class="col-lg-4 well">
    		<div class="panel panel-default">
    			<h4 align="center">Search By:</h4>
    			<button class="btn btn-info" onclick="showform('#search_oscaid2')">OSCA ID Number</button>
    			<button class="btn btn-info" onclick="showform('#search_name2')">Name</button>
    			<button class="btn btn-info" onclick="showform('#search_barangay2')">Barangay</button>
    			<button class="btn btn-info" onclick="showform('#search_civilstat2')">Civil Status</button>
    			<button class="btn btn-info" onclick="showform('#search_gender2')">Gender</button>
    			<button class="btn btn-info" onclick="showform('#search_educattain2')">Educational Attn.</button>
    			<button class="btn btn-info" onclick="showform('#search_yrsres2')">Years of Residency</button>
    		</div>

    		<form  id="search_oscaid2" role="search" method="post" >
	    		<input type="hidden" name="searchby" value="OSCA ID number"></input>
	     			<input class="form-control" type="text" placeholder="OSCA ID Number" name="itemsearch" autofocus></input>
	    		<button class="btn btn-default" type="submit">Search</button>
    		</form>

    		<form id="search_name2" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Name"></input>
	     			<input class="form-control" type="text" placeholder="Name" name="itemsearch"></input>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

    		<form  id="search_barangay2" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Address"></input>
	     			<select name="itemsearch" class="form-control" required="">
						<option value="Anos">Anos</option>
						<option value="Bagong Silang">Bagong Silang</option>
						<option value="Bambang">Bambang</option>
						<option value="Batong Malake">Batong Malake</option>
						<option value="Bayog">Bayog</option>
						<option value="Baybayin">Baybayin</option>
						<option value="Lalakay">Lalakay</option>
						<option value="Maahas">Maahas</option>
						<option value="Malinta">Malinta</option>
						<option value="Mayondon">Mayondon</option>
						<option value="Putho-Tuntungin">Putho-Tuntungin</option>
						<option value="San Antonio">San Antonio</option>
						<option value="Tadlac">Tadlac</option>
						<option value="Timugan">Timugan</option>
				</select>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

    		<form id="search_civilstat2" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Civil Status"></input>
	     			<select name="itemsearch" class="form-control" required="">
					<option value="Single">Single</option>
					<option value="Married">Married</option>
					<option value="Widowed">Widowed</option>
					<option value="Divorced">Divorced</option>

				</select>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

    		<form id="search_gender2" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Gender"></input>
	     			<select name="itemsearch" class="form-control" required="">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

    		<form id="search_educattain2" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Educational Attainment"></input>
	     			<select name="itemsearch" class="form-control" required="">
					<option value="Elementary Undergraduate">Elementary Undergraduate</option>
					<option value="Elementary Graduate">Elementary Graduate</option>
					<option value="Highschool Undergraduate">Highschool Undergraduate</option>
					<option value="Highschool Graduate">Highschool Graduate</option>
					<option value="College Undergraduate">College Undergraduate</option>
					<option value="College Graduate">College Graduate</option>
					<option value="Post-Graduate">Post-Graduate</option>
				</select>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

    		<form  id="search_yrsres2" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Years of Residency"></input>
	     			<input class="form-control" type="text" placeholder="Years of Residency" name="itemsearch"></input>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

     
        </div>
        <div class="col-lg-8">
        	<div id="results2">
        	</div>
        </div>
</div>