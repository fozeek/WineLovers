$(document).ready(function() {

	$('.col-md-4 .remove').on('click', function() {
		var $that = $(this);
		var request = $.ajax({
			url: "/me/remove-wishlist-wine",
			type: "POST",
			data: { id : $that.attr('data-id') },
			dataType: "html"
		});
		 
		request.done(function( msg ) {
   			$that.parent().hide();
   		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});

});