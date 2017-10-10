<div class="step-content pos-rel">
  <div class="step-pane active" data-step="1">
    <h3 class="lighter block green">Entre com as Informações do Paciente</h3>


    <form class="form-horizontal" id="validation-form" method="get">

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">História da moléstia pregresa:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">História da moléstia atual:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">História da moléstia familiar:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Foco principal da conduta fisioterapêutica:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>


    </form>
  </div>

  <div class="step-pane" data-step="2">
    <div>
      <h4 class="widget-title lighter">Inspeção</h4>

        {!! Form::open(['url' => 'foo/bar']) !!}
      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Forma de locomoção (ao primeiro contato):</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('head', 'Prótese: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="radio">
          <label>
            {!! Form::radio('head', 'Sim', null, ['class' => 'ace']) !!}
            <span class="lbl"> Sim</span>
          </label>
          <label>
            {!! Form::radio('head', 'Não', null, ['class' => 'ace']) !!}
            <span class="lbl"> Não</span>
          </label>

        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('head', 'Órtese: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="radio">
          <label>
            {!! Form::radio('head', 'Sim', null, ['class' => 'ace']) !!}
            <span class="lbl"> Sim</span>
          </label>
          <label>
            {!! Form::radio('head', 'Não', null, ['class' => 'ace']) !!}
            <span class="lbl"> Não</span>
          </label>

        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
        @endif
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Padrão motor predominante:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Condições da Pele:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>


      {!! Form::close() !!}
    </div>
  </div>

  <div class="step-pane" data-step="3">
    <div>

      <h4 class="widget-title lighter">Inspeção</h4>

        {!! Form::open(['url' => 'foo/bar']) !!}
      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Tônus de base:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Distribuição topográfica:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Graduação:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Testes comprobatórios:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>


      {!! Form::close() !!}

    </div>
  </div>

  <div class="step-pane" data-step="4">
    <div>

      <h4 class="widget-title lighter">Controle Motor</h4>

        {!! Form::open(['url' => 'foo/bar']) !!}
      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Mobilidade/ADM:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Estabilidade:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <h4 class="widget-title lighter">Habilidade</h4>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Marcha:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Caracterização da deambulação:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Moticidade fina:</label>

        <div class="col-xs-12 col-sm-9">
          <div class="clearfix">
            <textarea class="input-xlarge" name="comment" id="comment"></textarea>
          </div>
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('head', 'Mão - tipos de pega: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="radio">
          <label>
            {!! Form::radio('head', 'Em gancho', null, ['class' => 'ace']) !!}
            <span class="lbl"> Em gancho</span>
          </label>
          <label>
            {!! Form::radio('head', 'Em chave', null, ['class' => 'ace']) !!}
            <span class="lbl"> Em chave</span>
          </label>
          <label>
            {!! Form::radio('head', 'Em esfera', null, ['class' => 'ace']) !!}
            <span class="lbl"> Em esfera</span>
          </label>
          <label>
            {!! Form::radio('head', 'Em polpa digital', null, ['class' => 'ace']) !!}
            <span class="lbl"> Em polpa digital</span>
          </label>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('sex') }}</div>
        @endif
      </div>

      {!! Form::close() !!}

    </div>
  </div>

  <div class="step-pane" data-step="5">
    <div>

      <h4 class="widget-title lighter">Força Muscular</h4>

        {!! Form::open(['url' => 'foo/bar','class' => 'form-horizontal']) !!}

        <div class="form-group">
          {!!  Form::label('form-field-1', 'Extensores e flexores do pescoço: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          {!!  Form::label('form-field-1', 'Abdutores e adutores do ombro: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>


        <div class="form-group">
          {!!  Form::label('form-field-1', 'Rotadores internos e externos do ombro: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          {!!  Form::label('form-field-1', 'Extensores e flexores do cotovelo: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          {!!  Form::label('form-field-1', 'Extensores e flexores do punho: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          {!!  Form::label('form-field-1', 'Pronadores e supinadores: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          {!!  Form::label('form-field-1', 'Extensores e flexores do quadril: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          {!!  Form::label('form-field-1', 'Abdutores e adutores do quadril: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>


        <div class="form-group">
          {!!  Form::label('form-field-1', 'Rotadores internos e externos: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          {!!  Form::label('form-field-1', 'Extensores e flexores do joelho: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          {!!  Form::label('form-field-1', 'inversores e eversores do tornozelo: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          {!!  Form::label('form-field-1', 'Plantiflexorese dorsiflexores e do tornozelo: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
          <div class="col-sm-9">
            {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
            @if($errors->any())
            <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
            @endif
          </div>
        </div>

      {!! Form::close() !!}

    </div>
  </div>

  <div class="step-pane" data-step="6">
    <div>
      <h4 class="widget-title lighter">Avaliação sensorial</h4>

      {!! Form::open(['url' => 'foo/bar','class' => 'form-horizontal']) !!}

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Sensibilidade superficial: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Sensibilidade profunda: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
          @endif
        </div>
      </div>

      {!! Form::close() !!}

    </div>
  </div>

  <div class="step-pane" data-step="7">
    <div>

      <h4 class="widget-title lighter">Reflexos</h4>

      {!! Form::open(['url' => 'foo/bar','class' => 'form-horizontal']) !!}

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Corticais: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('description', @$medicalappointments->description, ['size' => '20x3','class' => 'col-xs-10 col-sm-8 description', 'placeholder' => 'Descrição...']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
          @endif
        </div>
      </div>


      {!! Form::close() !!}

    </div>
  </div>

  <div class="step-pane" data-step="8">
    <div class="center">
      <h3 class="green">Avaliação completa!</h3>
      Clique em finalizar para continuar!
    </div>
  </div>

</div>
