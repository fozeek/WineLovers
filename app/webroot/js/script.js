$(document).ready(function() {

	$("#joinevent").on('click', function() {
		var eventId = $(this).attr('data-id');
			console.log('click');

		var request = $.ajax({
			url: "/me/join-event",
			type: "POST",
			data: {
				id : eventId
			},
			dataType: "html"
		});
		
		request.done(function( msg ) {
			console.log('msg');
			$("#joinevent").hide();
			$("#leaveevent").show();
		});
		
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});

	$("#leaveevent").on('click', function() {
		var eventId = $(this).attr('data-id');

		var request = $.ajax({
			url: "/me/leave-event",
			type: "POST",
			data: {
				id : eventId
			},
			dataType: "html"
		});
		
		request.done(function( msg ) {
			$("#joinevent").show();
			$("#leaveevent").hide();
		});
		
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});

	$('#addObjectToPost .tab input').on('keyup', function() {
		var $that = $(this).parent();
		var value = $(this).val();
		
		var request = $.ajax({
			url: "/post/more-" + $that.find('.paginator').attr('data-object'),
			type: "POST",
			data: {
				page : 1,
				id : $that.find('.paginator').attr('data-id'),
				value : value
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
	$('#addObjectToPost .tab .results').on('scroll', function() {
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
						value : $that.find('input').val()
					},
					dataType: "html"
				});
				
				request.done(function( msg ) {
					if(msg.trim()=='') {
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


	var $scrollModule = true;
	document.addEventListener( 'scroll',function (event) {
	    if ( $('#load-more').length && $scrollModule && window.scrollY >= document.body.scrollHeight - window.innerHeight )
	    {
	    	
	    	$scrollModule = false;
	        var request = $.ajax({
				url: "/post/more-posts",
				type: "POST",
				data: {
					page : $('#load-more').attr('data-page'),
					object : $('#load-more').attr('data-object'),
					conditions : $('#load-more').attr('data-conditions'),
					id : $('#load-more').attr('data-id')
				},
				dataType: "html"
			});

			$('#load-more').attr('data-page', parseInt($('#load-more').attr('data-page')) + 1);
			 
			request.done(function( msg ) {
				if(msg.trim()=='') {
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
	});

	$('#addObjectToPost .nav-tabs li').on('click', function() {
		$('#addObjectToPost').find('.tab').hide();
		$('#addObjectToPost').find('.tab-' + $(this).attr('data-tab')).show();
	});
	$('#addObjectToPost').on('click', '.thumbnail', function() {
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
});