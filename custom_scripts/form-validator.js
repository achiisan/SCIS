
	$(document).ready(function(){
   
     $.validate({
    form : '#form-application',
   
    onError : function() {

      $("#myModal").modal('hide');
      $("#errtxt1").removeClass('hidden');
     
    },
    onSuccess : function() {
     
      
        $('#result').html("<p>Please wait...submitting form</p>");
    
    },
   
    });

     $("#button").click(function(){
        $('#myModal').modal('show');
	
		});

      
	});

