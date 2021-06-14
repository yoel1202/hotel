$(document).ready(function() {

	    var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		/*  className colors
		
		className: default(transparent), important(red), chill(pink), success(green), info(blue)
		
		*/		
		
		  
		/* initialize the external events
		-----------------------------------------------------------------*/
	
		$('#external-events div.external-event').each(function() {
		
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};


			
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);
			
			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			
		});
	
	
		/* initialize the calendar
		-----------------------------------------------------------------*/
		
		var calendar =  $('#calendar').fullCalendar({
			header: {
				left: 'title',
				center: 'agendaDay,agendaWeek,month',
				right: 'prev,next today'
			},
			editable: true,
			firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
			selectable: true,
			defaultView: 'month',
			
			axisFormat: 'h:mm',
			columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
			allDaySlot: false,
			selectHelper: true,
			select: function(start, end, allDay) {
				
				$('#squarespaceModal').modal('show');
				$('#paciente').val("");
				$('#cedula').val("");
				$('#correo').val("");
				$('#telefono').val("");
	$('.fecha').val(start.getFullYear().toString()+"-"+getMonthFull(start)+"-"+getDayFull(start));
	
$( "#guardarcita" ).click(function() {
	
	var nombre = $('#nombre').val();
	

  var title =nombre+" "+$('#hora option:selected').val()+":00";
				if (title) {
guardarcita();
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start.getFullYear().toString()+"-"+getMonthFull(start)+"-"+getDayFull(start)+" "+$('#hora option:selected').val()+":00:00",
							end: start.getFullYear().toString()+"-"+getMonthFull(start)+"-"+getDayFull(start)+" "+$('#hora option:selected').val()+":30:00",
							allDay: false
						},

						true // make the event "stick"
					);
					
				}

				calendar.fullCalendar('unselect');
				start=null;
				end=null;
				allDay=null;
				title=null;

			
			$('#squarespaceModal').modal('hide');
});
				
				
			},
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped
			
				// retrieve the dropped element's stored Event Object
				var originalEventObject = $(this).data('eventObject');
				
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);
				
				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
				
				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}

				
			},
			
				

			
					
		});
		$.ajax({
    type: 'POST',
    url: 'mantenimiento.php',
    data: {key: 'cargarcitas',fecha:$('#fecha').val()}

  }).done(function ( data ) {
  	 var obj = JSON.parse(data);
 for (var i = 0; i < obj.length ; i++) {
 	
calendar.fullCalendar('renderEvent',
						{
							title: obj[i][0]+" "+obj[i][1]+":00",
							start: obj[i][2]+" "+obj[i][1]+":00:00",
							end: obj[i][2]+" "+obj[i][1]+":30:00",
							allDay: false	
						},

						true // make the event "stick"
					);
		        	       }
  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
		      
		        	       

		
	});

function getMonthFull(date){
	

	if (date.getMonth()>9) {
		return (date.getMonth()+1).toString();
	}else{
		return "0" + (date.getMonth() + 1).toString();
	}
	// body...
}
function getDayFull(date){
	

	if (date.getDate()>9) {
		return date.getDate().toString();
	}else{
		return "0" + date.getDate().toString();
	}
	// body...
}

function guardarcita(){
 
	  $.ajax({
    type: 'POST',
    url: 'mantenimiento.php',
    data: {key: 'insertarcita', nombre: $('#nombre').val(),apellidos: $('#apellidos').val(), cedula:  $('#cedula').val(),correo:$('#correo').val(),telefono:$('#telefono').val()
    ,hora:$('#hora option:selected').val(),motivo:$('#motivo').val(),duracion:$('#duracion').val(),estado:$('#estado option:selected').val(),fecha:$('#fecha').val()}

  }).done(function ( data ) {
 
alert(data);
  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
}
function cargarcitas()
{
 var datos;
	  $.ajax({
    type: 'POST',
    url: 'mantenimiento.php',
    data: {key: 'cargarcitas',fecha:$('#fecha').val()}

  }).done(function ( data ) {
 
datos= data;
  
  }).fail(function (jqXHR, textStatus, errorThrown){
   
  })
  return datos	;
}

