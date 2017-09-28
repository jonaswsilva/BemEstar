<div class="form-group">
  {!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
  <div class="col-sm-9">
    {!! Form::text('patient_name', @$medicalappointment->patient->person->name, ['class' => 'col-xs-10 col-sm-5','id' => 'autoComplete', 'placeholder' => 'Paciente...']) !!}
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{!! $errors->first('patient_name') !!}</div>
    @endif
  </div>
</div>

{!! Form::hidden('patient_id', @$medicalappointments->patient_id, ['id'=>'idPatient']) !!}

<div class="form-group">
  {!! Form::label('form-field-5', 'Profissional:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
  <div class="col-sm-9">
      {!! Form::text('professional_id', Auth::user()->name, ['disabled'=>'disabled', 'class' => 'col-xs-10 col-sm-5']) !!}
    @if($errors->any())
    <div class="red darken-4">{{ $errors->first('professionals') }}</div>
    @endif
  </div>
</div>

{!! Form::hidden('professional_id', Auth::user()->id ) !!}

<div class="form-group">
  {!!  Form::label('form-field-1', 'Data: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
  <div class="col-sm-9">
  {!! Form::date('date', @$medicalappointment->date, ['class' => 'col-xs-10 col-sm-5']) !!}
</div>
</div>

<div class="form-group">
  {!!  Form::label('form-field-1', 'Hora: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
  <div class="col-sm-9">
  {!! Form::time('hour', @$medicalappointment->hour, ['class' => 'col-xs-10 col-sm-5']) !!}
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


	</div>
  </div>
</div>
