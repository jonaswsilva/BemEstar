<?php $nav_sch = 'active'; $local= 'pacientes';?>
@extends('layout/layout')

@section('content')

<div class="page-header">
  <h1>
    Calendário
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      with draggable and editable events
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="pull-right">
  <a class="btn btn-info" href="{{ URL::to('schedules/all') }}"><i class="ace-icon fa fa-calendar"></i>Todos</a>
  <a class="btn btn-default" href="{{ URL::to('schedules/create') }}"><i class="ace-icon fa fa-calendar-plus-o"></i>Novo Agendamento</a>
</div>
<div class="row">
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <div class="row">
      <div class="col-sm-9">
        <div class="space"></div>

        <div id="calendar"></div>
      </div>

      <div class="col-sm-3">
        <div class="widget-box transparent">
          <div class="widget-header">
            <h4>Draggable events</h4>
          </div>

          <div class="widget-body">
            <div class="widget-main no-padding">
              <div id="external-events">
                <div class="external-event label-grey" data-class="label-grey">
                  <i class="ace-icon fa fa-arrows"></i>
                  My Event 1
                </div>

                <div class="external-event label-success" data-class="label-success">
                  <i class="ace-icon fa fa-arrows"></i>
                  My Event 2
                </div>

                <div class="external-event label-danger" data-class="label-danger">
                  <i class="ace-icon fa fa-arrows"></i>
                  My Event 3
                </div>

                <div class="external-event label-purple" data-class="label-purple">
                  <i class="ace-icon fa fa-arrows"></i>
                  My Event 4
                </div>

                <div class="external-event label-yellow" data-class="label-yellow">
                  <i class="ace-icon fa fa-arrows"></i>
                  My Event 5
                </div>

                <div class="external-event label-pink" data-class="label-pink">
                  <i class="ace-icon fa fa-arrows"></i>
                  My Event 6
                </div>

                <div class="external-event label-info" data-class="label-info">
                  <i class="ace-icon fa fa-arrows"></i>
                  My Event 7
                </div>

                <label>
                  <input type="checkbox" class="ace ace-checkbox" id="drop-remove" />
                  <span class="lbl"> Remove after drop</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PAGE CONTENT ENDS -->
  </div><!-- /.col -->
</div><!-- /.row -->

@stop

@push('page-script')

<script type="text/javascript">
  jQuery(function($) {


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


//     calendar = $('#calendar').fullCalendar({
//     ignoreTimezone: false,
//     monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
//     monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
//     dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'],
//     dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
//     titleFormat: {
//         month: 'MMMM yyyy',
//         week: "d[ MMMM][ yyyy]{ - d MMMM yyyy}",
//         day: 'dddd, d MMMM yyyy'
//     },
//     columnFormat: {
//         month: 'ddd',
//         week: 'ddd d',
//         day: ''
//     },
//     axisFormat: 'H:mm',
//     timeFormat: {
//         '': 'H:mm',
//         agenda: 'H:mm{ - H:mm}'
//     },
//     buttonText: {
//         prev: "&nbsp;&#9668;&nbsp;",
//         next: "&nbsp;&#9658;&nbsp;",
//         prevYear: "&nbsp;&lt;&lt;&nbsp;",
//         nextYear: "&nbsp;&gt;&gt;&nbsp;",
//         today: "Hoje",
//         month: "Mês",
//         week: "Semana",
//         day: "Dia"
//     }
// });

		/* initialize the calendar
		-----------------------------------------------------------------*/

		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();


		var calendar = $('#calendar').fullCalendar({
		//isRTL: true,
		//firstDay: 1,// >> change first day of week

    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'],
    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],

		buttonHtml: {
		  prev: '<i class="ace-icon fa fa-chevron-left"></i>',
		  next: '<i class="ace-icon fa fa-chevron-right"></i>',
		},
    buttonText: {

            today: "Hoje",
            month: "Mês",
            week: "Semana",
            day: "Dia"
        },

		header: {
		  left: 'prev,next today',
		  center: 'title',
		  right: 'month,agendaWeek,agendaDay'
		},
		events: [
		  {
		  title: 'Evento todo o dia',
		  start: new Date(y, m, 1),
		  className: 'label-important'
		  },
		  {
		  title: 'Evento longo',
		  start: moment().subtract(5, 'days').format('YYYY-MM-DD'),
		  end: moment().subtract(1, 'days').format('YYYY-MM-DD'),
		  className: 'label-success'
		  },
		  {
		  title: 'Algum evento',
		  start: new Date(y, m, d-3, 16, 0),
		  allDay: false,
		  className: 'label-info'
		  }
		]
		,

		/**eventResize: function(event, delta, revertFunc) {

		  alert(event.title + " end is now " + event.end.format());

		  if (!confirm("is this okay?")) {
		    revertFunc();
		  }

		},*/

		editable: true,
		droppable: true, // this allows things to be dropped onto the calendar !!!
		drop: function(date) { // this function is called when something is dropped

		  // retrieve the dropped element's stored Event Object
		  var originalEventObject = $(this).data('eventObject');
		  var $extraEventClass = $(this).attr('data-class');


		  // we need to copy it, so that multiple events don't have a reference to the same object
		  var copiedEventObject = $.extend({}, originalEventObject);

		  // assign it the date that was reported
		  copiedEventObject.start = date;
		  copiedEventObject.allDay = false;
		  if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];

		  // render the event on the calendar
		  // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
		  $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

		  // is the "remove after drop" checkbox checked?
		  if ($('#drop-remove').is(':checked')) {
		    // if so, remove the element from the "Draggable Events" list
		    $(this).remove();
		  }

		}
		,
		selectable: true,
		selectHelper: true,
		select: function(start, end, allDay) {

		  bootbox.prompt("Novo Evento:", function(title) {
		    if (title !== null) {
		      calendar.fullCalendar('renderEvent',
		        {
		          title: title,
		          start: start,
		          end: end,
		          allDay: allDay,
		          className: 'label-info'
		        },
		        true // make the event "stick"
		      );
		    }
		  });


		  calendar.fullCalendar('unselect');
		}
		,
		eventClick: function(calEvent, jsEvent, view) {

		  //display a modal
		  var modal =
		  '<div class="modal fade">\
		    <div class="modal-dialog">\
		     <div class="modal-content">\
		     <div class="modal-body">\
		       <button type="button" class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>\
		       <form class="no-margin">\
		        <label>Mudar nome do evento &nbsp;</label>\
		        <input class="middle" autocomplete="off" type="text" value="' + calEvent.title + '" />\
		       <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Salvar</button>\
		       </form>\
		     </div>\
		     <div class="modal-footer">\
		      <button type="button" class="btn btn-sm btn-danger" data-action="delete"><i class="ace-icon fa fa-trash-o"></i> Excluir Evento</button>\
		      <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancelar</button>\
		     </div>\
		    </div>\
		   </div>\
		  </div>';


		  var modal = $(modal).appendTo('body');
		  modal.find('form').on('submit', function(ev){
		    ev.preventDefault();

		    calEvent.title = $(this).find("input[type=text]").val();
		    calendar.fullCalendar('updateEvent', calEvent);
		    modal.modal("hide");
		  });
		  modal.find('button[data-action=delete]').on('click', function() {
		    calendar.fullCalendar('removeEvents' , function(ev){
		      return (ev._id == calEvent._id);
		    })
		    modal.modal("hide");
		  });

		  modal.modal('show').on('hidden', function(){
		    modal.remove();
		  });


		  //console.log(calEvent.id);
		  //console.log(jsEvent);
		  //console.log(view);

		  // change the border color just for fun
		  //$(this).css('border-color', 'red');

		}

		});



})
</script>


@endpush
