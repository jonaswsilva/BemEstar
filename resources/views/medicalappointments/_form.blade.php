
<div class="form-group">
  {!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
  <div class="col-sm-9">
    {!! Form::select('patient_id', $patients, @$medicalappointment->patient_id, ["class"=>"col-xs-10 col-sm-5", "id"=>"nameid","placeholder"=>"Selecione um paciente"]) !!}
  </div>
</div>

{!! Form::hidden('professional_id', Auth::user()->id ) !!}

<div class="form-group">
  {!!  Form::label('form-field-1', 'Data: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
  <div class="col-sm-9">
  {!! Form::date('date', @$medicalappointment->date, ['class' => 'col-xs-10 col-sm-5']) !!}
  @if($errors->any())
  <div class="red darken-4">&nbsp &nbsp{!! $errors->first('date') !!}</div>
  @endif
</div>
</div>

<div class="form-group">
  {!!  Form::label('form-field-1', 'Hora: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
  <div class="col-sm-9">
    {!! Form::text('hour', @$medicalappointment->hour, ['class' => 'col-xs-10 col-sm-5 hour', 'id'=>'timepicker1', 'placeholder' => 'Hora...'])	 !!}
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{!! $errors->first('hour') !!}</div>
    @endif
  </div>
</div>

<div class="form-group">
  {!!  Form::label('form-field-1', 'Descrição: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
  <div class="col-sm-9">
    {!! Form::textarea('description', @$medicalappointment->description, ['size' => '30x5','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
    @endif
  </div>
</div>

<div class="clearfix form-actions">
  <div class="col-md-offset-3 col-md-9">

		<a class="btn btn-primary" href="{{ URL::to('medicalappointments') }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
      &nbsp; &nbsp; &nbsp;
    <button class="btn btn-success" type="submit">
      <i class="ace-icon fa fa-check bigger-110"></i>
      {{ $button }}
    </button>

    <div class="widget-title purple pull-right">
      <h4>Profissional: {!! Auth::user()->name !!}</h4>
    </div>
	</div>
  </div>
</div>
