
			{{ Form::token() }}

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('term', @$medicalrecord->patient->person->name, ['class' => 'col-xs-10 col-sm-5','id' => 'autoComplete', 'placeholder' => 'Paciente...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('patient_name') !!}</div>
					@endif
				</div>
			</div>

			{!! Form::hidden('patient_id', @$medicalrecord->patient_id, ['id'=>'idPatient']) !!}

			<div class="form-group">
				{!! Form::label('form-field-5', 'Profissional:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
				<div class="col-sm-9">
						{!! Form::text('professional_name', Auth::user()->name, ['disabled'=>'disabled'] ) !!}
					@if($errors->any())
					<div class="red darken-4">{{ $errors->first('professionals') }}</div>
					@endif
				</div>
			</div>

				{!! Form::hidden('professional_id', Auth::user()->id ) !!}

      <div class="form-group">
				{!!  Form::label('form-field-1', 'N° de sessões: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('number_of_sessions', @$medicalrecord->number_of_sessions, ['class' => 'col-xs-10 col-sm-5', 'id'=>'spinner1', 'placeholder' => 'N° de sessões...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('number_of_sessions') !!}</div>
					@endif
				</div>
			</div>

      <div class="form-group">
				{!!  Form::label('form-field-1', 'Data: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::date('date', @$medicalrecord->date, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Data...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('date') !!}</div>
					@endif
				</div>
			</div>



      <div class="form-group">
				{!!  Form::label('form-field-1', 'Descrição: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::textarea('description', @$medicalrecord->description, ['size' => '30x5','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
					@endif
				</div>
			</div>

			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit">
						<i class="ace-icon fa fa-check bigger-110"></i>
						{{ $button }}
					</button>

					&nbsp; &nbsp; &nbsp;
					<a class="btn btn-primary" href="{{ URL::to('procedures') }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
				</div>
			</div>
