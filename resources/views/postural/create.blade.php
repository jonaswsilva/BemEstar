<?php $nav_con = 'active'; $menuc_open = 'active open'; ?>
@extends('layout/layout')

@section('content')

<div class="col-xs-12">
  <!-- PAGE CONTENT BEGINS -->

  <div class="widget-box">
    <div class="widget-header widget-header-purple widget-header-flat">
      <h4 class="widget-title lighter">Avaliação Postural</h4>

    </div>
<div class="hr hr-18 hr-double dotted"></div>
    <div class="row">
        <div class=" hr-18"></div>
        <div class="col-6 col-sm-4">{!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_name', $medicalappointment->patient->person->name, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
        <div class="col-6 col-sm-4">{!!  Form::label('form-field-1', 'Rg: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_cpf', $medicalappointment->patient->person->rg, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
        <div class="col-6 col-sm-4">{!!  Form::label('form-field-1', 'Cpf: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_cpf', $medicalappointment->patient->person->cpf, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
      </div>

      <div class="row">
          <div class=" hr-18"></div>
          <div class="col-6 col-sm-5">{!!  Form::label('form-field-1', 'Professional: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_name', $medicalappointment->professional->person->name, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
          <div class="col-6 col-sm-4">{!!  Form::label('form-field-1', 'CRM: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_cpf', $medicalappointment->professional->crm, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
        </div>

<div class="hr hr-18 hr-double dotted"></div>

    <div class="widget-body">
      <div class="widget-main">
        <div id="fuelux-wizard-container">
          <div>
            <ul class="steps">
              <li data-step="1" class="active">
                <span class="step">1</span>
                <span class="title">Vista Posterior</span>
              </li>

              <li data-step="2">
                <span class="step">2</span>
                <span class="title">Vista Anterior</span>
              </li>

              <li data-step="3">
                <span class="step">3</span>
                <span class="title">Vista Lateral</span>
              </li>

              <li data-step="4">
                <span class="step">4</span>
                <span class="title">Avaliação Completa</span>
              </li>


            </ul>
          </div>

          <hr />

          <div class="step-content pos-rel">

            <div class="step-pane active" data-step="1">
              <h3 class="lighter block green">Vista Posterior</h3>



                {!! Form::open(['route' => 'postural.store', 'method' => 'post' ,'class' => 'form-horizontal']) !!}

                {!! Form::hidden('medicalappointment_id', @$medicalappointment->id, ['id'=>'idMedical']) !!}

                <div class="form-group">
                  <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Anamnese:</label>

                  <div class="col-xs-12 col-sm-9">
                    <div class="clearfix">
                      <textarea class="input-xlarge" name="comment" id="comment"></textarea>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                	{!! Form::label('head', 'Cabeça: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('head', 'Normal', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Normal</span>
                		</label>
                		<label>
                			{!! Form::radio('head', 'Inclinada D', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Inclinada D</span>
                		</label>
                    <label>
                			{!! Form::radio('head', 'Inclinada E', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Inclinada E</span>
                		</label>
                    <label>
                			{!! Form::radio('head', 'Rodada D', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Rodada D</span>
                		</label>
                    <label>
                			{!! Form::radio('head', 'Rodada E', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Rodada E</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('cerv', 'Cervical: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('cerv', 'Normal', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Normal</span>
                		</label>
                		<label>
                			{!! Form::radio('cerv', 'Inclinada D', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Inclinada D</span>
                		</label>
                    <label>
                			{!! Form::radio('cerv', 'Inclinada E', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Inclinada E</span>
                		</label>
                    <label>
                			{!! Form::radio('cerv', 'Rodada D', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Rodada D</span>
                		</label>
                    <label>
                			{!! Form::radio('cerv', 'Rodada E', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Rodada E</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('omb', 'Ombros: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('omb', 'Normal', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Normal</span>
                		</label>
                		<label>
                			{!! Form::radio('omb', 'Elevado D', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Elevado D</span>
                		</label>
                    <label>
                			{!! Form::radio('omb', 'Elevado E', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Elevado E</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('escd', 'Escápula Direita: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('escd', 'Normal', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Normal</span>
                		</label>
                		<label>
                			{!! Form::radio('escd', 'Báscula L', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Báscula L</span>
                		</label>
                    <label>
                			{!! Form::radio('escd', 'Báscula M', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Báscula M</span>
                		</label>
                    <label>
                			{!! Form::radio('escd', 'Alada', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Alada</span>
                		</label>
                    <label>
                			{!! Form::radio('escd', 'Abduzida', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Abduzida</span>
                		</label>
                    <label>
                			{!! Form::radio('escd', 'Aduzida', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Aduzida</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('esce', 'Escápula Esquerda: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('esce', 'Normal', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Normal</span>
                		</label>
                		<label>
                			{!! Form::radio('esce', 'Báscula L', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Báscula L</span>
                		</label>
                    <label>
                			{!! Form::radio('esce', 'Báscula M', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Báscula M</span>
                		</label>
                    <label>
                			{!! Form::radio('esce', 'Alada', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Alada</span>
                		</label>
                    <label>
                			{!! Form::radio('esce', 'Abduzida', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Abduzida</span>
                		</label>
                    <label>
                			{!! Form::radio('esce', 'Aduzida', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Aduzida</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('dorsp', 'Dorsal: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('dorsp', 'Normal', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Normal</span>
                		</label>
                		<label>
                			{!! Form::radio('dorsp', 'Escoliose S', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Escoliose S</span>
                		</label>
                    <label>
                			{!! Form::radio('dorsp', 'Escoliose C', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Escoliose C</span>
                		</label>
                    <label>
                			{!! Form::radio('dorsp', 'Retificada', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Retificada</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('tritp', 'Trângulo de Talles: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('tritp', 'Simétricos', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Simétricos</span>
                		</label>
                		<label>
                			{!! Form::radio('tritp', 'Assimétricos D', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Assimétricos D</span>
                		</label>
                    <label>
                			{!! Form::radio('tritp', 'Assimétricos E', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Assimétricos E</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('tritp') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('gmach', 'Golpe do Machado: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('gmach', 'Simétricos', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Simétricos</span>
                		</label>
                		<label>
                			{!! Form::radio('gmach', 'Assimétricos D', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Assimétricos D</span>
                		</label>
                    <label>
                			{!! Form::radio('gmach', 'Assimétricos E', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Assimétricos E</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('crip', 'Cristas Ilíacas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('crip', 'Simétricas', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Simétricas</span>
                		</label>
                		<label>
                			{!! Form::radio('crip', 'Elevação D', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Elevação D</span>
                		</label>
                    <label>
                			{!! Form::radio('crip', 'Elevação E', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Elevação E</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('preg', 'Pregas Glúteas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="radio">
                		<label>
                			{!! Form::radio('preg', 'Simétricas', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Simétricas</span>
                		</label>
                		<label>
                			{!! Form::radio('preg', 'Elevação D', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Elevação D</span>
                		</label>
                    <label>
                			{!! Form::radio('preg', 'Elevação E', null, ['class' => 'ace']) !!}
                			<span class="lbl"> Elevação E</span>
                		</label>
                	</div>
                	@if($errors->any())
                	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                	@endif
                </div>

                <div class="form-group">
                	{!! Form::label('form-field-5', 'Joelhos:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
                	<div class="col-sm-9">
                		{!! Form::select('joel', ['Normal' => 'Normal',
                                                  'Rotação Interna D' => 'Rotação Interna D', 'Rotação Interna E' => 'Rotação Interna E',
                                                  'Rotação Externa D' => 'Rotação Externa D', 'Rotação Externa E' => 'Rotação Externa E',
                                                  'Valgo D' => 'Valgo D', 'Valgo E' => 'Valgo E',
                                                  'Varo D' => 'Varo D', 'Varo E' => 'Varo E' ],
                    null,['id'=> 'joel','class' => 'col-xs-10 col-sm-5']) !!}
                	</div>
                </div>

                <div class="form-group">
                  {!! Form::label('pregp', 'Pregas Poplíteas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  <div class="radio">
                    <label>
                      {!! Form::radio('pregp', 'Simétricas', null, ['class' => 'ace']) !!}
                      <span class="lbl"> Simétricas</span>
                    </label>
                    <label>
                      {!! Form::radio('pregp', 'Elevação D', null, ['class' => 'ace']) !!}
                      <span class="lbl"> Elevação D</span>
                    </label>
                    <label>
                      {!! Form::radio('pregp', 'Elevação E', null, ['class' => 'ace']) !!}
                      <span class="lbl"> Elevação E</span>
                    </label>
                  </div>
                  @if($errors->any())
                  <div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  @endif
                </div>

                <div class="form-group">
                  {!! Form::label('retrop', 'Retro-Pé: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  <div class="radio">
                    <label>
                      {!! Form::radio('retrop', 'Normal D', null, ['class' => 'ace']) !!}
                      <span class="lbl"> Normal D</span>
                    </label>
                    <label>
                      {!! Form::radio('retrop', 'Normal E', null, ['class' => 'ace']) !!}
                      <span class="lbl"> Normal E</span>
                    </label>
                    <label>
                      {!! Form::radio('retrop', 'Valgo D', null, ['class' => 'ace']) !!}
                      <span class="lbl"> Valgo D</span>
                    </label>
                    <label>
                      {!! Form::radio('retrop', 'Valgo E', null, ['class' => 'ace']) !!}
                      <span class="lbl"> Valgo E</span>
                    </label>
                    <label>
                      {!! Form::radio('retrop', 'Varo D', null, ['class' => 'ace']) !!}
                      <span class="lbl"> Varo D</span>
                    </label>
                    <label>
                      {!! Form::radio('retrop', 'Varo E', null, ['class' => 'ace']) !!}
                      <span class="lbl"> Varo E</span>
                    </label>
                  </div>
                  @if($errors->any())
                  <div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  @endif
                </div>


            </div>

            <div class="step-pane" data-step="2">
              <div>

                <h3 class="lighter block green">Vista Anterior</h3>




                  <div class="form-group">
                  	{!! Form::label('heada', 'Cabeça: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('heada', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('heada', 'Inclinada D', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Inclinada D</span>
                  		</label>
                      <label>
                  			{!! Form::radio('heada', 'Inclinada E', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Inclinada E</span>
                  		</label>
                      <label>
                  			{!! Form::radio('heada', 'Rodada D', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Rodada D</span>
                  		</label>
                      <label>
                  			{!! Form::radio('heada', 'Rodada E', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Rodada E</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('clava', 'Clavículas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('clava', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('clava', 'Alterações', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Alterações</span>
                  		</label>

                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('gladc', 'Gladil Costal: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                      <label>
                  			{!! Form::radio('gladc', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('gladc', 'Alterações', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Alterações</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('ombra', 'Ombros: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('ombra', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('ombra', 'Elevado D', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Elevado D</span>
                  		</label>
                      <label>
                  			{!! Form::radio('ombra', 'Elevado E ', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Elevado E </span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('trit', 'Trângulo de Talles: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('trit', 'Simétricos', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Simétricos</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('trit', 'Assimétricos D', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Assimétricos D</span>
                  		</label>
                      <label>
                  			{!! Form::radio('trit', 'Assimétricos E', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Assimétricos E</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('rott', 'Rotação de Tronco: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('rott', 'Para Direita', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Para Direita</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('rott', 'Para Esquerda', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Para Esquerda</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>


                  <div class="form-group">
                  	{!! Form::label('cri', 'Cristas Ilíacas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('cri', 'Simétricas', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Simétricas</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('cri', 'Elevação D', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Elevação D</span>
                  		</label>
                      <label>
                  			{!! Form::radio('cri', 'Elevação E', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Elevação E</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('rotp', 'Rotação de Pelve: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('rotp', 'Para Direita', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Para Direita</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('rotp', 'Para Esquerda', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Para Esquerda</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                    {!! Form::label('joelhva', 'Joelho: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                    <div class="radio">
                      <label>
                        {!! Form::radio('joelhva', 'Normal D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Normal D</span>
                      </label>
                      <label>
                        {!! Form::radio('joelhva', 'Normal E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Normal E</span>
                      </label>
                      <label>
                        {!! Form::radio('joelhva', 'Valgo D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Valgo D</span>
                      </label>
                      <label>
                        {!! Form::radio('joelhva', 'Valgo E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Valgo E</span>
                      </label>
                      <label>
                        {!! Form::radio('joelhva', 'Varo D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Varo D</span>
                      </label>
                      <label>
                        {!! Form::radio('joelhva', 'Varo E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Varo E</span>
                      </label>
                    </div>
                    @if($errors->any())
                    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                    @endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('palet', 'Paletas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                      <label>
                  			{!! Form::radio('palet', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('palet', 'Laterizada D', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Laterizada D</span>
                  		</label>
                      <label>
                  			{!! Form::radio('palet', 'Laterizada E', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Laterizada E</span>
                  		</label>
                      <label>
                  			{!! Form::radio('palet', 'Medializada D', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Medializada D</span>
                  		</label>
                      <label>
                  			{!! Form::radio('palet', 'Medializada E', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Medializada E</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>


                  <div class="form-group">
                    {!! Form::label('antp', 'Ante-Pé: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                    <div class="radio">
                      <label>
                        {!! Form::radio('antp', 'Normal D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Normal D</span>
                      </label>
                      <label>
                        {!! Form::radio('antp', 'Normal E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Normal E</span>
                      </label>
                      <label>
                        {!! Form::radio('antp', 'Pronado D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Pronado D</span>
                      </label>
                      <label>
                        {!! Form::radio('antp', 'Pronado E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Pronado E</span>
                      </label>
                      <label>
                        {!! Form::radio('antp', 'Supinado D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Supinado D</span>
                      </label>
                      <label>
                        {!! Form::radio('antp', 'Supinado E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Supinado E</span>
                      </label>
                    </div>
                    @if($errors->any())
                    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                    @endif
                  </div>


              </div>
            </div>

            <div class="step-pane" data-step="3">
              <div>

                <h3 class="lighter block green">Vista Lateral</h3>

                  <div class="form-group">
                  	{!! Form::label('headl', 'Cabeça: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('headl', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('headl', 'Anteriorizada', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Anteriorizada</span>
                  		</label>
                      <label>
                  			{!! Form::radio('headl', 'Posteriorizada', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Posteriorizada</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('cervc', 'Cervical: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('cervc', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('cervc', 'Hiperlordose', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Hiperlordose</span>
                  		</label>
                      <label>
                  			{!! Form::radio('cervc', 'Retificação', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Retificação</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('ombr', 'Ombros: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('ombr', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('ombr', 'Protusos', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Protusos</span>
                  		</label>
                      <label>
                  			{!! Form::radio('ombr', 'Posteriorizados ', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Posteriorizados </span>
                  		</label>
                      <label>
                  			{!! Form::radio('ombr', 'Rodado Internamente ', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Rodado Internamente </span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('ms', 'MS: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                      <label>
                  			{!! Form::radio('ms', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('ms', 'Anteriorizado', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Anteriorizada</span>
                  		</label>
                      <label>
                  			{!! Form::radio('ms', 'Posteriorizada', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Posteriorizado</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('ms') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('abdo', 'Abdomem: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('abdo', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('abdo', 'Ptose', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Ptose</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>


                  <div class="form-group">
                  	{!! Form::label('dorsal', 'Dorsal: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('dorsal', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('dorsal', 'Retificada', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Retificada</span>
                  		</label>
                      <label>
                  			{!! Form::radio('dorsal', 'Hipercifose', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Hipercifose</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('lombar', 'Lombar: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('lombar', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('lombar', 'Retificada', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Retificada</span>
                  		</label>
                      <label>
                  			{!! Form::radio('lombar', 'Hiperlordose', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Hiperlordose</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                  	{!! Form::label('pelve', 'Pelve: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                  	<div class="radio">
                  		<label>
                  			{!! Form::radio('pelve', 'Normal', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Normal</span>
                  		</label>
                  		<label>
                  			{!! Form::radio('pelve', 'Anteriorizada', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Anteriorizada</span>
                  		</label>
                      <label>
                  			{!! Form::radio('pelve', 'Retrovertida', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Retrovertida</span>
                  		</label>
                      <label>
                  			{!! Form::radio('pelve', 'Antepulsão', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Antepulsão</span>
                  		</label>
                      <label>
                  			{!! Form::radio('pelve', 'Retropulsão', null, ['class' => 'ace']) !!}
                  			<span class="lbl"> Retropulsão</span>
                  		</label>
                  	</div>
                  	@if($errors->any())
                  	<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                  	@endif
                  </div>

                  <div class="form-group">
                    {!! Form::label('joelh', 'Joelho: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                    <div class="radio">
                      <label>
                        {!! Form::radio('joelh', 'Normal D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Normal D</span>
                      </label>
                      <label>
                        {!! Form::radio('joelh', 'Normal E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Normal E</span>
                      </label>
                      <label>
                        {!! Form::radio('joelh', 'Hiperextensão D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Hiperextensão D</span>
                      </label>
                      <label>
                        {!! Form::radio('joelh', 'Hiperextensão E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Hiperextensão E</span>
                      </label>
                      <label>
                        {!! Form::radio('joelh', 'Fletido D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Fletido D</span>
                      </label>
                      <label>
                        {!! Form::radio('joelh', 'Fletido E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Fletido E</span>
                      </label>
                    </div>
                    @if($errors->any())
                    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                    @endif
                  </div>


                  <div class="form-group">
                    {!! Form::label('medp', 'Médio-Pé: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
                    <div class="radio">
                      <label>
                        {!! Form::radio('medp', 'Normal D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Normal D</span>
                      </label>
                      <label>
                        {!! Form::radio('medp', 'Normal E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Normal E</span>
                      </label>
                      <label>
                        {!! Form::radio('medp', 'Cavo D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Cavo D</span>
                      </label>
                      <label>
                        {!! Form::radio('medp', 'Cavo E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Cavo E</span>
                      </label>
                      <label>
                        {!! Form::radio('medp', 'Plano D', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Plano D</span>
                      </label>
                      <label>
                        {!! Form::radio('medp', 'Plano E', null, ['class' => 'ace']) !!}
                        <span class="lbl"> Plano E</span>
                      </label>
                    </div>
                    @if($errors->any())
                    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
                    @endif
                  </div>


              </div>
            </div>

            <div class="step-pane" data-step="4">
              <div class="center">
                <h3 class="green">Avaliação completa!</h3>
                Clique em finalizar para continuar!
              </div>
              <button class="btn btn-success" type="submit">
                <i class="ace-icon fa fa-arrow-left"></i>
                Salvar
              </button>
              {!! Form::close() !!}
            </div>
          </div>
        </div>

        <hr />
        <div class="wizard-actions">
          <button class="btn btn-prev">
            <i class="ace-icon fa fa-arrow-left"></i>
            Anterior
          </button>

          <button class="btn btn-success btn-next" type="submit" data-last="Finalizar">
            Próximo
            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
          </button>

        </div>
      </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
  </div>



  </div><!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
@stop

@push('page-script')

<script src="{{ asset('assets/js/wizard.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-additional-methods.min.js') }}"></script>
<script src="{{ asset('assets/js/bootbox.js') }}"></script>
<script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>

<script type="text/javascript">
  jQuery(function($) {

    $('[data-rel=tooltip]').tooltip();

    $('.select2').css('width','200px').select2({allowClear:true})
    .on('change', function(){
      $(this).closest('form').validate().element($(this));
    });


    var $validation = false;
    $('#fuelux-wizard-container')
    .ace_wizard({
      //step: 2 //optional argument. wizard will jump to step "2" at first
      //buttons: '.wizard-actions:eq(0)'
    })
    .on('actionclicked.fu.wizard' , function(e, info){
      if(info.step == 1 && $validation) {
        if(!$('#validation-form').valid()) e.preventDefault();
      }
    })
    //.on('changed.fu.wizard', function() {
    //})
    .on('finished.fu.wizard', function(e) {
      bootbox.dialog({
        message: "Obrigado! Avaliação realizada com sucesso!",
        buttons: {
          "success" : {
            "label" : "OK",
            "className" : "btn-sm btn-primary"
          }
        }
      });
    }).on('stepclick.fu.wizard', function(e){
      //e.preventDefault();//this will prevent clicking and selecting steps
    });


    //jump to a step
    /**
    var wizard = $('#fuelux-wizard-container').data('fu.wizard')
    wizard.currentStep = 3;
    wizard.setState();
    */

    //determine selected step
    //wizard.selectedItem().step



    //hide or show the other form which requires validation
    //this is for demo only, you usullay want just one form in your application
    // $('#skip-validation').removeAttr('checked').on('click', function(){
    //   $validation = this.checked;
    //   if(this.checked) {
    //     $('#sample-form').hide();
    //     $('#validation-form').removeClass('hide');
    //   }
    //   else {
    //     $('#validation-form').addClass('hide');
    //     $('#sample-form').show();
    //   }
    // })



    //documentation : http://docs.jquery.com/Plugins/Validation/validate


    $.mask.definitions['~']='[+-]';
    $('#phone').mask('(999) 999-9999');

    jQuery.validator.addMethod("phone", function (value, element) {
      return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
    }, "Enter a valid phone number.");

    $('#validation-form').validate({
      errorElement: 'div',
      errorClass: 'help-block',
      focusInvalid: false,
      ignore: "",
      rules: {
        email: {
          required: true,
          email:true
        },
        password: {
          required: true,
          minlength: 5
        },
        password2: {
          required: true,
          minlength: 5,
          equalTo: "#password"
        },
        name: {
          required: true
        },
        phone: {
          required: true,
          phone: 'required'
        },
        url: {
          required: true,
          url: true
        },
        comment: {
          required: true
        },
        state: {
          required: true
        },
        platform: {
          required: true
        },
        subscription: {
          required: true
        },
        gender: {
          required: true,
        },
        agree: {
          required: true,
        }
      },

      messages: {
        email: {
          required: "Please provide a valid email.",
          email: "Please provide a valid email."
        },
        password: {
          required: "Please specify a password.",
          minlength: "Please specify a secure password."
        },
        state: "Please choose state",
        subscription: "Please choose at least one option",
        gender: "Please choose gender",
        agree: "Please accept our policy"
      },


      highlight: function (e) {
        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
      },

      success: function (e) {
        $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
        $(e).remove();
      },

      errorPlacement: function (error, element) {
        if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
          var controls = element.closest('div[class*="col-"]');
          if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
          else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
        }
        else if(element.is('.select2')) {
          error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
        }
        else if(element.is('.chosen-select')) {
          error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
        }
        else error.insertAfter(element.parent());
      },

      submitHandler: function (form) {
      },
      invalidHandler: function (form) {
      }
    });




    $('#modal-wizard-container').ace_wizard();
    $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


    /**
    $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
      $(this).closest('form').validate().element($(this));
    });

    $('#mychosen').chosen().on('change', function(ev) {
      $(this).closest('form').validate().element($(this));
    });
    */


    $(document).one('ajaxloadstart.page', function(e) {
      //in ajax mode, remove remaining elements before leaving page
      $('[class*=select2]').remove();
    });
  })
</script>
@endpush
