<?php
	session_start();
	if ($_SESSION['auth'] != 1) {
		header("Location: index.php?errcode=2"); 
	}
	// If the user has not yet logged in, go to login page
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Call external scripts -->
		<?include "private-files/connectDB.php";?>
		<script src="custom_scripts/jquery-2.1.1.js"></script>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="custom_scripts/styler.css"/>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="custom_scripts/scis.js"></script>
		 <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<!-- Navbar  -->
		<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
      	<!-- Menu button -->
		<div class="navbar-default navbar-left">
				<button id="menubtn" class="btn btn-danger">
				<span class="glyphicon glyphicon-align-justify"></span>
				MENU
				</button>
			</div>
			
			<!-- Logo -->
			<div id="logo-container" class="navbar-default">
				<a href="home.php">
				<button id="menu-toggle-lg">
					<h3>Senior Citizen Information System</h3>
				</button>
				</a>
			</div>

			<!-- Search button -->
			<div class="navbar-default navbar-right">
				<button id="searchbtn" class="btn btn-danger">
				<span class="glyphicon glyphicon-search"></span>
			
				</button>
			</div>


      </div><!-- /.container-fluid -->
    </nav>
   
   	<!-- Menu buttons -->
    <body id="login">
     <div id="menu-navigate" class="col-lg-2 themebg menu-template">
     
    	<a href="home.php" class="whitetext"><h4><span class="glyphicon glyphicon-home"></span> &nbsp; Home</h4></a>
    	</hr>
    	<a href="form_newApplication.php" class="whitetext"><h4><span class="glyphicon glyphicon-plus"></span> &nbsp; New Application</h4></a>
    	<a href="viewallapplications.php" class="whitetext"><h4><span class="glyphicon glyphicon-list"></span> &nbsp; View Applications</h4></a>
    	<a href="searchpage.php" class="whitetext"><h4><span class="glyphicon glyphicon-search"></span> &nbsp; Search</h4></a>
    	<a href="logout.php" class="whitetext"><h4><span class="glyphicon glyphicon-eject"></span> &nbsp; Logout</h4></a>

    	
    	
    </div>
    
     <!-- Search pane -->
    <div id="search-navigate" class="col-lg-10 bgwhite menu-template">
    	<div class="col-lg-4">
    		<div class="panel panel-default">
    			<!-- Search by buttons -->
    			<h4 align="center">Search By:</h4>
    			<button class="btn btn-info" onclick="showform('#search_oscaid')">OSCA ID Number</button>
    			<button class="btn btn-info" onclick="showform('#search_name')">Name</button>
    			<button class="btn btn-info" onclick="showform('#search_barangay')">Barangay</button>
    			<button class="btn btn-info" onclick="showform('#search_civilstat')">Civil Status</button>
    			<button class="btn btn-info" onclick="showform('#search_gender')">Gender</button>
    			<button class="btn btn-info" onclick="showform('#search_educattain')">Educational Attn.</button>
    			<button class="btn btn-info" onclick="showform('#search_yrsres')">Years of Residency</button>
    		</div>

    		<!-- Search by OSCA ID -->
    		<form  id="search_oscaid" role="search" method="post" >
	    		<input type="hidden" name="searchby" value="OSCA ID number"></input>
	     			<input class="form-control" type="text" placeholder="OSCA ID Number" name="itemsearch" autofocus></input>
	    		<button class="btn btn-default" type="submit">Search</button>
    		</form>

    		<!-- Search by name -->
    		<form id="search_name" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Name"></input>
	     			<input class="form-control" type="text" placeholder="Name" name="itemsearch"></input>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

    		<!-- Search by barangay -->
    		<form  id="search_barangay" role="search" method="post" action="private-files/searchresults.php">
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

    		<!-- Search by civil status -->
    		<form id="search_civilstat" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Civil Status"></input>
	     			<select name="itemsearch" class="form-control" required="">
					<option value="Single">Single</option>
					<option value="Married">Married</option>
					<option value="Widowed">Widowed</option>
					<option value="Divorced">Divorced</option>

				</select>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

    		<!-- Search by gender -->
    		<form id="search_gender" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Gender"></input>
	     			<select name="itemsearch" class="form-control" required="">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

    		<!-- Search by educational attainment -->
    		<form id="search_educattain" role="search" method="post" action="private-files/searchresults.php">
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

    		<!-- Search by years of residency -->
    		<form  id="search_yrsres" role="search" method="post" action="private-files/searchresults.php">
	    		<input type="hidden" name="searchby" value="Years of Residency"></input>
	     			<input class="form-control" type="text" placeholder="Years of Residency" name="itemsearch"></input>
	    		<button class="btn btn-default" type="submit" >Search</button>
    		</form>

     
        </div>
        <!-- Output results -->
        <div class="col-lg-8">
        	<div id="results">
        	</div>
        </div>

    	
    </div>