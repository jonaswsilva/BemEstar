<?php $nav_sch = 'active'; ?>
@extends('layout/layout')

@section('content')
<div class="page-header">
	<h1>
		Agendamento
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			consultas
		</small>
	</h1>
</div><!-- /.page-header -->
<div class="row">
	@include('flash::message')
	@if($errors->any())
	<div class="alert alert-danger">Existem dados incorretos no formulário!</div>
	@endif
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->

		{{ Form::open(array('route' => 'schedules.store', 'class' => 'form-horizontal')) }}

		@include('schedules/_form')

		{!! Form::close() !!}

	</div>
</div>

@stop

@push('page-script')
<script src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('assets/js/moment/locale/pt-br.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>



<script type="text/javascript">
$(function(){

	$('#timepicker1').timepicker({
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
		var now = new Date();
		var day = ("0" + now.getDate()).slice(-2);
		var month = ("0" + (now.getMonth() + 1)).slice(-2);
		var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
		$('#datePicker').val(today);
	})


	$('#date-timepicker1').datetimepicker({
	 format: 'LL LT',//use this option to display seconds
	 locale: 'pt-br',
	 icons: {
		time: 'fa fa-clock-o',
		date: 'fa fa-calendar',
		up: 'fa fa-chevron-up',
		down: 'fa fa-chevron-down',
		previous: 'fa fa-chevron-left',
		next: 'fa fa-chevron-right',
		today: 'fa fa-arrows ',
		clear: 'fa fa-trash',
		close: 'fa fa-times'
	}
	});

});



</script>

@endpush
