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
	   		bindClick();
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
		   			$(this).unbind('click');
		   			$(this).addClass('btn-success');
		   			$(this).removeClass('btn-default');
		   			$(this).find('span:first').removeClass('hidden');
		   			$(this).find('span:last').html($(this).find('span:last').attr('data-replace'));
		   			$(this).blur();
		   		}
		   		else if($(this).hasClass('btn-warning')) {
		   			$(this).unbind('click');

		   			$(this).removeClass('btn-warning');
			   		$(this).addClass('btn-danger');
			   		$(this).find('span:last').html($(this).find('span:last').attr('data-remove'));
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
		   		}
		   			
		   	});
		}

		bindClick();
	};
	addAsFriends();
});