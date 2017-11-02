<?php $nav_proc = 'active'; $menuc_open = 'active open';?>
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
$(document).ready(function(){
	var now = new Date();
	var day = ("0" + now.getDate()).slice(-2);
	var month = ("0" + (now.getMonth() + 1)).slice(-2);
	var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
	$('#datePicker').val(today);
})
</script>
@endpush
