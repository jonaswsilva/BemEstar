<h3 class="header smaller lighter purple">Dados Pessoais</h3>

			{{ Form::token() }}

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Nome: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('name', @$professional->person->name, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Nome...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('name') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Sobrenome: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('lastname', @$professional->person->lastname, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Sobrenome...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('lastname') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Rg: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('rg', @$professional->person->rg, ['class' => 'col-xs-10 col-sm-5 rg', 'placeholder' => 'Rg...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('rg') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Cpf: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('cpf', @$professional->person->cpf, ['class' => 'col-xs-10 col-sm-5 cpf', 'placeholder' => 'Cpf...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('cpf') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('sex', 'Sexo: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
				<div class="radio">
					<label>
						{!! Form::radio('sex', 'M', (@$professional->person->sex == 'M'), ['class' => 'ace']) !!}
					<span class="lbl"> Masculino</span>
					</label>
					<label>
						{!! Form::radio('sex', 'F', (@$professional->person->sex == 'F'), ['class' => 'ace']) !!}
					<span class="lbl"> Feminino</span>
					</label>
				</div>
				@if($errors->any())
				<div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
				@endif
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Celular: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('phone', @$professional->person->phone, ['class' => 'col-xs-10 col-sm-5 phone', 'id' => 'phone', 'placeholder' => 'Celular...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('phone') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Telefone fixo: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('landline', @$professional->person->landline, ['class' => 'col-xs-10 col-sm-5 phonefix', 'placeholder' => 'Telefone fixo...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('landline') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'E-mail: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('email', @$professional->person->email, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'E-mail...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('email') !!}</div>
					@endif
				</div>
			</div>

			<h3 class="header smaller lighter purple">Dados de Endereço</h3>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Cep: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('cep', @$professional->address->cep, ['class' => 'col-xs-10 col-sm-5 cep', 'placeholder' => 'Cep...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('cep') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Rua: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('street', @$professional->address->street, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Rua...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('street') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'N°: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('number', @$professional->address->number, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'N°...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('number') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Bairro: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('neighborhood', @$professional->address->neighborhood, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Bairro...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('neighborhood') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('form-field-5', 'Estado:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
				<div class="col-sm-9">
					{!! Form::select('state_id', $states, @$professional->address->city->state_id,['id'=> 'state','class' => 'col-xs-10 col-sm-5']) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('form-field-5', 'Cidade:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
				<div class="col-md-9">
					<select name="city_id" id="city" class="col-xs-10 col-sm-5"></select>
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('form-field-5', 'Especialidates:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
				<div class="col-sm-9">
						{!! Form::select('especialitie_id', $especialities, @$professional->especialities->especialitie_id ) !!}
					@if($errors->any())
					<div class="red darken-4">{{ $errors->first('especialities') }}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'CRM: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('crm', @$professional->crm, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'CRM...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('crm') !!}</div>
					@endif
				</div>
			</div>

			<h3 class="header smaller lighter purple">Dados de Usuário</h3>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Usuário: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::text('name', @$user->name, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Usuário...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('name') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Avatar: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-4">
					{!! Form::file('avatar', ['id' => 'id-input-file-2']); !!}
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'E-mail: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::email('email', @$user->email, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'E-mail...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('email') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Atribuição: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::select('roles[]', $roles, @$userRole, array('class' => 'col-xs-10 col-sm-5','multiple')) !!}
			    </div>
			  </div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Senha: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::password('password', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Senha...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('password') !!}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				{!!  Form::label('form-field-1', 'Confirmar senha: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
				<div class="col-sm-9">
					{!! Form::password('password_confirmation', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Confirmar senha...']) !!}
					@if($errors->any())
					<div class="red darken-4">&nbsp &nbsp{!! $errors->first('password_confirm') !!}</div>
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
					<a class="btn btn-primary" href="{{ URL::to('professionals') }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
				</div>
			</div>
