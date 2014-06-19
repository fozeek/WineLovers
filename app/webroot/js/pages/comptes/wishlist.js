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


	$('#addWine input').on('keyup', function() {
		var $that = $(this).parent();
		var value = $(this).val();
		
		var request = $.ajax({
			url: "/post/more-" + $that.find('.paginator').attr('data-object'),
			type: "POST",
			data: {
				page : 1,
				id : $that.find('.paginator').attr('data-id'),
				value : value,
				ids: $('#ids').val()
			},
			dataType: "html"
		});
		
		request.done(function( msg ) {
    		$that.find('.paginator').attr('data-page', 2);
		    $that.find('.paginator').hide();
   			$that.children('.row').html(msg);
			$scrollModuleObject = true;
			if(msg.trim()=='') {
				$that.children('.nodata').show();
			}
			else {
				$that.children('.nodata').hide();
			}
		});
		
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});

	var $scrollModuleObject = true;
	$('#addWine .results').on('scroll', function() {
		if($scrollModuleObject) {
			$scrollModuleObject = false;
			var top = $(this).children('.row').position().top;
			var height = $(this).children('.row').height();
			var parentHeight = $(this).height();
			var $that = $(this);
			if(parentHeight >= (height + top - 30)) {

				var request = $.ajax({
					url: "/post/more-" + $that.find('.paginator').attr('data-object'),
					type: "POST",
					data: {
						page : $that.find('.paginator').attr('data-page'),
						id : $that.find('.paginator').attr('data-id'),
						value : $that.find('input').val(),
						ids: $('#ids').val()
					},
					dataType: "html"
				});
				
				request.done(function( msg ) {
					if(msg=='') {
		    			$that.find('.paginator').hide();
						$scrollModuleObject = false;
						return;
					}
					$that.find('.paginator').attr('data-page', parseInt($that.find('.paginator').attr('data-page')) + 1);
		   			$that.children('.row').append(msg);
					$scrollModuleObject = true;
				});
				
				request.fail(function( jqXHR, textStatus ) {
				  alert( "Request failed: " + textStatus );
				});
			}
			else {
				$scrollModuleObject = true;
			}
		}
	});

	$('#addWine').on('click', '.thumbnail', function() {
		if(!$(this).hasClass('selected')) {
			$(this).addClass('selected');
			$(this).css('border-color', 'blue');
			$(this).css('background', '#cedefd');
			$(this).find('h3').css('color', 'blue');
			$('#addWine').find('.ids').val($('#addWine').find('.ids').val()+':'+$(this).attr('data-id'));
		}
		else {
			$(this).removeClass('selected');
			$(this).css('border-color', '#ddd');
			$(this).css('background', 'white');
			$(this).find('h3').css('color', 'rgb(128, 0, 0)');
			$('#addWine').find('.ids').val($('#addWine').find('.ids').val().replace(':'+$(this).attr('data-id'), ''));
		}
	});


	$('#step1submit').on('click', function() {


		var winesIds = $("#addWine").find('.ids').val();

		var request = $.ajax({
			url: "/me/add-wishlist-wine",
			type: "POST",
			data: { ids : winesIds },
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