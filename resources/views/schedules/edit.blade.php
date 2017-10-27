<?php $nav_sch = 'active'; ?>
@extends('layout/layout')

@section('content')
<div class="page-header">
  <h1>
    Editar
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Paciente
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="row">
  @include('flash::message')
  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif
  @if($errors->any())
  <div class="alert alert-danger">Existem dados incorretos no formulário!</div>
  @endif
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->

    {!! Form::open([
      'route' => ['schedules.update', $schedule->id],
      'method' => 'PUT',
      'class' => 'form-horizontal']) !!}

      @include('schedules/_form')

      {!! Form::close() !!}

    </div>
  </div>
  @endsection

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
