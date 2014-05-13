$(document).ready(function() {
	
	var addAsFriends = function() {

		$('.add-as-friend').mouseenter(function() {
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
	   	$('.add-as-friend').mouseleave(function() {
	   			
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
		   	$('.add-as-friend').click(function() {

			   		if($(this).hasClass('btn-default')) {

						var $that = $(this);
						$that.unbind('click');

			   			var request = $.ajax({
							url: "/me/addFriend",
							type: "POST",
							data: { id : $(this).find('span:last').attr('data-id') },
							dataType: "html"
						});
						 
						request.done(function( msg ) {
				   			$that.addClass('btn-success');
				   			$that.removeClass('btn-default');
				   			$that.find('span:first').removeClass('hidden');
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
						  url: "/me/removeFriend",
						  type: "POST",
						  data: { id : $that.find('span:last').attr('data-id') },
						  dataType: "html"
						});
						 
						request.done(function( msg ) {
						    $that.removeClass('btn-warning');
					   		$that.addClass('btn-danger');
					   		$that.find('span:last').html($that.find('span:last').attr('data-remove'));
					   		window.setTimeout(function() {
				   				$('.add-as-friend').css('transition-duration', '2s');
					   			$('.add-as-friend').removeClass('btn-danger');
					   			$('.add-as-friend').addClass('btn-default');
					   			$('.add-as-friend').find('span:first').addClass('hidden');
					   			$('.add-as-friend').find('span:last').html($('.add-as-friend').find('span:last').attr('data-original'));
				   				$('.add-as-friend').find('span:first').removeClass('glyphicon-remove');
				   				$('.add-as-friend').find('span:first').addClass('glyphicon-ok');
					   			$('.add-as-friend').blur();
				   				window.setTimeout(function() {	
				   					$('.add-as-friend').css('transition-duration', '');
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
	addAsFriends();
});