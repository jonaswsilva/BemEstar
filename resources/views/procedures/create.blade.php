<?php $menuc_open = 'active open'; $nav_proc = 'active'; ?>
@extends('layout/layout')

@section('content')
<div class="page-header">
	<h1>
		Cadastro
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			procedimento
		</small>
	</h1>
</div><!-- /.page-header -->
<div class="row">
	@if($errors->any())
	<div class="alert alert-danger">Existem dados incorretos no formulário!</div>
	@endif
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		{{ Form::open(array('route' => 'procedures.store', 'class' => 'form-horizontal')) }}

		@include('procedures/_form')

		{!! Form::close() !!}

	</div>
</div>

@stop

@push('page-script')
<script src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script type="text/javascript">
$(function(){
	
 $( "#autoComplete" ).autocomplete({
	source: "{{ URL::to('schedules/autocomplete') }}",
	minLength: 1,
		select: function(event, ui) {
			$('#autoComplete').val(ui.item.value);
			$('#idPatient').val(ui.item.id);
		}
	});
});
</script>
@endpush
