
			{{ Form::token() }}

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('term', @$procedure->patient->person->name, ['class' => 'col-xs-10 col-sm-5','id' => 'autoComplete', 'placeholder' => 'Paciente...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('patient_name') !!}</div>
					@endif
				</div>
			</div>

			{!! Form::hidden('patient_id', @$procedure->patient_id, ['id'=>'idPatient']) !!}

			<div class="form-group">
				{!! Form::label('form-field-5', 'Profissional:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
				<div class="col-sm-9">
						{!! Form::text('professional_id', Auth::user()->name, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5'] ) !!}
					@if($errors->any())
					<div class="red darken-4">{{ $errors->first('professionals') }}</div>
					@endif
				</div>
			</div>

			{!! Form::hidden('professional_id', Auth::user()->id ) !!}

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Data: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::date('date', @$procedure->date, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Data...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('date') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('form-field-5', 'Tipo do procedimento:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
				<div class="col-sm-9">
						{!! Form::select('type_procedures_id', $typeprocedures, @$procedure->procedure_id ) !!}
						<a href="#my-modal" role="button" class="btn btn-sm btn-default" data-toggle="modal">
							&nbsp; Novo tipo &nbsp;
						</a>

						<a href="#modal-table" role="button" class="btn btn-sm btn-default" data-toggle="modal"> Tipos </a>

					@if($errors->any())
					<div class="red darken-4">{{ $errors->first('type_procedures_id') }}</div>
					@endif
				</div>
			</div>

      <div class="form-group">
				{!!  Form::label('form-field-1', 'Valor: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('price', @$procedure->price, ['class' => 'col-xs-10 col-sm-5 price', 'placeholder' => 'Valor...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('price') !!}</div>
					@endif
				</div>
			</div>

      <div class="form-group">
				{!!  Form::label('form-field-1', 'Tipo de pagamento: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::select('type_payment', ['Dinheiro' => 'Dinheiro','Cheque' => 'Cheque','Cartão' => 'Cartão','A prazo' => 'A prazo'], ['class' => 'col-xs-10 col-sm-5 type_payment', 'placeholder' => 'Valor...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('type_payment') !!}</div>
					@endif
				</div>
			</div>

      <div class="form-group">
				{!!  Form::label('form-field-1', 'Parcelas: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::select('plots', ['2' => '2x','4' => '4x','6' => '6x','8' => '8x','10' => '10x','12' => '12x'], ['class' => 'col-xs-10 col-sm-5 plots', 'placeholder' => 'Parcelas...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('plots') !!}</div>
					@endif
				</div>
			</div>

      <div class="form-group">
				{!!  Form::label('form-field-1', 'Observação: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::textarea('observation', @$procedure->observation, ['size' => '30x5','class' => 'col-xs-10 col-sm-8 observation', 'placeholder' => 'Observação...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('observation') !!}</div>
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
{!! Form::close() !!}
			<div id="my-modal" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="smaller lighter blue no-margin">Tipo de procedimento!</h3>
						</div>

						<div class="modal-body">
							{{ Form::open(array('route' => 'typeprocedures.store', 'class' => 'form-horizontal')) }}
								{{ Form::token() }}
								<div class="form-group">
									{!!  Form::label('form-field-1', 'Nome: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
									<div class="col-sm-9">
										{!! Form::text('name', @$procedure->name, ['class' => 'col-xs-10 col-sm-5 name', 'placeholder' => 'Nome...']) !!}
										@if($errors->any())
										<div class="red darken-4">&nbsp &nbsp{!! $errors->first('name') !!}</div>
										@endif
									</div>
								</div>
						</div>


						<div class="modal-footer">
							<button class="btn btn-sm btn-info pull-right" type="submit">
								<i class="ace-icon fa fa-times"></i>
								Salvar
							</button>
							<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
								<i class="ace-icon fa fa-times"></i>
								Sair
							</button>
						</div>
						{!! Form::close() !!}
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>

			<div id="modal-table" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header no-padding">
							<div class="table-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									<span class="white">&times;</span>
								</button>
								Tipos de Procedimentos
							</div>
						</div>

						<div class="modal-body no-padding">
							<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
								<thead>
									<tr>
										<th>Nome</th>
										<th class="center" colspan="3">
											Ações
										</th>
									</tr>
								</thead>

								<tbody>
									@foreach ($typeprocedures as $typename)
									<tr>
										<td>
											{{ $typename }}
										</td>
										<td>$45</td>
										<td>3,330</td>
										<td>Feb 12</td>
									</tr>
									@endforeach


								</tbody>
							</table>
						</div>

						<div class="modal-footer no-margin-top">
							<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
								<i class="ace-icon fa fa-times"></i>
								Sair
							</button>

						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>
