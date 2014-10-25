<!DOCTYPE html>
<html>
	<head>
		<?include "private-files/connectDB.php"?>
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
              <input type="text" name="fabric_id" class="form-control" placeholder="Search">
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit">Bebeq!</button>
		</span>
            </div>
           
          </form>

          <!--</div>-->

      </div><!-- /.container-fluid -->
    </nav>

