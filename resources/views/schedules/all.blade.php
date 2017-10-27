<?php $nav_sch = 'active'; ?>

@extends('layout/layout')

@section('content')

				<div class="row">
					<div class="col-xs-12">
						<h3 class="header smaller lighter blue">Consultas Marcadas</h3>

						<div class="pull-left">
							<a class="btn btn-default" href="{{ URL::to('schedules/create') }}"><i class="ace-icon fa fa-calendar-plus-o"></i> Nova Consulta</a>

						<a href="#my-modal" role="button" class="btn btn-default" data-toggle="modal"><i class="ace-icon fa fa-calendar-plus-o"></i> Nova Consulta</a>
						</div>
						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
						@include('flash::message')
						<div class="table-header">
							Resultado para Consultas
						</div>

						<!-- div.table-responsive -->

						<!-- div.dataTables_borderWrap -->
						<div>
							<table id="dynamic-table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">Id</th>
										<th><i class="fa fa-wheelchair"></i>Paciente</th>
										<th><i class="fa fa-user-md"></i>Profissional</th>
										<th><i class="ace-icon fa fa-calendar bigger-110 hidden-480"></i>Data</th>
										<th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Hora</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									@foreach ($schedules as $schedule)
									<tr>
										<td class="center">{{ $schedule->id }}</td>
										<td>{{ $schedule->patient->person->name }} {{ $schedule->patient->person->lastname }}</td>
										<td>{{ $schedule->professional->person->name }}</td>
										<td>{{ $schedule->date_mu->format('d/m/Y') }}</td>
										<td class="hour">{{ $schedule->hour }}</td>
										<td>{!! ($schedule->status == 1) ? "<span class='label label-warning'>Pendente</span>" : "<span class='label label-success'>Realizada</span>" !!}</td>
										<td>
											<div class="hidden-sm hidden-xs btn-group">
												{!! Form::open(['url'=>'schedules/'.$schedule->id,'method'=>'post','class'=>'delete']) !!}
								          {{ csrf_field() }}
								          {{ method_field('DELETE') }}
												<a class="btn btn-xs btn-success" href="{{ URL::to('schedules/'.$schedule->id) }}">
													<i class="ace-icon fa fa-check bigger-120"></i>
												</a>

												<a class="btn btn-xs btn-info" href="{{ URL::to('schedules/'. $schedule->id .'/edit') }}" data-toggle="modal">
													<i class="ace-icon fa fa-pencil bigger-120"></i>
												</a>

								          <button type="submit" class="btn btn-xs btn-danger btn-delete" ><i class="ace-icon fa fa-trash-o bigger-120"></i></button>
							        	{!! Form::close() !!}
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>
														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>
														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>

						</div>
					</div>
				</div>

				<div id="my-modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="smaller lighter blue no-margin">Nova Consulta!</h3>
							</div>

							<div class="modal-body">
								@include('flash::message')
								{{ Form::open(array('route' => 'schedules.store', 'class' => 'form-horizontal')) }}

											{{ Form::token() }}

											<div class="form-group">
												{!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
												<div class="col-sm-9">
													{!! Form::text('term', null, ['class' => 'col-xs-10 col-sm-8','id' => 'autoComplete', 'placeholder' => 'Paciente...']) !!}
													@if($errors->any())
													<div class="red darken-4">&nbsp &nbsp{!! $errors->first('term') !!}</div>
													@endif
												</div>
											</div>

											{!! Form::hidden('patient_id', null, ['id'=>'idPatient']) !!}

											<div class="form-group">
												{!! Form::label('form-field-5', 'Profissional:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
												<div class="col-sm-9">
													{!! Form::select('professional_id', $professionals, null,['id'=> 'state','class' => 'col-xs-10 col-sm-8']) !!}
												</div>
											</div>

											<div class="form-group">
												{!!  Form::label('form-field-1', 'Data: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
												<div class="col-sm-9">
													{!! Form::date('date', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Data...']) !!}
													@if($errors->any())
													<div class="red darken-4">&nbsp &nbsp{!! $errors->first('date') !!}</div>
													@endif
												</div>
											</div>

											<div class="form-group">
												{!!  Form::label('form-field-1', 'Hora: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
												<div class="col-sm-9">
													{!! Form::text('hour', null, ['class' => 'col-xs-10 col-sm-5 hour', 'id'=>'timepicker1', 'placeholder' => 'Hora...']) !!}
													@if($errors->any())
													<div class="red darken-4">&nbsp &nbsp{!! $errors->first('hour') !!}</div>
													@endif
												</div>
											</div>
							</div>

							<div class="modal-footer">
								<button class="btn btn-sm btn-info pull-right" type="submit">
									<i class="ace-icon fa fa-check bigger-110"></i>
									{{ $button }}
								</button>
								{!! Form::close() !!}
								<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
									<i class="ace-icon fa fa-times"></i>
									Sair
								</button>
							</div>

						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>


@stop

@push('page-script')

<!-- inline scripts related to this page -->
<script type="text/javascript">

		"@if (count($errors) > 0)"
			$(document).ready(function(){
				// Show the Modal on load
				$("#my-modal").modal("show");
			});
		"@endif"

	jQuery(function($) {
		//initiate dataTables plugin
		var myTable =
		$('#dynamic-table')
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.DataTable( {
			"language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nothing found - sorry",
            "info": "Mostrando pág. _PAGE_ de _PAGES_",
            "infoEmpty": "Sem registros",
            "infoFiltered": "(filtrado do total de _MAX_ registros)",
						"search": "Buscar: ",
						"snext":"Próximo",
						"previous":"Anterior"
	        },
			bAutoWidth: false,
			"aoColumns": [
				null, null, null,null, null,
				{ "bSortable": false }
			],
			"aaSorting": [],


			//"bProcessing": true,
					//"bServerSide": true,
					//"sAjaxSource": "http://127.0.0.1/table.php"	,

			//,
			//"sScrollY": "200px",
			//"bPaginate": false,

			//"sScrollX": "100%",
			//"sScrollXInner": "120%",
			//"bScrollCollapse": true,
			//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
			//you may want to wrap the table inside a "div.dataTables_borderWrap" element

			//"iDisplayLength": 50


			select: {
				style: 'multi'
			}

			} );


		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

		new $.fn.dataTable.Buttons( myTable, {
			buttons: [
				{
				"extend": "colvis",
				"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Mostrar/Ocultar Colunas</span>",
				"className": "btn btn-white btn-primary btn-bold",
				columns: ':not(:first):not(:last)'
				},
				{
				"extend": "copy",
				"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copiar</span>",
				"className": "btn btn-white btn-primary btn-bold"
				},
				{
				"extend": "csv",
				"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Exportar para CSV</span>",
				"className": "btn btn-white btn-primary btn-bold"
				},
				{
				"extend": "excel",
				"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Exportar para Excel</span>",
				"className": "btn btn-white btn-primary btn-bold"
				},
				{
				"extend": "pdf",
				"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Exportar para PDF</span>",
				"className": "btn btn-white btn-primary btn-bold"
				},
				{
				"extend": "print",
				"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Imprimir</span>",
				"className": "btn btn-white btn-primary btn-bold",
				autoPrint: false,
				message: 'This print was produced using the Print button for DataTables'
				}
			]
		} );
		myTable.buttons().container().appendTo( $('.tableTools-container') );

		//style the message box
		var defaultCopyAction = myTable.button(1).action();
		myTable.button(1).action(function (e, dt, button, config) {
			defaultCopyAction(e, dt, button, config);
			$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
		});


		var defaultColvisAction = myTable.button(0).action();
		myTable.button(0).action(function (e, dt, button, config) {

			defaultColvisAction(e, dt, button, config);


			if($('.dt-button-collection > .dropdown-menu').length == 0) {
				$('.dt-button-collection')
				.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
				.find('a').attr('href', '#').wrap("<li />")
			}
			$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
		});

		////

		setTimeout(function() {
			$($('.tableTools-container')).find('a.dt-button').each(function() {
				var div = $(this).find(' > div').first();
				if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
				else $(this).tooltip({container: 'body', title: $(this).text()});
			});
		}, 500);





		myTable.on( 'select', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
			}
		} );
		myTable.on( 'deselect', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
			}
		} );




		/////////////////////////////////
		//table checkboxes
		$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

		//select/deselect all rows according to table header checkbox
		$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header

			$('#dynamic-table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) myTable.row(row).select();
				else  myTable.row(row).deselect();
			});
		});

		//select/deselect a row when the checkbox is checked/unchecked
		$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
			var row = $(this).closest('tr').get(0);
			if(this.checked) myTable.row(row).deselect();
			else myTable.row(row).select();
		});





		$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});



		//And for the first simple table, which doesn't have TableTools or dataTables
		//select/deselect all rows according to table header checkbox
		var active_class = 'active';
		$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header

			$(this).closest('table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
				else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
			});
		});

		//select/deselect a row when the checkbox is checked/unchecked
		$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
			var $row = $(this).closest('tr');
			if($row.is('.detail-row ')) return;
			if(this.checked) $row.addClass(active_class);
			else $row.removeClass(active_class);
		});



		/********************************/
		//add tooltip for small view action buttons in dropdown menu
		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

		//tooltip placement on right or left
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();

			var off2 = $source.offset();
			//var w2 = $source.width();

			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}




		/***************/
		$('.show-details-btn').on('click', function(e) {
			e.preventDefault();
			$(this).closest('tr').next().toggleClass('open');
			$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
		});
		/***************/





		/**
		//add horizontal scrollbars to a simple table
		$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
			{
			horizontal: true,
			styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
			size: 2000,
			mouseWheelLock: true
			}
		).css('padding-top', '12px');
		*/


	})
</script>
@endpush
