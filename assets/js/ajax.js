function sendDate(id) {
	if($.trim(id)) {
		$.ajax({
			type: "GET",
			url: "intranet_dochadzka_functions.php",
			data: "date=" + id,
			success: function(result){
				$("#result").html(result);
			}
		});
	}
};

function saveData() {
	
	while($("td:hasClassPrefix:first").length) {
		$('table').find("td:hasClassPrefix:first").each(function(index) {
				
				user = $(this).parent().attr('id');
				start_index = $('input#month').val() + "-" + $(this).index();
				state = $(this).attr('class').split(' ')[1];
				
				console.log("User: " + user + " First Element index: " + start_index + " Status: " + state);
				
				act_cell = $(this);
				//console.log( next_cell.hasClass(state) );
				
				while( act_cell.next('td').hasClass(state) ) {
					act_cell.removeClass(state);
					act_cell = $(act_cell).next('td');
				}
				act_cell.removeClass(state);
				
				end_index = $('input#month').val() + "-" + $(act_cell).index();
				
				
				start_date = start_index.replace(/\-/g, '.');
				end_date = end_index.replace(/\-/g, '.'); 
				
				console.log("User: " + user + " Last Element index: " + end_index + " Status: " + state);
				
				console.log($('input#month').val());
				
				//var jsonString = JSON.stringify(dataString);
				
				$.ajax({
					method: "POST",
					url: "intranet_dochadzka_functions.php",
					data: { user_id: user, start: start_date, end: end_date, status: state }
				}).done(function( msg ) {
					console.log( "Data Saved " + msg );
					sendDate($('input#month').val());
					$('table#dochadzka tr td').removeClass(function(index,classes){
						var matches = classes.match(/\bactive\S+/ig);
						return (matches) ? matches.join(' ') : '';   
					});	
					$("#buttons").fadeOut( "normal" );
					$("#ToggleSwitchSample").toggleCheckedState(false);
				});
				
				
				//console.log($(this).parent().attr('id'));
		});
	}
	
	
}



$( document ).ready(function() {
	
	$("#ToggleSwitchSample").toggleSwitch();
	
	$.expr[':'].hasClassPrefix = function(obj){
				return ((/\bactive/).test(obj.className));
			};
	$.expr[':'].hasIdPrefix = function(obj){
				return ((/\bstate/).test(obj.id));
			};
	
	$('#ToggleSwitchSample').on('change', function() {
		if ($(this).is(':checked')) {
			
			
			
			$( "td:not([id='name'])" ).addClass( "pointer" );
			/*
			$( "td:not([id])" ).click(function() {
				$(this).toggleClass( "active" );
				
				
			});
			*/
			isMouseDown = false;
			
			
			$('table#dochadzka tr td').mousedown(function() {
				isMouseDown = true;
				tableRow = $(this).parent().index();
				state = $('select.sel').val();
				
				if($(this).hasClass("active" + state))
					$(this).removeClass("active" + state);
				else {
					$(this).removeClass(function(index,classes){
						var matches = classes.match(/\bactive\S+/ig);
						return (matches) ? matches.join(' ') : '';   
					});	
					$(this).addClass( "active" + state );
				}
				
				if ( $('td:hasClassPrefix').length ) {
					$("#buttons").fadeIn( "normal" );
				} else {
					$("#buttons").fadeOut( "normal" );
				}
			});
			
			$('table#dochadzka tr td').mouseup(function() {
				isMouseDown = false;
				$('body').click();
			});

			$('table#dochadzka tr td').mouseenter(function() {
				checkRow = $(this).parent().index();
				if(isMouseDown)
					if(tableRow == checkRow) {
						
						state = $('select.sel').val();
						
						if($(this).hasClass("active" + state))
							$(this).removeClass("active" + state);
						else {
							$(this).removeClass(function(index,classes){
								var matches = classes.match(/\bactive\S+/ig);
								return (matches) ? matches.join(' ') : '';   
							});	
							$(this).addClass( "active" + state );
						}
						
						if ( $('td:hasClassPrefix').length ) {
							$("#buttons").fadeIn( "normal" );
						} else {
							$("#buttons").fadeOut( "normal" );
						}
					}
			});
			
			$('#clear').click(function() {
				$('table#dochadzka tr td').removeClass(function(index,classes){
					var matches = classes.match(/\bactive\S+/ig);
					return (matches) ? matches.join(' ') : '';   
				});	
				$("#buttons").fadeOut( "normal" );
			});
			
			
			
			
		} else {
			sendDate($('input#month').val());
			$('table#dochadzka tr td').removeClass(function(index,classes){
				var matches = classes.match(/\bactive\S+/ig);
				return (matches) ? matches.join(' ') : '';   
			});	
			$("#buttons").fadeOut( "normal" );
					
		}
	});
	
	
	
	
	
});