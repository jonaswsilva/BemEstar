<?php $nav_sch = 'active'; ?>

@extends('layout/layout')

@section('content')

				<div class="row">
					<div class="col-xs-12">
						<h3 class="header smaller lighter blue">Consultas Marcadas</h3>

						<div class="pull-left">
							<a class="btn btn-default" href="{{ URL::to('schedules/create') }}"><i class="ace-icon fa fa-user-plus"></i>Novo</a>
						</div>

						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>

						@if (Session::has('message'))
					    <div class="alert alert-{{ @$alert }}">{{ Session::get('message') }}</div>
					  @endif

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

										<th></th>
									</tr>
								</thead>

								<tbody>
									@foreach ($schedules as $schedule)
									<tr>

										<td class="center">{{ $schedule->id }}</td>
										<td>{{ $schedule->patient->person->name }} {{ $schedule->patient->person->lastname }}</td>
										<td>{{ $schedule->professional->person->name }}</td>
										<td>{{ $schedule->date }}</td>
										<td class="hour">{{ $schedule->hour }}</td>

										<td>
											<div class="hidden-sm hidden-xs btn-group">

												<a class="btn btn-xs btn-success" href="{{ URL::to('schedules/'.$schedule->id) }}">
													<i class="ace-icon fa fa-check bigger-120"></i>
												</a>

												<a class="btn btn-xs btn-info" href="{{ URL::to('schedules/'. $schedule->id .'/edit') }}" data-toggle="modal">
													<i class="ace-icon fa fa-pencil bigger-120"></i>
												</a>


												<a class="btn btn-xs btn-danger btn-delete" href="#">
													<i class="ace-icon fa fa-trash-o bigger-120"></i>
												</a>

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
							{{ Form::open(array('url' => 'schedules/' . @$schedule->id, 'id' => 'form-delete')) }}
								{{ Form::hidden('_method', 'DELETE') }}

							{{ Form::close() }}
						</div>
					</div>
				</div>

				<a href="#my-modal" role="button" class="bigger-125 bg-primary white" data-toggle="modal">
					&nbsp; Chamar modal &nbsp;
				</a>

				<div id="my-modal" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="smaller lighter blue no-margin">Esse modal aqui!</h3>
							</div>

							<div class="modal-body">
								Some content
								<br />
								<br />
								<br />
								<br />
								<br />
								1
								<br />
								<br />
								<br />
								<br />
								<br />
								2
							</div>

							<div class="modal-footer">
								<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
									<i class="ace-icon fa fa-times"></i>
									Close
								</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div>


@stop

@push('page-script')

<!-- inline scripts related to this page -->
<script type="text/javascript">
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
				"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
				"className": "btn btn-white btn-primary btn-bold",
				columns: ':not(:first):not(:last)'
				},
				{
				"extend": "copy",
				"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
				"className": "btn btn-white btn-primary btn-bold"
				},
				{
				"extend": "csv",
				"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
				"className": "btn btn-white btn-primary btn-bold"
				},
				{
				"extend": "excel",
				"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
				"className": "btn btn-white btn-primary btn-bold"
				},
				{
				"extend": "pdf",
				"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
				"className": "btn btn-white btn-primary btn-bold"
				},
				{
				"extend": "print",
				"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
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

<script type="text/javascript">
  jQuery(function($) {

$('.btn-delete').click(function(e){
		e.preventDefault();
		// confirmo que quiere borrar el cliente!
		var deleteClient = confirm('Deseja mesmo excluir este paciente?');
		if (deleteClient === true) {
				var row = $(this).closest('tr');
				//var id = row.attr('data-id');
				// non funka!: var row = $(this).parents('tr');
				var id = row.data('id');
				var form = $('#form-delete');
				var url = form.attr('action').replace(':USER_ID', id);
				var data = form.serialize();

				row.fadeOut(function () {
						$.post(url, data, function (result) {
								alert(result);
						}).fail(function () {
								alert('Il Cliente non è stato cancellato!');
								row.show();
						});
				});
		} else {
				return false;
		}
})

})

</script>
@endpush
