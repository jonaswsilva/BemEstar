<?php $nav_contr = 'active'; ?>
@extends('layout/layout')

@section('content')
<div class="page-header">
	<h1>
		Gerar contrato para ?
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Selecione o paciente
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
		{{ Form::open(array('url' => 'contract/find','method'=>'post', 'class' => 'form-horizontal')) }}

    <div class="form-group">
      {!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
      <div class="col-sm-9">
        {!! Form::select('patient_id', $patients, null, ["class"=>"col-xs-10 col-sm-5", "id"=>"nameid","placeholder"=>"Selecione um paciente"]) !!}
      </div>
    </div>

    <div class="clearfix form-actions">
      <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-primary" type="submit">
          <i class="ace-icon fa fa-search bigger-110"></i>
          Gerar
        </button>

        <div class="widget-title purple pull-right">
          <h4>Profissional: {!! Auth::user()->name !!}</h4>
        </div>
    	</div>
      </div>

		{!! Form::close() !!}

	</div>
</div>
@endsection
