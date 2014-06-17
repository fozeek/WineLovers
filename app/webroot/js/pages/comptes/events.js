
$(document).ready(function() {

	$("#eventcreatebtn").on('click', function() {
		$that = $("#createEvent");
		console.log($that.find("#eventname").val());

					console.log($that.find("#eventdesc").val());

					console.log($that.find("#eventdate").val());

					console.log($that.find("#eventlocation").val());

					console.log($that.find(".eventprivacy:checked").val());
			
			var request = $.ajax({
				url: "/me/add-event",
				type: "POST",
				data: {
					name : $that.find("#eventname").val(),
					desc : $that.find("#eventdesc").val(),
					date : $that.find("#eventdate").val(),
					where : $that.find("#eventlocation").val(),
					privacy : $that.find(".eventprivacy:checked").val()
				},
				dataType: "html"
			});
			
			request.done(function( msg ) {
   				window.location.reload();
			});
			
			request.fail(function( jqXHR, textStatus ) {
			  alert( "Request failed: " + textStatus );
			});
	});

});