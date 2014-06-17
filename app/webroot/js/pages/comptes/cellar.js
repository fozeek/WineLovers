$(document).ready(function() {


	$('.addnotebtn').on('click', function() {
		var addNote = $('#addNote');
		addNote.find('.winename').html($(this).attr('data-name'));
		$('#addNote').find('.winename').attr('data-id', $(this).attr('data-id'));
	});
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



	$('#addWine').on('hidden.bs.modal', function (e) {
	  
		$('#step2').hide();
		$('#step1').show();
		$('#step2submit').hide();
		$('#step1submit').show();
	})

	$('.updatestockbtn').on('click', function() {
		$('#update').find('.winename').html($(this).attr('data-name'));
		$('#update').find('.winename').attr('data-id', $(this).attr('data-id'));
		$('#update').find('.qty').val($(this).attr('data-qty'));
		$('#update').find('.qty').attr('data-original', $(this).attr('data-qty'));
		$('#update').find('.vintage').val($(this).attr('data-vintage'));
		$('#update').find('.vintage').attr('disabled','disabled');
	});

	$('.addstockbtn').on('click', function() {
		$('#update').find('.winename').html($(this).attr('data-name'));
		$('#update').find('.winename').attr('data-id', $(this).attr('data-id'));
		$('#update').find('.qty').val('');
		$('#update').find('.qty').attr('data-original', 0);
	});

	$('#update').on('hidden.bs.modal', function (e) {
	  	$(this).find('.qty').val($(this).attr('data-qty'));
		$(this).find('.qty').attr('data-original', 0);
		$(this).find('.vintage').val('');
		$(this).find('.vintage').removeAttr('disabled');
	})

	$('#updateSubmit').on('click', function() {

		// calcule nombre
		var qty = $("#update .qty").val() - $("#update .qty").attr('data-original');

		var id = $('#update .winename').attr('data-id');
		var vintage = $('#update .vintage').val();

		var request = $.ajax({
			url: "/me/add-cellar-wine",
			type: "POST",
			data: { ids : id, qtys : qty, millesimes : vintage },
			dataType: "html"
		});
		 
		request.done(function( msg ) {
   			window.location.reload();
   		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});
	});

	$('#step1submit').on('click', function() {
		$('#step1').hide();
		$('#step2').show();
		$(this).hide();
		$('#step2submit').show();
	});

	$('#step2submit').on('click', function() {
		
		var winesIds = '';
		var winesQtys = '';
		var WinesMillesimes = '';

		$('#step2 .selectedWine').each(function() {
			winesIds += ':' + $(this).attr('data-id');
			winesQtys += ':' + $(this).find('.qty').val();
			WinesMillesimes += ':' + $(this).find('.millesime').val();
		})

		var request = $.ajax({
			url: "/me/add-cellar-wine",
			type: "POST",
			data: { ids : winesIds, qtys : winesQtys, millesimes : WinesMillesimes },
			dataType: "html"
		});
		 
		request.done(function( msg ) {
   			window.location.reload();
   		});
		 
		request.fail(function( jqXHR, textStatus ) {
		  alert( "Request failed: " + textStatus );
		});


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
		    step2Html.find('.new').removeClass('new');
		}
		else {
			$(this).removeClass('selected');
			$(this).css('border-color', '#ddd');
			$(this).css('background', 'white');
			$(this).find('h3').css('color', 'rgb(128, 0, 0)');
			$('#ids').val($('#ids').val().replace(':'+$(this).attr('data-id'), ''));
			
			var step2Html = $('#step2');
			step2Html.find('div[data-id='+$(this).attr('data-id')+']').remove();
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