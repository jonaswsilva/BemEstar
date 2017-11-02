<?php $nav_session = 'active'; ?>
@extends('layout/layout')

@section('content')

<div class="page-header">
	<h1>
		Sessão
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Descrição do que foi realizado
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
		{{ Form::open(array('url' => 'medicalrecords/session/store', 'class' => 'form-horizontal')) }}

    {!! Form::hidden('medicalrecord_id', $medicalrecord->id ) !!}
		<div class="form-group">
      {!!  Form::label('form-field-1', 'Sessão: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
      <div class="col-sm-9 align-bottom">
        <span class="badge badge-info"><h6>{!! $medicalrecord->actual_session +1 !!} de {!! $medicalrecord->number_of_sessions !!}</h6></span>
      </div>
    </div>

		{!! Form::hidden('number_of_session', $medicalrecord->actual_session +1) !!}

    <div class="form-group">
      {!!  Form::label('form-field-1', 'Data: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
      <div class="col-sm-9">
        {!! Form::date('date', null, ['class' => 'col-xs-10 col-sm-5', "id"=>"datePicker"]) !!}
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{!! $errors->first('date') !!}</div>
        @endif
      </div>
    </div>

    <div class="form-group">
      {!!  Form::label('form-field-1', 'Hora: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
      <div class="col-sm-9">
        {!! Form::text('hour', null, ['class' => 'col-xs-10 col-sm-5 hour', 'id'=>'timepicker1', 'placeholder' => 'Hora...'])	 !!}
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{!! $errors->first('hour') !!}</div>
        @endif
      </div>
    </div>

    <div class="form-group">
      {!!  Form::label('form-field-1', 'Descrição: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
      <div class="col-sm-9">
        {!! Form::textarea('description', null, ['size' => '40x10','class' => 'col-xs-8 col-sm-5 description', 'placeholder' => 'Foi realizado...']) !!}
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
        @endif
      </div>
    </div>

    <div class="clearfix form-actions">
      <div class="col-md-offset-3 col-md-9">

    		<a class="btn btn-warning" href="{{ URL::to('medicalrecords/session/find') }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
          &nbsp; &nbsp; &nbsp;
        <button class="btn btn-primary" type="submit">
          <i class="ace-icon fa fa-check bigger-110"></i>
          Salvar
        </button>
				<div class="widget-title purple pull-right">
          <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paciente: {!! $medicalrecord->patient->person->name !!}</h4>
        </div>

        <div class="widget-title purple pull-right">
          <h4>Profissional: {!! Auth::user()->name !!}</h4>
        </div>
    	</div>
      </div>

		{!! Form::close() !!}

	</div>
</div>
@stop

@push('page-script')
<script src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script type="text/javascript">
$(function(){

	$(document).ready(function(){
    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
    $('#datePicker').val(today);
  })

});

</script>
@endpush
