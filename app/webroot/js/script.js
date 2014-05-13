$(document).ready(function() {
	var $scrollModule = true;

	$('#testou').on('scroll', function() {
		var top = $(this).children('.row').position().top;
		var height = $(this).children('.row').height();
		var parentHeight = $(this).height();
		if(parentHeight >= height + top) {
			console.log('bottom');
		}
	})

	document.addEventListener( 'scroll',function (event) {

	    if ( $scrollModule && window.scrollY >= document.body.scrollHeight - window.innerHeight )
	    {
	    	$scrollModule = false;
	    	console.log('load..');
	        var request = $.ajax({
				url: "/post/more-posts",
				type: "POST",
				data: {
					page : $('#load-more').attr('data-page'),
					object : $('#load-more').attr('data-object'),
					id : $('#load-more').attr('data-id')
				},
				dataType: "html"
			});

			$('#load-more').attr('data-page', parseInt($('#load-more').attr('data-page')) + 1);
			 
			request.done(function( msg ) {
				if(msg=='') {
	    		console.log('stop..');
	    			$('#load-more').hide();
					$scrollModule = false;
					return;
				}
	   			$('.posts-container').append(msg);
				$scrollModule = true;
			});
			 
			request.fail(function( jqXHR, textStatus ) {
			  alert( "Request failed: " + textStatus );
			});
	    }
	} );

	$('#addObjectToPost .nav-tabs li').on('click', function() {
		$('#addObjectToPost').find('.tab').hide();
		$('#addObjectToPost').find('.tab-' + $(this).attr('data-tab')).show();
	});
	$('#addObjectToPost .thumbnail').on('click', function() {
		var $form = $('#post-form');
		$form.find('.addSomething').html('<span class="glyphicon glyphicon-'+$(this).attr('data-image')+'" style="margin-right: 10px;" />' + $(this).attr('data-name'));
		$form.find('.removeSomething').show();
		$form.find('.attach_object').val($(this).attr('data-object'));
		$form.find('.attach_id').val($(this).attr('data-id'));
		$('#addObjectToPost').modal('hide');
	});

	$('#post-form .removeSomething').on('click', function() {
		var $form = $('#post-form');
		$form.find('.addSomething').html('Ajouter');
		$form.find('.removeSomething').hide();
		$form.find('.attach_object').val('');
		$form.find('.attach_id').val('');
		return false;
	});




	$('body').on('focus', '#post-form textarea, .comment-form textarea', function() {
		if($(this).val() == $(this).attr('data-val')) {
			$(this).val('');
		}
		$(this).height('120px');
		$(this).parent().find('.addSomething').show();
		$(this).parent().find('button[type=submit]').show();
	});

	$('#post-form button[type=submit]').on('click', function() {
		var $form = $('#post-form');

		var text = $form.find('.text');
		var link_id = $form.find('.link_id');
		var link_object = $form.find('.link_object');
		var attach_object = $form.find('.attach_object');
		var attach_id = $form.find('.attach_id');
		
		if(text.val().trim() !='') {

			var request = $.ajax({
				url: "/post/create-post",
				type: "POST",
				data: {
					text : text.val().trim(),
					link_id : link_id.val(),
					link_object : link_object.val(),
					attach_object : attach_object.val(),
					attach_id : attach_id.val(),
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

			$form.find('.addSomething').html('Ajouter');
			$form.find('.removeSomething').hide();
			$form.find('.attach_object').val('');
			$form.find('.attach_id').val('');

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
				url: "/post/comment-post",
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