<!-- <div class="step-content pos-rel"> -->
  <div class="step-pane active" data-step="1">
    <h3 class="lighter block green">Entre com as Informações do Paciente</h3>

      <div class="form-group">
        {!! Form::label('histp', 'História da moléstia pregresa: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('histp', @$neurological->histp, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('histp') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('hista', 'História da moléstia atual: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('hista', @$neurological->hista, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('hista') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('histf', 'História da moléstia familiar: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('histf', @$neurological->histf, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('histf') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('focf', 'Foco principal da conduta fisioterapêutica: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('focf', @$neurological->focf, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('focf') }}</div>
        @endif
      </div>

  </div>

  <div class="step-pane" data-step="2">
    <div>
      <h4 class="widget-title lighter">Inspeção</h4>

      <div class="form-group">
        {!! Form::label('foml', 'Forma de locomoção (ao primeiro contato): ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('foml', @$neurological->foml, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('foml') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('prot', 'Prótese: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="radio">
          <label>
            {!! Form::radio('prot', 'Sim', null, ['class' => 'ace']) !!}
            <span class="lbl"> Sim</span>
          </label>
          <label>
            {!! Form::radio('prot', 'Não', null, ['class' => 'ace']) !!}
            <span class="lbl"> Não</span>
          </label>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('prot') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('ort', 'Órtese: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="radio">
          <label>
            {!! Form::radio('ort', 'Sim', null, ['class' => 'ace']) !!}
            <span class="lbl"> Sim</span>
          </label>
          <label>
            {!! Form::radio('ort', 'Não', null, ['class' => 'ace']) !!}
            <span class="lbl"> Não</span>
          </label>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('ort') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('padrm', 'Padrão motor predominante: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('padrm', @$neurological->padrm, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('padrm') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('condp', 'Condições da Pele: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('condp', @$neurological->condp, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('condp') }}</div>
        @endif
      </div>

    </div>
  </div>

  <div class="step-pane" data-step="3">
    <div>

      <h4 class="widget-title lighter">Inspeção</h4>

      <div class="form-group">
        {!! Form::label('tonb', 'Tônus de base: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('tonb', @$neurological->tonb, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('tonb') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('distt', 'Distribuição topográfica: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('distt', @$neurological->distt, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('distt') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('grad', 'Graduação: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('grad', @$neurological->grad, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('grad') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('testc', 'Testes comprobatórios: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('testc', @$neurological->testc, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('testc') }}</div>
        @endif
      </div>

    </div>
  </div>

  <div class="step-pane" data-step="4">
    <div>

      <h4 class="widget-title lighter">Controle Motor</h4>

      <div class="form-group">
        {!! Form::label('mobil', 'Mobilidade/ADM: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('mobil', @$neurological->mobil, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('mobil') }}</div>
        @endif
      </div>


      <div class="form-group">
        {!! Form::label('estab', 'Estabilidade: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('estab', @$neurological->estab, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('estab') }}</div>
        @endif
      </div>

      <h4 class="widget-title lighter">Habilidade</h4>

      <div class="form-group">
        {!! Form::label('march', 'Marcha: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('march', @$neurological->march, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('march') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('estabh', 'Estabilidade: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('estabh', @$neurological->estabh, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('estabh') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('caracd', 'Caracterização da deambulação: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('caracd', @$neurological->caracd, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('caracd') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('motf', 'Moticidade fina: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="col-sm-9">
          <div class="clearfix">
            {!! Form::textarea('motf', @$neurological->motf, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          </div>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('motf') }}</div>
        @endif
      </div>

      <div class="form-group">
        {!! Form::label('mao', 'Mão - tipos de pega: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
        <div class="radio">
          <label>
            {!! Form::radio('mao', 'Em gancho', null, ['class' => 'ace']) !!}
            <span class="lbl"> Em gancho</span>
          </label>
          <label>
            {!! Form::radio('mao', 'Em chave', null, ['class' => 'ace']) !!}
            <span class="lbl"> Em chave</span>
          </label>
          <label>
            {!! Form::radio('mao', 'Em esfera', null, ['class' => 'ace']) !!}
            <span class="lbl"> Em esfera</span>
          </label>
          <label>
            {!! Form::radio('mao', 'Em polpa digital', null, ['class' => 'ace']) !!}
            <span class="lbl"> Em polpa digital</span>
          </label>
        </div>
        @if($errors->any())
        <div class="red darken-4">&nbsp &nbsp{{ $errors->first('mao') }}</div>
        @endif
      </div>

    </div>
  </div>

  <div class="step-pane" data-step="5">
    <div>

      <h4 class="widget-title lighter">Força Muscular</h4>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Extensores e flexores do pescoço: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('extfp', @$neurological->extfp, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('extfp') !!}</div>
          @endif
        </div>
      </div>


      <div class="form-group">
        {!!  Form::label('form-field-1', 'Abdutores e adutores do ombro: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('abad', @$neurological->abad, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('abad') !!}</div>
          @endif
        </div>
      </div>


      <div class="form-group">
        {!!  Form::label('form-field-1', 'Rotadores internos e externos do ombro: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('rotie', @$neurological->rotie, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('rotie') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Extensores e flexores do cotovelo: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('extfc', @$neurological->extfc, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('extfc') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Extensores e flexores do punho: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('extefp', @$neurological->extefp, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('extefp') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Pronadores e supinadores: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('pros', @$neurological->pros, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('pros') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Extensores e flexores do quadril: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('extfq', @$neurological->extfq, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('extfq') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Abdutores e adutores do quadril: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('abadq', @$neurological->abadq, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('abadq') !!}</div>
          @endif
        </div>
      </div>


      <div class="form-group">
        {!!  Form::label('form-field-1', 'Rotadores internos e externos: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('rotaie', @$neurological->rotaie, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('rotaie') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Extensores e flexores do joelho: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('extfj', @$neurological->extfj, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('extfj') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'inversores e eversores do tornozelo: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('invt', @$neurological->invt, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('invt') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Plantiflexorese dorsiflexores e do tornozelo: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('pladt', @$neurological->pladt, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('pladt') !!}</div>
          @endif
        </div>
      </div>

    </div>
  </div>

  <div class="step-pane" data-step="6">
    <div>
      <h4 class="widget-title lighter">Avaliação sensorial</h4>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Sensibilidade superficial: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('senss', @$neurological->senss, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('senss') !!}</div>
          @endif
        </div>
      </div>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Sensibilidade profunda: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('sensp', @$neurological->sensp, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('sensp') !!}</div>
          @endif
        </div>
      </div>

    </div>
  </div>

  <div class="step-pane" data-step="7">
    <div>

      <h4 class="widget-title lighter">Reflexos</h4>

      <div class="form-group">
        {!!  Form::label('form-field-1', 'Corticais: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
        <div class="col-sm-9">
          {!! Form::textarea('cortc', @$neurological->cortc, ['size' => '20x3','class' => 'col-xs-10 col-sm-8']) !!}
          @if($errors->any())
          <div class="red darken-4">&nbsp &nbsp{!! $errors->first('cortc') !!}</div>
          @endif
        </div>
      </div>

    </div>
  </div>

  <div class="step-pane" data-step="8">
    <div class="center">
      <h3 class="green">Avaliação completa!</h3>
      Clique em finalizar para continuar!
      <button class="btn btn-info" type="submit">
        <i class="ace-icon fa fa-check"></i>
        Concluir Avaliação
      </button>
    </div>
  </div>
<!-- </div> -->
