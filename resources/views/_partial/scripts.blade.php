<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>

<script type="text/javascript">
if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<!-- <script src="assets/js/bootstrap.min.js"></script> -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('assets/js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sparkline.index.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>

<!-- ace scripts -->
<!-- <script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>-->
<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
<!-- <script src="{{ asset('assets/js/ace.min.js') }}"></script> -->


		<!-- page specific plugin scripts tables-->
		<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttons.flash.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttons.colVis.min.js') }}"></script>
		<script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>


		<!-- page specific plugin scripts calendar-->
		<script src="{{ asset('assets/js/moment.min.js') }}"></script>
		<script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootbox.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap-timepicker.min.js') }}"></script>

		<!-- ace scripts -->
		<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
		<script src="{{ asset('assets/js/ace.min.js') }}"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">

		// $(document).ready(function (){
    // var date = new Date().toISOString().substring(0, 10),
    //     field = document.querySelector('#date');
    // field.value = date;
    // console.log(field.value);
		//
		// });
		$(".delete").on("submit", function(){
        return confirm("Deseja realmente excluir?");
    });

		$('div.alert').not('.alert-important').delay(7000).fadeOut(350);

			$('#timepicker1').timepicker({
				template: 'modal',
				minuteStep: 1,
				showSeconds: false,
				showMeridian: false,
				disableFocus: true,
				icons: {
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down'
				}
			}).on('focus', function() {
				$('#timepicker1').timepicker('showWidget');
			}).next().on(ace.click_event, function(){
				$(this).prev().focus();
			});


		$(document).ready(function(){
			//$('.date').mask('00/00/0000');
			$('.hour').mask('00:00');
			$('.date_time').mask('00/00/0000 00:00:00');
			$('.cep').mask('00000-000');
			$('.phone').mask('(00) 0-0000-0000');
			$('.phonefix').mask('(00) 0000-0000');
			$('.rg').mask('00000000-0');
			$('.numbersessions').mask('0x');
			$('.actualsession').mask('0°');
			$('.mixed').mask('AAA 000-S0S');
			$('.cpf').mask('000.000.000-00', {reverse: true});
			$('.cnpj').mask('00.000.000/0000-00', {reverse: true});
			$('.money').mask('000.000.000.000.000,00', {reverse: true});
			$('.money2').mask("#.##0,00", {reverse: true});
			$('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
				translation: {
					'Z': {
						pattern: /[0-9]/, optional: true
					}
				}
			});
			$('.ip_address').mask('099.099.099.099');
			$('.percent').mask('##0,00%', {reverse: true});
			$('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
			$('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
			$('.fallback').mask("00r00r0000", {
				translation: {
					'r': {
						pattern: /[\/]/,
						fallback: '/'
					},
					placeholder: "__/__/____"
				}
			});
			$('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
		});


//função para estados e cidades
		// Get IDs for countries and cities
		var state_id = $('#state').val();
		var city_id = $('#city').val();

		// Country select
		$('#state').val(state_id).prop('selected', true);

		// Sync of cities
		cityUpdate(state_id);
		// Country change event
		$('#state').on('change', function (e) {
				var state_id = e.target.value;
				console.log(state_id);
				city_id = false;
				cityUpdate(state_id);
		});
		// Ajax Request for cities
		function cityUpdate(stateId) {
				$.get('{{ url('cities') }}/' + stateId + "'", function (data) {
						$('#city').empty();
						$.each(data, function (index, cities) {
								$('#city').append($('<option>', {
										value: cities.id,
										text: cities.name
								}));
						});
						if (city_id) {
								$('#city').val(city_id).prop('selected', true);
						}
				});
		}

		$( "#autoComplete" ).autocomplete({
		 	source: "{{ URL::to('schedules/autocomplete') }}",
		 	minLength: 1,
			 	select: function(event, ui) {
			 		$('#autoComplete').val(ui.item.value);
			 		$('#idPatient').val(ui.item.id);
			 	}
	 	});


		</script>

		<script type="text/javascript">
			jQuery(function($) {

				$('#simple-colorpicker-1').ace_colorpicker({pull_right:true}).on('change', function(){
					var color_class = $(this).find('option:selected').data('class');
					var new_class = 'widget-box';
					if(color_class != 'default')  new_class += ' widget-color-'+color_class;
					$(this).closest('.widget-box').attr('class', new_class);
				});


				// scrollables
				$('.scrollable').each(function () {
					var $this = $(this);
					$(this).ace_scroll({
						size: $this.attr('data-size') || 100,
						//styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
					});
				});
				$('.scrollable-horizontal').each(function () {
					var $this = $(this);
					$(this).ace_scroll(
					  {
						horizontal: true,
						styleClass: 'scroll-top',//show the scrollbars on top(default is bottom)
						size: $this.attr('data-size') || 500,
						mouseWheelLock: true
					  }
					).css({'padding-top': 12});
				});

				$(window).on('resize.scroll_reset', function() {
					$('.scrollable-horizontal').ace_scroll('reset');
				});


				$('#id-checkbox-vertical').prop('checked', false).on('click', function() {
					$('#widget-toolbox-1').toggleClass('toolbox-vertical')
					.find('.btn-group').toggleClass('btn-group-vertical')
					.filter(':first').toggleClass('hidden')
					.parent().toggleClass('btn-toolbar')
				});

				/**
				//or use slimScroll plugin
				$('.slim-scrollable').each(function () {
					var $this = $(this);
					$this.slimScroll({
						height: $this.data('height') || 100,
						railVisible:true
					});
				});
				*/


				/**$('.widget-box').on('setting.ace.widget' , function(e) {
					e.preventDefault();
				});*/

				/**
				$('.widget-box').on('show.ace.widget', function(e) {
					//e.preventDefault();
					//this = the widget-box
				});
				$('.widget-box').on('reload.ace.widget', function(e) {
					//this = the widget-box
				});
				*/

				//$('#my-widget-box').widget_box('hide');



				// widget boxes
				// widget box drag & drop example
			    $('.widget-container-col').sortable({
			        connectWith: '.widget-container-col',
					items:'> .widget-box',
					handle: ace.vars['touch'] ? '.widget-title' : false,
					cancel: '.fullscreen',
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'widget-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					start: function(event, ui) {
						//when an element is moved, it's parent becomes empty with almost zero height.
						//we set a min-height for it to be large enough so that later we can easily drop elements back onto it
						ui.item.parent().css({'min-height':ui.item.height()})
						//ui.sender.css({'min-height':ui.item.height() , 'background-color' : '#F5F5F5'})
					},
					update: function(event, ui) {
						ui.item.parent({'min-height':''})
						//p.style.removeProperty('background-color');


						//save widget positions
						var widget_order = {}
						$('.widget-container-col').each(function() {
							var container_id = $(this).attr('id');
							widget_order[container_id] = []


							$(this).find('> .widget-box').each(function() {
								var widget_id = $(this).attr('id');
								widget_order[container_id].push(widget_id);
								//now we know each container contains which widgets
							});
						});

						ace.data.set('demo', 'widget-order', widget_order, null, true);
					}
			    });


				///////////////////////

				//when a widget is shown/hidden/closed, we save its state for later retrieval
				$(document).on('shown.ace.widget hidden.ace.widget closed.ace.widget', '.widget-box', function(event) {
					var widgets = ace.data.get('demo', 'widget-state', true);
					if(widgets == null) widgets = {}

					var id = $(this).attr('id');
					widgets[id] = event.type;
					ace.data.set('demo', 'widget-state', widgets, null, true);
				});


				(function() {
					//restore widget order
					var container_list = ace.data.get('demo', 'widget-order', true);
					if(container_list) {
						for(var container_id in container_list) if(container_list.hasOwnProperty(container_id)) {

							var widgets_inside_container = container_list[container_id];
							if(widgets_inside_container.length == 0) continue;

							for(var i = 0; i < widgets_inside_container.length; i++) {
								var widget = widgets_inside_container[i];
								$('#'+widget).appendTo('#'+container_id);
							}

						}
					}


					//restore widget state
					var widgets = ace.data.get('demo', 'widget-state', true);
					if(widgets != null) {
						for(var id in widgets) if(widgets.hasOwnProperty(id)) {
							var state = widgets[id];
							var widget = $('#'+id);
							if
							(
								(state == 'shown' && widget.hasClass('collapsed'))
								||
								(state == 'hidden' && !widget.hasClass('collapsed'))
							)
							{
								widget.widget_box('toggleFast');
							}
							else if(state == 'closed') {
								widget.widget_box('closeFast');
							}
						}
					}


					$('#main-widget-container').removeClass('invisible');


					//reset saved positions and states
					$('#reset-widgets').on('click', function() {
						ace.data.remove('demo', 'widget-state');
						ace.data.remove('demo', 'widget-order');
						document.location.reload();
					});

				})();

			});
		</script>
