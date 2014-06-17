$(document).ready(function() {
	
	$('.accept-request').on('click', function() {
		var $that = $(this);
		var request = $.ajax({
			url: "/me/add-friend",
			type: "POST",
			data: { id : $that.attr('data-id') },
			dataType: "html"
		});
		 
		request.done(function( msg ) {
			console.log(msg);
   			$that.parent().parent().html('Requete acceptée');
   			$('#friendsList').append(msg)
   		});
		 
		request.fail(function( jqXHR, textStatus ) {
			console.log(textStatus);
		  alert( "Request failed: " + textStatus );
		});
	});

	$('.decline-request').on('click', function() {
		var $that = $(this);
		var request = $.ajax({
			url: "/me/remove-friend-request",
			type: "POST",
			data: { id : $that.attr('data-id') },
			dataType: "html"
		});
		 
		request.done(function( msg ) {
			$('#counterRequest').html(parseInt($('#counterRequest').html())-1);
   			$that.parent().parent().html('Requete refusée');
   		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});

	$('#friendsList .remove').on('click', function() {
		var $that = $(this);
		var request = $.ajax({
			url: "/me/remove-friend",
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