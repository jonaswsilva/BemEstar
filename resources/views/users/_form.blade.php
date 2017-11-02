{{ Form::token() }}

<div class="form-group">
	{!!  Form::label('form-field-1', 'Usuário: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
	<div class="col-sm-9">
		{!! Form::text('name', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Usuário...']) !!}
		@if($errors->any())
		<div class="red darken-4">&nbsp &nbsp{!! $errors->first('name') !!}</div>
		@endif
	</div>
</div>

<div class="form-group">
	{!!  Form::label('form-field-1', 'Avatar: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
	<div class="col-sm-4">
		{!! Form::file('avatar', ['id' => 'id-input-file-2']) !!}
		@if($errors->any())
		<div class="red darken-4">&nbsp &nbsp{!! $errors->first('avatar') !!}</div>
		@endif
	</div>
</div>

<div class="form-group">
	{!!  Form::label('form-field-1', 'E-mail: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
	<div class="col-sm-9">
		{!! Form::email('email', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'E-mail...']) !!}
		@if($errors->any())
		<div class="red darken-4">&nbsp &nbsp{!! $errors->first('email') !!}</div>
		@endif
	</div>
</div>

<div class="form-group">
	{!!  Form::label('form-field-1', 'Atribuição: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
	<div class="col-sm-9">
		{!! Form::select('roles[]', $roles,[], array('class' => 'col-xs-10 col-sm-5','multiple')) !!}
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
		{!! Form::password('confirm-password', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Confirmar senha...']) !!}
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
		<a class="btn btn-primary" href="{{ URL::previous() }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
	</div>
</div>
