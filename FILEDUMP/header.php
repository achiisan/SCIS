<?php
	session_start();
	if ($_SESSION['auth'] != 1) {
		header("Location: index.php?errcode=2"); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<?include "connectDB.php"?>
		<script src="custom_scripts/jquery-2.1.1.js"></script>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="custom_scripts/styler.css"/>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="custom_scripts/scis.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
	<button id="menu-toggle">
		<h3>SCIS.</h3>
	</button>	
     	 <ul id="menu-nav" class="nav navbar-nav whitetext">
            	<li><a href="form_newApplication.php" ><span class="glyphicon glyphicon-plus"></span>&nbsp;New Application </a></li>
	    	<li><a href="form_newApplication.php" ><span class="glyphicon glyphicon-plus"></span>&nbsp;View Applications </a></li>
		<li><a href="form_newApplication.php" ><span class="glyphicon glyphicon-plus"></span>&nbsp;Statistics </a></li>
		    <li><a href="form_newApplication.php" ><span class="glyphicon glyphicon-plus"></span>&nbsp;Generate I.D. </a></li>
           
          </ul>

          
          <form class="navbar-form navbar-right" role="search" method="post" action="searchresults.php">
            <div class="input-group">
				<span class="input-group-btn">
					<div class="input-default  input-group col-lg-11 col-xs-12 col-md-5">
					<span class="input-group-addon"><strong>Search by</strong></span>
					<select class="form-control" name="searchby" required="">
					<option value="OSCA ID number">OSCA ID number</option>
					<option value="Name">Name</option>
					<option value="Address">Address</option>
					<option value="Civil Status">Civil Status</option>
					<option value="Gender">Gender</option>
					<option value="Educational Attainment">Educational Attainment</option>
					<option value="Years of Residency">Years of Residency</option>
				</select><br>
				<input class="form-control" type="text" name="itemsearch">
				<button class="btn btn-default" type="submit">Submit</button>
				</div>
				</span>
            </div>
           
          </form>

          <!--</div>-->

      </div><!-- /.container-fluid -->
    </nav>
    <body id="login">
