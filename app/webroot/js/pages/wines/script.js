$(document).ready(function() {


	$('#addNote .star').on('click', function() {
		$('#addNote .star').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
		for (var i = 1; i <= $(this).attr('data-val'); i++) {
			$('#addNote .star-'+i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
		};
		$(this).parent().attr('data-val', $(this).attr('data-val'));
	});
	$('#addnotesubmit').on('click', function() {

		var wineId = $('#addNote').find('.winename').attr('data-id');
		var note = $('#addNote .star').parent().attr('data-val');
		var comment = $('#addNote .comment').val();
		var vintage = $('#addNote .vintage').val();

		console.log(wineId, note, comment, vintage);

		var request = $.ajax({
			url: "/me/add-note",
			type: "POST",
			data: { wineId : wineId, note : note, comment : comment, vintage : vintage },
			dataType: "html"
		});
		 
		request.done(function( msg ) {
   			window.location.reload();
   		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});

	var addWishlistWine = function() {

		$('#addWishlistWine').mouseenter(function() {
	   		if($(this).hasClass('btn-success')) {
	   			$(this).addClass('btn-warning');
	   			$(this).removeClass('btn-success');
	   			$(this).find('span:last').html($(this).find('span:last').attr('data-over'));
	   			$(this).find('span:first').removeClass('glyphicon-ok');
	   			$(this).find('span:first').addClass('glyphicon-remove');
	   			$(this).blur();
	   			tempo = false;
	   		}
	   	});
	   	$('#addWishlistWine').mouseleave(function() {
	   			
	   		if($(this).hasClass('btn-success')) {
	   			bindClick();
	   		}
	   		if($(this).hasClass('btn-warning')) {
	   			$(this).addClass('btn-success');
	   			$(this).removeClass('btn-warning');
	   			$(this).find('span:last').html($(this).find('span:last').attr('data-replace'));
	   			$(this).find('span:first').removeClass('glyphicon-remove');
	   			$(this).find('span:first').addClass('glyphicon-ok');
	   			$(this).blur();
	   		}
	   	});

	   	var bindClick = function() {
		   	$('#addWishlistWine').click(function() {

			   		if($(this).hasClass('btn-default')) {
						var $that = $(this);
						$that.unbind('click');

			   			var request = $.ajax({
							url: "/me/add-wishlist-wine",
							type: "POST",
							data: { id : $(this).attr('data-id') },
							dataType: "html"
						});
						 
						request.done(function( msg ) {
				   			$that.addClass('btn-success');
				   			$that.removeClass('btn-default');
				   				$('#addWishlistWine').find('span:first').addClass('glyphicon-ok').removeClass('glyphicon-heart-empty');
				   			$that.find('span:last').html($that.find('span:last').attr('data-replace'));
				   			$that.blur();
						});
						 
						request.fail(function( jqXHR, textStatus ) {
						  alert( "Request failed: " + textStatus );
						});

			   			
			   		}
			   		else if($(this).hasClass('btn-warning')) {
			   			var $that = $(this);
			   			$that.unbind('click');

			   			var request = $.ajax({
						  url: "/me/remove-wishlist-wine",
						  type: "POST",
						  data: { id : $that.attr('data-id') },
						  dataType: "html"
						});
						 
						request.done(function( msg ) {
						    $that.removeClass('btn-warning');
					   		$that.addClass('btn-danger');
					   		$that.find('span:last').html($that.find('span:last').attr('data-remove'));
					   		window.setTimeout(function() {
				   				$('#addWishlistWine').css('transition-duration', '2s');
					   			$('#addWishlistWine').removeClass('btn-danger');
					   			$('#addWishlistWine').addClass('btn-default');
					   			$('#addWishlistWine').find('span:last').html($('#addWishlistWine').find('span:last').attr('data-original'));
				   				$('#addWishlistWine').find('span:first').removeClass('glyphicon-remove');
				   				$('#addWishlistWine').find('span:first').addClass('glyphicon-heart-empty');
					   			$('#addWishlistWine').blur();
				   				window.setTimeout(function() {	
				   					$('#addWishlistWine').css('transition-duration', '');
				   					bindClick();
				   				}, 2000);
					   		}, 1000);
						});
						 
						request.fail(function( jqXHR, textStatus ) {
						  alert( "Request failed: " + textStatus );
						});

			   			
			   		}
		   			
		   	});
		}

		bindClick();
	};
	addWishlistWine();

	var addCellarWine = function() {

		$('#addCellarWine').mouseenter(function() {
	   		if($(this).hasClass('btn-success')) {
	   			$(this).addClass('btn-warning');
	   			$(this).removeClass('btn-success');
	   			$(this).find('span:last').html($(this).find('span:last').attr('data-over'));
	   			$(this).find('span:first').removeClass('glyphicon-ok');
	   			$(this).find('span:first').addClass('glyphicon-remove');
	   			$(this).blur();
	   			tempo = false;
	   		}
	   	});
	   	$('#addCellarWine').mouseleave(function() {
	   			
	   		if($(this).hasClass('btn-success')) {
	   			bindClick();
	   		}
	   		if($(this).hasClass('btn-warning')) {
	   			$(this).addClass('btn-success');
	   			$(this).removeClass('btn-warning');
	   			$(this).find('span:last').html($(this).find('span:last').attr('data-replace'));
	   			$(this).find('span:first').removeClass('glyphicon-remove');
	   			$(this).find('span:first').addClass('glyphicon-ok');
	   			$(this).blur();
	   		}
	   	});

	   	var bindClick = function() {
		   	$('#addCellarWine').click(function() {

			   		if($(this).hasClass('btn-default')) {
			   			console.log('cocuou');
						var $that = $(this);
						$that.unbind('click');

			   			var request = $.ajax({
							url: "/me/add-cellar-wine",
							type: "POST",
							data: { id : $(this).attr('data-id') },
							dataType: "html"
						});
						 
						request.done(function( msg ) {
				   			$that.addClass('btn-success');
				   			$that.removeClass('btn-default');
				   				$('#addCellarWine').find('span:first').addClass('glyphicon-ok').removeClass('glyphicon-plus-sign');
				   			$that.find('span:last').html($that.find('span:last').attr('data-replace'));
				   			$that.blur();
						});
						 
						request.fail(function( jqXHR, textStatus ) {
						  alert( "Request failed: " + textStatus );
						});

			   			
			   		}
			   		else if($(this).hasClass('btn-warning')) {
			   			var $that = $(this);
			   			$that.unbind('click');

			   			var request = $.ajax({
						  url: "/me/remove-cellar-wine",
						  type: "POST",
						  data: { id : $that.attr('data-id') },
						  dataType: "html"
						});
						 
						request.done(function( msg ) {
						    $that.removeClass('btn-warning');
					   		$that.addClass('btn-danger');
					   		$that.find('span:last').html($that.find('span:last').attr('data-remove'));
					   		window.setTimeout(function() {
				   				$('#addCellarWine').css('transition-duration', '2s');
					   			$('#addCellarWine').removeClass('btn-danger');
					   			$('#addCellarWine').addClass('btn-default');
					   			$('#addCellarWine').find('span:last').html($('#addCellarWine').find('span:last').attr('data-original'));
				   				$('#addCellarWine').find('span:first').removeClass('glyphicon-remove');
				   				$('#addCellarWine').find('span:first').addClass('glyphicon-plus-sign');
					   			$('#addCellarWine').blur();
				   				window.setTimeout(function() {	
				   					$('#addCellarWine').css('transition-duration', '');
				   					bindClick();
				   				}, 2000);
					   		}, 1000);
						});
						 
						request.fail(function( jqXHR, textStatus ) {
						  alert( "Request failed: " + textStatus );
						});

			   			
			   		}
		   			
		   	});
		}

		bindClick();
	};
	addCellarWine();
});