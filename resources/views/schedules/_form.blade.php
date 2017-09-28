
			{{ Form::token() }}

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('patient_name', @$schedule->patient->person->name, ['class' => 'col-xs-10 col-sm-5','id' => 'autoComplete', 'placeholder' => 'Paciente...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('patient_name') !!}</div>
					@endif
				</div>
			</div>

			{!! Form::hidden('patient_id', @$schedule->patient_id, ['id'=>'idPatient']) !!}

			<div class="form-group">
				{!! Form::label('form-field-5', 'Profissional:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
				<div class="col-sm-9">
					{!! Form::select('professional_id', $professionals, @$schedule->professional_id,['id'=> 'state','class' => 'col-xs-10 col-sm-5']) !!}
				</div>
			</div>


			<div class="form-group">
				{!!  Form::label('form-field-1', 'Data: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::date('date', @$schedule->date, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Data...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('date') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Hora: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('hour', @$schedule->hour, ['class' => 'col-xs-10 col-sm-5 hour', 'id'=>'timepicker1', 'placeholder' => 'Hora...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('hour') !!}</div>
					@endif
				</div>
			</div>

      <!-- <div class="form-group">
				{!!  Form::label('form-field-1', 'Hora: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::time('hour', @$schedule->hour, ['class' => 'col-xs-10 col-sm-5 hour', 'placeholder' => 'Hora...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('hour') !!}</div>
					@endif
				</div>
			</div> -->

			<!-- <div class="form-group">
				{!!  Form::label('form-field-1', 'Data: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
				<input id="date-timepicker1" type="text" class="col-xs-10 col-sm-5" />

			</div>
		</div> -->

			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit">
						<i class="ace-icon fa fa-check bigger-110"></i>
						{{ $button }}
					</button>

					&nbsp; &nbsp; &nbsp;
					<a class="btn btn-primary" href="{{ URL::to('schedules') }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
				</div>
			</div>
