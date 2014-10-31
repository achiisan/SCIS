$(document).ready(function() {
	//Hide Search Elements for menu
	$('#menu-navigate').hide();
	$('#search_name').hide();
	$('#search_barangay').hide();
	$('#search_civilstat').hide();
	$('#search_gender').hide();
	$('#search_educattain').hide();
	$('#search_yrsres').hide();
	$('#search-navigate').hide();
	//Hide search elements for search page
	$('#search_name2').hide();
	$('#search_barangay2').hide();
	$('#search_civilstat2').hide();
	$('#search_gender2').hide();
	$('#search_educattain2').hide();
	$('#search_yrsres2').hide();
	$('#search-navigate2').hide();

	//menu button toggle
	$('#menubtn').click(function(){
			$('#menu-navigate').toggle(1000);



	});

	//search button toggle
	$('#searchbtn').click(function(){
			$('#search-navigate').toggle(1000);



	});

	//signup application toggle
	$('#signup').click(function(){
			$('#modal-signup').modal('show');



	});

	//THE following codes are AJAX Validation scripts for Search Functions
	//FROM LINE 48 - 216 Uses the AJAX Validation Plugin

		
		$("#search_oscaid").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_oscaid").serialize(), function(data) {
					$('#results').html(data);

				});

			}
		});

		$("#search_name").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_name").serialize(), function(data) {
					$('#results').html(data);

				});

			}
		});

		$("#search_barangay").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_barangay").serialize(), function(data) {
					$('#results').html(data);

				});

			}
		});

		$("#search_civilstat").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_civilstat").serialize(), function(data) {
					$('#results').html(data);

				});

			}
		});

		$("#search_gender").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_gender").serialize(), function(data) {
					$('#results').html(data);

				});

			}
		});


		$("#search_educattain").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_educattain").serialize(), function(data) {
					$('#results').html(data);

				});

			}
		});

		$("#search_yrsres").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_yrsres").serialize(), function(data) {
					$('#results').html(data);

				});

			}
		});

		$("#search_oscaid2").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_oscaid2").serialize(), function(data) {
					$('#results2').html(data);

				});

			}
		});

		$("#search_name2").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_name2").serialize(), function(data) {
					$('#results2').html(data);

				});

			}
		});

		$("#search_barangay2").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_barangay2").serialize(), function(data) {
					$('#results2').html(data);

				});

			}
		});

		$("#search_civilstat2").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_civilstat2").serialize(), function(data) {
					$('#results2').html(data);

				});

			}
		});

		$("#search_gender2").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_gender2").serialize(), function(data) {
					$('#results2').html(data);

				});

			}
		});


		$("#search_educattain2").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_educattain2").serialize(), function(data) {
					$('#results2').html(data);

				});

			}
		});

		$("#search_yrsres2").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/searchresults.php', $("#search_yrsres2").serialize(), function(data) {
					$('#results2').html(data);

				});

			}
		});

		//toggle view mode on view all functions
		$("#view-as").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/viewall.php', $("#view-as").serialize(), function(data) {
					$('#result').html(data);

				});

			}
		});

		//signup validation (NOT WORKING)
		$("#signup-now").validate({
			
			submitHandler: function(form) {
				
				$.post('private-files/register.php', $("#signup-now").serialize(), function(data) {
					$('#signup-toggle').html(data);

				});

			}
		});


	
});



	
	function showform($formtype){
		$('#menu-navigate').hide();
		$('#search_oscaid').hide();
		$('#search_name').hide();
		$('#search_barangay').hide();
		$('#search_civilstat').hide();
		$('#search_gender').hide();
		$('#search_educattain').hide();
		$('#search_yrsres').hide();

		$('#menu-navigate2').hide();
		$('#search_oscaid2').hide();
		$('#search_name2').hide();
		$('#search_barangay2').hide();
		$('#search_civilstat2').hide();
		$('#search_gender2').hide();
		$('#search_educattain2').hide();
		$('#search_yrsres2').hide();
	
		$($formtype).toggle(1000);
	}

	function submit($form){
		

	}

	function  modalshow($id_beli) {
		$("#modalinfo").modal('show');
		$.ajax({
      cache: false,
      type: 'GET',
      url: 'private-files/displayinfo.php',
      data: 'SC_IDNO=' + $id_beli,
      success: function(data) {
      	
        $('#modalContent').html(data); //this part to pass the var
      }
  });
	}