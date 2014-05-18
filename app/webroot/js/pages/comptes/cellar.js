$(document).ready(function() {

	$('#addWine').on('hidden.bs.modal', function (e) {
	  
		$('#step2').hide();
		$('#step1').show();
	})

	$('#step2submit').on('click', function() {
		// var ids = $('#ids').val().split(':');
		// var tpl = $('#addWine').find('.template').html();
		// // step2
		// var step2Html = $('#step2');
		// ids.shift();
		// names.shift();
		// step2Html.html();
		// for (var id in ids) {
		//     step2Html.append(tpl);
		//     step2Html.find('.new').find('.name').html(names[id]);
		//     step2Html.find('.new').attr('data-id', ids[id]);
		//     step2Html.find('.new').removeClass('new');
		// }
		$('#step1').hide();
		$('#step2').show();
	});

	$('.col-md-4 .remove').on('click', function() {
		var $that = $(this);
		var request = $.ajax({
			url: "/me/remove-cellar-wine",
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

	$('#addWine').on('click', '.thumbnail', function() {
		if(!$(this).hasClass('selected')) {
			$(this).addClass('selected');
			$(this).css('border-color', 'blue');
			$(this).css('background', '#cedefd');
			$(this).find('h3').css('color', 'blue');
			$('#ids').val($('#ids').val()+':'+$(this).attr('data-id'));
			$('#names').val($('#names').val()+':'+$(this).attr('data-name'));
			//ajout a la liste
			var tpl = $('#addWine').find('.template').html();
			var step2Html = $('#step2');
			step2Html.append(tpl);
		    step2Html.find('.new').find('.name').html($(this).attr('data-name'));
		    step2Html.find('.new').attr('data-id', $(this).attr('data-id'));
		    step2Html.find('.new').find('.img').css('backgroundImage', $(this).find('.img').css('backgroundImage'));
		    step2Html.find('.new').removeClass('new');
		}
		else {
			$(this).removeClass('selected');
			$(this).css('border-color', '#ddd');
			$(this).css('background', 'white');
			$(this).find('h3').css('color', 'rgb(128, 0, 0)');
			$('#ids').val($('#ids').val().replace(':'+$(this).attr('data-id')+':', ':'));
			$('#names').val($('#names').val().replace(':'+$(this).attr('data-name')+':', ':'));
		}
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

});