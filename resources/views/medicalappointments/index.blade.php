<?php $menuc_open = 'open'; $nav_con = 'active'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-xs-12">
    <h2 class="header smaller lighter green">Consultas</h2>

    <div class="pull-left">
      <a class="btn btn-default" href="{{ URL::to('medicalappointments/create') }}"><i class="ace-icon fa fa-file-text-o"></i> Iniciar Consulta</a>
    </div>

    <div class="clearfix">
      <div class="pull-right tableTools-container"></div>
    </div>
    @include('flash::message')
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
            <th class="center">Cód.</th>
            <th><i class="fa fa-calendar"></i> Data e hora</th>
            <th><i class="fa fa-user-md"></i> Profissional</th>
            <th><i class="fa fa-user"></i> Paciente</th>
            <th><i class=""></i> Descrição</th>

            <th class="center" ><i class="ace-icon fa fa-file bigger-120"></i> Avaliações</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          @foreach ($medicalappointments as $medicalappointment)
          <tr>

            <td class="center">{{ $medicalappointment->id }}</td>
            <td>{{ $medicalappointment->date_mu->format('d/m/Y') }} às {{ $medicalappointment->hour }}</td>
            <td>{{ $medicalappointment->professional->person->name }}</td>
            <td>{{ $medicalappointment->patient->person->name }}</td>
            <td>{{ $medicalappointment->description }}</td>

            <td class="center" >
              <a class="btn btn-xs btn-secundary" href="{{ URL::to('postural/create/'. $medicalappointment->id ) }}">
                Postural
              </a>

              <a class="btn btn-xs btn-secundary" href="{{ URL::to('neurological/create/'. $medicalappointment->id ) }}">
                Neurológica
              </a>

            </td>

            <td>
              <div class="hidden-sm hidden-xs btn-group">
                {!! Form::open(['url'=>'medicalappointments/'.$medicalappointment->id,'method'=>'post','class'=>'delete']) !!}
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <a class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="bottom" title="Visualizar" href="{{ URL::to('medicalappointments/'. $medicalappointment->id) }}">
                  <i class="ace-icon fa fa-check bigger-120"></i>
                </a>

                <a class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="bottom" title="Alterar Consulta" href="{{ URL::to('medicalappointments/'. $medicalappointment->id .'/edit') }}">
                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                </a>

                <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="bottom" title="Excluir Consulta" ><i class="ace-icon fa fa-trash-o bigger-120"></i></button>
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

      {{ Form::open(array('url' => 'medicalappointments/' . @$medicalappointment->id, 'id' => 'form-delete')) }}
        {{ Form::hidden('_method', 'DELETE') }}

      {{ Form::close() }}

    </div>
  </div>
</div>

@stop

@push('page-script')

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
									 // enfoque optimista (antes de borrar oculto la fila
									 row.fadeOut(function () {
											 $.post(url, data, function (result) {
													 alert(result);
											 }).fail(function () {
													 alert('Paciente excluído!');
													//  row.show();
											 });
									 });
							 }
							 else {
									 return false;
							 }
					 })


	/***************/
	$('.show-details-btn').on('click', function(e) {
		e.preventDefault();
		$(this).closest('tr').next().toggleClass('open');
		$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
	});
	/***************/

	//initiate dataTables plugin
	var myTable =
	$('#dynamic-table')
	//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
	.DataTable( {
		select: 'single',
		"language": {
					"lengthMenu": "Mostrar _MENU_ registros por página",
					"info": "Mostrando pág. _PAGE_ de _PAGES_ ",
					"sInfoEmpty": "Sem registros",
					"infoFiltered": "(filtrado do total de _MAX_ registros)",
					"search": "Buscar: ",
					"sZeroRecords": "Sem pacientes cadastrados",
					"sSelectInfo" : "_MAX_ linha selecionada",
					"select": {
						"rows": " - %d linha selecionada"
					},
					"snext":"Próximo",
					"previous":"Anterior"
				},
		bAutoWidth: false,

		"aoColumns": [

			null, null,null, null, null,
      { "bSortable": false },
      { "bSortable": false }
		],

		"aaSorting": [],

		select: {
			style: 'single'
		}
		} );

		function format (  ) {
    // `d` is the original data object for the row
    return '<div class="table-detail">'+

							'</div>';

	}

	// Add event listener for opening and closing details
	 $('#dynamic-table tbody').on('click', 'td.details-control', function () {
			 var tr = $(this).closest('tr');
			 var row = myTable.row( tr );

			 if ( row.child.isShown() ) {
					 // This row is already open - close it
					 row.child.hide();
					 tr.removeClass('details');
			 }
			 else {
					 // Open this row
					 row.child( format(row) ).show();
					 tr.addClass('details');
			 }
	 } );


	$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

	new $.fn.dataTable.Buttons( myTable, {
		buttons: [
			{
			"extend": "colvis",
			"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Mostrar/ocultar colunas</span>",
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
			message: 'Clínica Bem Estar'
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


})


</script>

@endpush
