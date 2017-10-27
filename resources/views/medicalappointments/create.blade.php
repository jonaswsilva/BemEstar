<?php $nav_con = 'active'; $menuc_open = 'active open'; ?>
@extends('layout/layout')

@section('content')

<div class="row">

  <div class="col-sm-10 col-md-offset-1">

    <div class="widget-box">
      <div class="widget-header widget-header-flat">
        <h4 class="widget-title purple">Dados da consulta</h4>
        
      </div>

      <div class="widget-body">
        <div class="widget-main">
          <div class="row">
            <div class="">
              {{ Form::open(array('route' => 'medicalappointments.store', 'class' => 'form-horizontal')) }}

              {{ Form::token() }}

              @include('medicalappointments/_form')

              {!! Form::close() !!}
            </div>
          </div>

        </div>
      </div>
    </div>
  </div><!-- /.col -->
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


	$('#date-timepicker1').datetimepicker({
	 format: 'L LT',//use this option to display seconds
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
