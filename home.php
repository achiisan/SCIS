<!-- HOME PAGE -->
<?php
include "header.php"; //incllude navbar in this page
?>
			<!-- Adds a header that welcomes a user -->
			<div id="header-label" class="themebg yey col-xs-10 col-md-4 col-lg-4">
				
				<h1>Welcome <?php echo $_SESSION['login-user'];?>! </h1>	
				
				
			</div>

			<div id="header" class="col-xs-12 col-lg-12 col-md-12">
				<!-- If user has successfully submitted a form, alert the user, and clear the toggle checker -->
				<?php
					if ($_SESSION['HAS_INPUT'] == 1 ){
							echo '<p class="alert alert-success"><span class="glyphicon glyphicon-saved">&nbsp</span>Application has been Successfully Submitted!</p> ';
					}
						$_SESSION['HAS_INPUT'] = 0;
				?>
				
			<!-- Main Button for New Application -->
			<a href="form_newApplication.php">
			<div class="yey panel panel-default col-xs-6 col-md-3 col-lg-3">
				<div class="img-full">
				<img align="center" src="custom_scripts/img/edit.png"/>
				</div>
				<div class="themebg" align="center">
					<h3 >Add New Application</h3>
				</div>
			</div>
			</a>
			
			<!-- Main Button for View Application -->
			<a href="viewallapplications.php">
			<div class="yey panel panel-default col-xs-6 col-md-3 col-lg-3">
				<div class="img-full">
				<img src="custom_scripts/img/table.png"/>
				</div>
				<div class="themebg" align="center">
					<h3>View All Applications</h3>
				</div>
			</div>
			</a>

			<!-- Main Button for Search Application -->
			<a href="searchpage.php">
			<div class="yey panel panel-default col-xs-6 col-md-3 col-lg-3">
				<div class="img-full">
				<img src="custom_scripts/img/document.png"/>
				</div>
				<div class="themebg" align="center">
					<h3>Search for Applications</h3>
				</div>
			</div>
			</a>

		</div>

		<!-- Log Content Container -->
		<div id="main_content " class="col-xs-12 col-lg-8 col-md-8 ">
			

			<div id="log-panel" class="panel panel-default">
				<div class="panel-heading">Recent Activity</div>
				<?php include 'private-files/logtable.php';?>
			</div>
			
				
		</div>

		<!-- Sidebar that contains the date and the number of applicants registered -->
		<div id="main_content_slab" class="col-lg-4 col-xs-12 col-md-12">
			<div class="well">
				<h2>Hello! <?php echo "Today is " . date("l,") .' '. date("F d,Y") . "<br>"; ?> </h2>  
				<h2><?php include "private-files/SCISstatistics.php"; //Call the statistics compute page?></h2>
			</div>
		</div>
	</body>
</html>
