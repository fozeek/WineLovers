$(document).ready(function() {

	$('body').on('focus', '#post-form textarea, .comment-form textarea', function() {
		if($(this).val() == $(this).attr('data-val')) {
			$(this).val('');
		}
		$(this).height('120px');
		$(this).parent().find('button[type=submit]').show();
	});

	$('#post-form button[type=submit]').on('click', function() {
		var $form = $('#post-form');

		var text = $form.find('.text');
		var link_id = $form.find('.link_id');
		var link_object = $form.find('.link_object');
		
		if(text.val().trim() !='') {
			var request = $.ajax({
				url: "/me/createPost",
				type: "POST",
				data: {
					text : text.val().trim(),
					link_id : link_id.val(),
					link_object : link_object.val()
				},
				dataType: "html"
			});

			text.val('');
			 
			request.done(function( msg ) {
	   			$('.posts-container').prepend(msg);
	   			$('.new-post').slideDown('slow');
	   			$('.new-post').removeClass('new-post');
			});
			 
			request.fail(function( jqXHR, textStatus ) {
			  alert( "Request failed: " + textStatus );
			});
		}
		else {
			alert('Faut marquer quelque chose !');
		}

		return false;
	});

	$('body').on('click', '.comment-form button[type=submit]', function() {
		var $form = $(this).parent().parent();

		var text = $form.find('.text');
		var post_id = $form.find('.post_id');
		
		if(text.val().trim() !='') {
			var request = $.ajax({
				url: "/me/commentPost",
				type: "POST",
				data: {
					text : text.val().trim(),
					post_id : post_id.val()
				},
				dataType: "html"
			});

			text.val('');
			 
			request.done(function( msg ) {
				console.log('coucou');
				console.log($form.parent().find('.comments-container'));
	   			$form.parent().find('.comments-container').append(msg);
	   			$form.parent().find('.comments-container .new-comment').slideDown('slow');
	   			$form.parent().find('.comments-container .new-comment').removeClass('new-post');
			});
			 
			request.fail(function( jqXHR, textStatus ) {
			  alert( "Request failed: " + textStatus );
			});
		}
		else {
			alert('Faut marquer quelque chose !');
		}

		return false;
	});

	

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