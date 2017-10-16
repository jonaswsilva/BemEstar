
<div class="step-pane active" data-step="1">
  <h3 class="lighter block green">Vista Posterior</h3>

  <div class="form-group">
    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Anamnese:</label>

    <div class="col-xs-12 col-sm-9">
      <div class="clearfix">
        <!-- <textarea class="input-xlarge" name="comment" id="comment"></textarea> -->
        {!! Form::textarea('comment', @$postural->comment, ['class' => 'input-xlarge', 'size' => '30x3','id' => 'comment']) !!}
      </div>
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('head', 'Cabeça: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('head', 'Normal', (@$postural->head == 'Normal'), ['class' => 'ace']) !!}
        <span class="lbl"> Normal</span>
      </label>
      <label>
        {!! Form::radio('head', 'Inclinada D', (@$postural->head == 'Inclinada D'), ['class' => 'ace']) !!}
        <span class="lbl"> Inclinada D</span>
      </label>
      <label>
        {!! Form::radio('head', 'Inclinada E', (@$postural->head == 'Inclinada E'), ['class' => 'ace']) !!}
        <span class="lbl"> Inclinada E</span>
      </label>
      <label>
        {!! Form::radio('head', 'Rodada D', (@$postural->head == 'Rodada D'), ['class' => 'ace']) !!}
        <span class="lbl"> Rodada D</span>
      </label>
      <label>
        {!! Form::radio('head', 'Rodada E', (@$postural->head == 'Rodada E'), ['class' => 'ace']) !!}
        <span class="lbl"> Rodada E</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('head') }}</div>
    @endif
  </div>

  <div class="form-group">
    {!! Form::label('cerv', 'Cervical: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('cerv', 'Normal', (@$postural->cerv == 'Normal'), ['class' => 'ace']) !!}
        <span class="lbl"> Normal</span>
      </label>
      <label>
        {!! Form::radio('cerv', 'Inclinada D', (@$postural->cerv == 'Inclinada D'), ['class' => 'ace']) !!}
        <span class="lbl"> Inclinada D</span>
      </label>
      <label>
        {!! Form::radio('cerv', 'Inclinada E', (@$postural->cerv == 'Inclinada E'), ['class' => 'ace']) !!}
        <span class="lbl"> Inclinada E</span>
      </label>
      <label>
        {!! Form::radio('cerv', 'Rodada D', (@$postural->cerv == 'Rodada D'), ['class' => 'ace']) !!}
        <span class="lbl"> Rodada D</span>
      </label>
      <label>
        {!! Form::radio('cerv', 'Rodada E', (@$postural->cerv == 'Rodada E'), ['class' => 'ace']) !!}
        <span class="lbl"> Rodada E</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('cerv') }}</div>
    @endif
  </div>

  <div class="form-group">
    {!! Form::label('omb', 'Ombros: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('omb', 'Normal', (@$postural->omb == 'Normal'), ['class' => 'ace']) !!}
        <span class="lbl"> Normal</span>
      </label>
      <label>
        {!! Form::radio('omb', 'Elevado D', (@$postural->omb == 'Elevado D'), ['class' => 'ace']) !!}
        <span class="lbl"> Elevado D</span>
      </label>
      <label>
        {!! Form::radio('omb', 'Elevado E', (@$postural->omb == 'Elevado E'), ['class' => 'ace']) !!}
        <span class="lbl"> Elevado E</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('omb') }}</div>
    @endif
  </div>

  <div class="form-group">
    {!! Form::label('escd', 'Escápula Direita: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('escd', 'Normal', (@$postural->escd == 'Normal'), ['class' => 'ace']) !!}
        <span class="lbl"> Normal</span>
      </label>
      <label>
        {!! Form::radio('escd', 'Báscula L', (@$postural->escd == 'Báscula L'), ['class' => 'ace']) !!}
        <span class="lbl"> Báscula L</span>
      </label>
      <label>
        {!! Form::radio('escd', 'Báscula M', (@$postural->escd == 'Báscula M'), ['class' => 'ace']) !!}
        <span class="lbl"> Báscula M</span>
      </label>
      <label>
        {!! Form::radio('escd', 'Alada', (@$postural->escd == 'Alada'), ['class' => 'ace']) !!}
        <span class="lbl"> Alada</span>
      </label>
      <label>
        {!! Form::radio('escd', 'Abduzida', (@$postural->escd == 'Abduzida'), ['class' => 'ace']) !!}
        <span class="lbl"> Abduzida</span>
      </label>
      <label>
        {!! Form::radio('escd', 'Aduzida', (@$postural->escd == 'Aduzida'), ['class' => 'ace']) !!}
        <span class="lbl"> Aduzida</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('escd') }}</div>
    @endif
  </div>

  <div class="form-group">
    {!! Form::label('esce', 'Escápula Esquerda: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('esce', 'Normal', (@$postural->esce == 'Normal'), ['class' => 'ace']) !!}
        <span class="lbl"> Normal</span>
      </label>
      <label>
        {!! Form::radio('esce', 'Báscula L', (@$postural->esce == 'Báscula'), ['class' => 'ace']) !!}
        <span class="lbl"> Báscula L</span>
      </label>
      <label>
        {!! Form::radio('esce', 'Báscula M', (@$postural->esce == 'Báscula'), ['class' => 'ace']) !!}
        <span class="lbl"> Báscula M</span>
      </label>
      <label>
        {!! Form::radio('esce', 'Alada', (@$postural->esce == 'Alada'), ['class' => 'ace']) !!}
        <span class="lbl"> Alada</span>
      </label>
      <label>
        {!! Form::radio('esce', 'Abduzida', (@$postural->esce == 'Abduzida'), ['class' => 'ace']) !!}
        <span class="lbl"> Abduzida</span>
      </label>
      <label>
        {!! Form::radio('esce', 'Aduzida', (@$postural->esce == 'Aduzida'), ['class' => 'ace']) !!}
        <span class="lbl"> Aduzida</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('esce') }}</div>
    @endif
  </div>

  <div class="form-group">
    {!! Form::label('dorsp', 'Dorsal: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('dorsp', 'Normal', (@$postural->dorsp == 'Normal'), ['class' => 'ace']) !!}
        <span class="lbl"> Normal</span>
      </label>
      <label>
        {!! Form::radio('dorsp', 'Escoliose S', (@$postural->dorsp == 'Escoliose S'), ['class' => 'ace']) !!}
        <span class="lbl"> Escoliose S</span>
      </label>
      <label>
        {!! Form::radio('dorsp', 'Escoliose C', (@$postural->dorsp == 'Escoliose C'), ['class' => 'ace']) !!}
        <span class="lbl"> Escoliose C</span>
      </label>
      <label>
        {!! Form::radio('dorsp', 'Retificada', (@$postural->dorsp == 'Retificada'), ['class' => 'ace']) !!}
        <span class="lbl"> Retificada</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('dorsp') }}</div>
    @endif
  </div>

  <div class="form-group">
    {!! Form::label('tritp', 'Trângulo de Talles: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('tritp', 'Simétricos', (@$postural->tritp == 'Simétricos'), ['class' => 'ace']) !!}
        <span class="lbl"> Simétricos</span>
      </label>
      <label>
        {!! Form::radio('tritp', 'Assimétricos D', (@$postural->tritp == 'Assimétricos D'), ['class' => 'ace']) !!}
        <span class="lbl"> Assimétricos D</span>
      </label>
      <label>
        {!! Form::radio('tritp', 'Assimétricos E', (@$postural->tritp == 'Assimétricos E'), ['class' => 'ace']) !!}
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
        {!! Form::radio('gmach', 'Simétricos', (@$postural->gmach == 'Simétricos'), ['class' => 'ace']) !!}
        <span class="lbl"> Simétricos</span>
      </label>
      <label>
        {!! Form::radio('gmach', 'Assimétricos D', (@$postural->gmach == 'Assimétricos D'), ['class' => 'ace']) !!}
        <span class="lbl"> Assimétricos D</span>
      </label>
      <label>
        {!! Form::radio('gmach', 'Assimétricos E', (@$postural->gmach == 'Assimétricos E'), ['class' => 'ace']) !!}
        <span class="lbl"> Assimétricos E</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('gmach') }}</div>
    @endif
  </div>

  <div class="form-group">
    {!! Form::label('crip', 'Cristas Ilíacas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('crip', 'Simétricas', (@$postural->crip == 'Simétricas'), ['class' => 'ace']) !!}
        <span class="lbl"> Simétricas</span>
      </label>
      <label>
        {!! Form::radio('crip', 'Elevação D', (@$postural->crip == 'Elevação D'), ['class' => 'ace']) !!}
        <span class="lbl"> Elevação D</span>
      </label>
      <label>
        {!! Form::radio('crip', 'Elevação E', (@$postural->crip == 'Elevação E'), ['class' => 'ace']) !!}
        <span class="lbl"> Elevação E</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('crip') }}</div>
    @endif
  </div>

  <div class="form-group">
    {!! Form::label('preg', 'Pregas Glúteas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('preg', 'Simétricas', (@$postural->preg == 'Simétricas'), ['class' => 'ace']) !!}
        <span class="lbl"> Simétricas</span>
      </label>
      <label>
        {!! Form::radio('preg', 'Elevação D', (@$postural->preg == 'Elevação D'), ['class' => 'ace']) !!}
        <span class="lbl"> Elevação D</span>
      </label>
      <label>
        {!! Form::radio('preg', 'Elevação E', (@$postural->preg == 'Elevação E'), ['class' => 'ace']) !!}
        <span class="lbl"> Elevação E</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('preg') }}</div>
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
      @$postural->joel ,['id'=> 'joel','class' => 'col-xs-10 col-sm-5']) !!}
    </div>
  </div>

  <div class="form-group">
    {!! Form::label('pregp', 'Pregas Poplíteas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('pregp', 'Simétricas', (@$postural->pregp == 'Simétricas'), ['class' => 'ace']) !!}
        <span class="lbl"> Simétricas</span>
      </label>
      <label>
        {!! Form::radio('pregp', 'Elevação D', (@$postural->pregp == 'Elevação D'), ['class' => 'ace']) !!}
        <span class="lbl"> Elevação D</span>
      </label>
      <label>
        {!! Form::radio('pregp', 'Elevação E', (@$postural->pregp == 'Elevação E'), ['class' => 'ace']) !!}
        <span class="lbl"> Elevação E</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('pregp') }}</div>
    @endif
  </div>

  <div class="form-group">
    {!! Form::label('retrop', 'Retro-Pé: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
    <div class="radio">
      <label>
        {!! Form::radio('retrop', 'Normal D', (@$postural->retrop == 'Normal D'), ['class' => 'ace']) !!}
        <span class="lbl"> Normal D</span>
      </label>
      <label>
        {!! Form::radio('retrop', 'Normal E', (@$postural->retrop == 'Normal E'), ['class' => 'ace']) !!}
        <span class="lbl"> Normal E</span>
      </label>
      <label>
        {!! Form::radio('retrop', 'Valgo D', (@$postural->retrop == 'Valgo D'), ['class' => 'ace']) !!}
        <span class="lbl"> Valgo D</span>
      </label>
      <label>
        {!! Form::radio('retrop', 'Valgo E', (@$postural->retrop == 'Valgo E'), ['class' => 'ace']) !!}
        <span class="lbl"> Valgo E</span>
      </label>
      <label>
        {!! Form::radio('retrop', 'Varo D', (@$postural->retrop == 'Varo D'), ['class' => 'ace']) !!}
        <span class="lbl"> Varo D</span>
      </label>
      <label>
        {!! Form::radio('retrop', 'Varo E', (@$postural->retrop == 'Varo E'), ['class' => 'ace']) !!}
        <span class="lbl"> Varo E</span>
      </label>
    </div>
    @if($errors->any())
    <div class="red darken-4">&nbsp &nbsp{{ $errors->first('retrop') }}</div>
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
          {!! Form::radio('heada', 'Normal', (@$postural->heada == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('heada', 'Inclinada D', (@$postural->heada == 'Inclinada D'), ['class' => 'ace']) !!}
          <span class="lbl"> Inclinada D</span>
        </label>
        <label>
          {!! Form::radio('heada', 'Inclinada E', (@$postural->heada == 'Inclinada E'), ['class' => 'ace']) !!}
          <span class="lbl"> Inclinada E</span>
        </label>
        <label>
          {!! Form::radio('heada', 'Rodada D', (@$postural->heada == 'Rodada D'), ['class' => 'ace']) !!}
          <span class="lbl"> Rodada D</span>
        </label>
        <label>
          {!! Form::radio('heada', 'Rodada E', (@$postural->heada == 'Rodada E'), ['class' => 'ace']) !!}
          <span class="lbl"> Rodada E</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('heada') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('clava', 'Clavículas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('clava', 'Normal', (@$postural->clava == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('clava', 'Alterações', (@$postural->clava == 'Alterações'), ['class' => 'ace']) !!}
          <span class="lbl"> Alterações</span>
        </label>

      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('clava') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('gladc', 'Gladil Costal: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('gladc', 'Normal', (@$postural->gladc == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('gladc', 'Alterações', (@$postural->gladc == 'Alterações'), ['class' => 'ace']) !!}
          <span class="lbl"> Alterações</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('gladc') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('ombra', 'Ombros: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('ombra', 'Normal', (@$postural->ombra == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('ombra', 'Elevado D', (@$postural->ombra == 'Elevado D'), ['class' => 'ace']) !!}
          <span class="lbl"> Elevado D</span>
        </label>
        <label>
          {!! Form::radio('ombra', 'Elevado E ', (@$postural->ombra == 'Elevado E'), ['class' => 'ace']) !!}
          <span class="lbl"> Elevado E </span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('ombra') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('trit', 'Trângulo de Talles: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('trit', 'Simétricos', (@$postural->trit == 'Simétricos'), ['class' => 'ace']) !!}
          <span class="lbl"> Simétricos</span>
        </label>
        <label>
          {!! Form::radio('trit', 'Assimétricos D', (@$postural->trit == 'Assimétricos D'), ['class' => 'ace']) !!}
          <span class="lbl"> Assimétricos D</span>
        </label>
        <label>
          {!! Form::radio('trit', 'Assimétricos E', (@$postural->trit == 'Assimétricos E'), ['class' => 'ace']) !!}
          <span class="lbl"> Assimétricos E</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('trit') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('rott', 'Rotação de Tronco: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('rott', 'Para Direita', (@$postural->rott == 'Para Direita'), ['class' => 'ace']) !!}
          <span class="lbl"> Para Direita</span>
        </label>
        <label>
          {!! Form::radio('rott', 'Para Esquerda', (@$postural->rott == 'Para Esquerda'), ['class' => 'ace']) !!}
          <span class="lbl"> Para Esquerda</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('rott') }}</div>
      @endif
    </div>


    <div class="form-group">
      {!! Form::label('cri', 'Cristas Ilíacas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('cri', 'Simétricas', (@$postural->cri == 'Simétricas'), ['class' => 'ace']) !!}
          <span class="lbl"> Simétricas</span>
        </label>
        <label>
          {!! Form::radio('cri', 'Elevação D', (@$postural->cri == 'Elevação D'), ['class' => 'ace']) !!}
          <span class="lbl"> Elevação D</span>
        </label>
        <label>
          {!! Form::radio('cri', 'Elevação E', (@$postural->cri == 'Elevação E'), ['class' => 'ace']) !!}
          <span class="lbl"> Elevação E</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('cri') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('rotp', 'Rotação de Pelve: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('rotp', 'Para Direita', (@$postural->rotp == 'Para Direita'), ['class' => 'ace']) !!}
          <span class="lbl"> Para Direita</span>
        </label>
        <label>
          {!! Form::radio('rotp', 'Para Esquerda', (@$postural->rotp == 'Para Esquerda'), ['class' => 'ace']) !!}
          <span class="lbl"> Para Esquerda</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('rotp') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('joelhva', 'Joelho: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('joelhva', 'Normal D', (@$postural->joelhva == 'Normal D'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal D</span>
        </label>
        <label>
          {!! Form::radio('joelhva', 'Normal E', (@$postural->joelhva == 'Normal E'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal E</span>
        </label>
        <label>
          {!! Form::radio('joelhva', 'Valgo D', (@$postural->joelhva == 'Valgo D'), ['class' => 'ace']) !!}
          <span class="lbl"> Valgo D</span>
        </label>
        <label>
          {!! Form::radio('joelhva', 'Valgo E', (@$postural->joelhva == 'Valgo E'), ['class' => 'ace']) !!}
          <span class="lbl"> Valgo E</span>
        </label>
        <label>
          {!! Form::radio('joelhva', 'Varo D',  (@$postural->joelhva == 'Varo D'), ['class' => 'ace']) !!}
          <span class="lbl"> Varo D</span>
        </label>
        <label>
          {!! Form::radio('joelhva', 'Varo E',  (@$postural->joelhva == 'Varo E'), ['class' => 'ace']) !!}
          <span class="lbl"> Varo E</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('joelhva') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('palet', 'Paletas: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('palet', 'Normal', (@$postural->palet == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('palet', 'Laterizada D', (@$postural->palet == 'Laterizada D'), ['class' => 'ace']) !!}
          <span class="lbl"> Laterizada D</span>
        </label>
        <label>
          {!! Form::radio('palet', 'Laterizada E', (@$postural->palet == 'Laterizada E'), ['class' => 'ace']) !!}
          <span class="lbl"> Laterizada E</span>
        </label>
        <label>
          {!! Form::radio('palet', 'Medializada D', (@$postural->palet == 'Medializada D'), ['class' => 'ace']) !!}
          <span class="lbl"> Medializada D</span>
        </label>
        <label>
          {!! Form::radio('palet', 'Medializada E', (@$postural->palet == 'Medializada E'), ['class' => 'ace']) !!}
          <span class="lbl"> Medializada E</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('palet') }}</div>
      @endif
    </div>


    <div class="form-group">
      {!! Form::label('antp', 'Ante-Pé: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('antp', 'Normal D', (@$postural->antp == 'Normal D'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal D</span>
        </label>
        <label>
          {!! Form::radio('antp', 'Normal E', (@$postural->antp == 'Normal E'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal E</span>
        </label>
        <label>
          {!! Form::radio('antp', 'Pronado D', (@$postural->antp == 'Pronado D'), ['class' => 'ace']) !!}
          <span class="lbl"> Pronado D</span>
        </label>
        <label>
          {!! Form::radio('antp', 'Pronado E', (@$postural->antp == 'Pronado E'), ['class' => 'ace']) !!}
          <span class="lbl"> Pronado E</span>
        </label>
        <label>
          {!! Form::radio('antp', 'Supinado D', (@$postural->antp == 'Supinado D'), ['class' => 'ace']) !!}
          <span class="lbl"> Supinado D</span>
        </label>
        <label>
          {!! Form::radio('antp', 'Supinado E', (@$postural->antp == 'Supinado E'), ['class' => 'ace']) !!}
          <span class="lbl"> Supinado E</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('antp') }}</div>
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
          {!! Form::radio('headl', 'Normal', (@$postural->headl == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('headl', 'Anteriorizada', (@$postural->headl == 'Anteriorizada'), ['class' => 'ace']) !!}
          <span class="lbl"> Anteriorizada</span>
        </label>
        <label>
          {!! Form::radio('headl', 'Posteriorizada', (@$postural->headl == 'Posteriorizada'), ['class' => 'ace']) !!}
          <span class="lbl"> Posteriorizada</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('headl') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('cervc', 'Cervical: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('cervc', 'Normal', (@$postural->cervc == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('cervc', 'Hiperlordose', (@$postural->cervc == 'Hiperlordose'), ['class' => 'ace']) !!}
          <span class="lbl"> Hiperlordose</span>
        </label>
        <label>
          {!! Form::radio('cervc', 'Retificação', (@$postural->cervc == 'Retificação'), ['class' => 'ace']) !!}
          <span class="lbl"> Retificação</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('cervc') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('ombr', 'Ombros: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('ombr', 'Normal', (@$postural->ombr == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('ombr', 'Protusos', (@$postural->ombr == 'Protusos'), ['class' => 'ace']) !!}
          <span class="lbl"> Protusos</span>
        </label>
        <label>
          {!! Form::radio('ombr', 'Posteriorizados ', (@$postural->ombr == 'Posteriorizados'), ['class' => 'ace']) !!}
          <span class="lbl"> Posteriorizados </span>
        </label>
        <label>
          {!! Form::radio('ombr', 'Rodado Internamente ', (@$postural->ombr == 'Rodado Internamente'), ['class' => 'ace']) !!}
          <span class="lbl"> Rodado Internamente </span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('ombr') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('ms', 'MS: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('ms', 'Normal', (@$postural->ms == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('ms', 'Anteriorizado', (@$postural->ms == 'Anteriorizado'), ['class' => 'ace']) !!}
          <span class="lbl"> Anteriorizada</span>
        </label>
        <label>
          {!! Form::radio('ms', 'Posteriorizada', (@$postural->ms == 'Posteriorizada'), ['class' => 'ace']) !!}
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
          {!! Form::radio('abdo', 'Normal', (@$postural->abdo == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('abdo', 'Ptose', (@$postural->abdo == 'Ptose'), ['class' => 'ace']) !!}
          <span class="lbl"> Ptose</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('abdo') }}</div>
      @endif
    </div>


    <div class="form-group">
      {!! Form::label('dorsal', 'Dorsal: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('dorsal', 'Normal', (@$postural->dorsal == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('dorsal', 'Retificada', (@$postural->dorsal == 'Retificada'), ['class' => 'ace']) !!}
          <span class="lbl"> Retificada</span>
        </label>
        <label>
          {!! Form::radio('dorsal', 'Hipercifose', (@$postural->dorsal == 'Hipercifose'), ['class' => 'ace']) !!}
          <span class="lbl"> Hipercifose</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('dorsal') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('lombar', 'Lombar: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('lombar', 'Normal', (@$postural->lombar == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('lombar', 'Retificada', (@$postural->lombar == 'Retificada'), ['class' => 'ace']) !!}
          <span class="lbl"> Retificada</span>
        </label>
        <label>
          {!! Form::radio('lombar', 'Hiperlordose', (@$postural->lombar == 'Hiperlordose'), ['class' => 'ace']) !!}
          <span class="lbl"> Hiperlordose</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('lombar') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('pelve', 'Pelve: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('pelve', 'Normal', (@$postural->pelve == 'Normal'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal</span>
        </label>
        <label>
          {!! Form::radio('pelve', 'Anteriorizada', (@$postural->pelve == 'Anteriorizada'), ['class' => 'ace']) !!}
          <span class="lbl"> Anteriorizada</span>
        </label>
        <label>
          {!! Form::radio('pelve', 'Retrovertida', (@$postural->pelve == 'Retrovertida'), ['class' => 'ace']) !!}
          <span class="lbl"> Retrovertida</span>
        </label>
        <label>
          {!! Form::radio('pelve', 'Antepulsão', (@$postural->pelve == 'Antepulsão'), ['class' => 'ace']) !!}
          <span class="lbl"> Antepulsão</span>
        </label>
        <label>
          {!! Form::radio('pelve', 'Retropulsão', (@$postural->pelve == 'Retropulsão'), ['class' => 'ace']) !!}
          <span class="lbl"> Retropulsão</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('pelve') }}</div>
      @endif
    </div>

    <div class="form-group">
      {!! Form::label('joelh', 'Joelho: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('joelh', 'Normal D', (@$postural->joelh == 'Normal D'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal D</span>
        </label>
        <label>
          {!! Form::radio('joelh', 'Normal E', (@$postural->joelh == 'Normal E'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal E</span>
        </label>
        <label>
          {!! Form::radio('joelh', 'Hiperextensão D', (@$postural->joelh == 'Hiperextensão D'), ['class' => 'ace']) !!}
          <span class="lbl"> Hiperextensão D</span>
        </label>
        <label>
          {!! Form::radio('joelh', 'Hiperextensão E', (@$postural->joelh == 'Hiperextensão E'), ['class' => 'ace']) !!}
          <span class="lbl"> Hiperextensão E</span>
        </label>
        <label>
          {!! Form::radio('joelh', 'Fletido D', (@$postural->joelh == 'Fletido D'), ['class' => 'ace']) !!}
          <span class="lbl"> Fletido D</span>
        </label>
        <label>
          {!! Form::radio('joelh', 'Fletido E', (@$postural->joelh == 'Fletido E'), ['class' => 'ace']) !!}
          <span class="lbl"> Fletido E</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('joelh') }}</div>
      @endif
    </div>


    <div class="form-group">
      {!! Form::label('medp', 'Médio-Pé: ', ['class' => 'col-sm-3 control-label no-padding-right']) !!}
      <div class="radio">
        <label>
          {!! Form::radio('medp', 'Normal D', (@$postural->medp == 'Normal D'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal D</span>
        </label>
        <label>
          {!! Form::radio('medp', 'Normal E', (@$postural->medp == 'Normal E'), ['class' => 'ace']) !!}
          <span class="lbl"> Normal E</span>
        </label>
        <label>
          {!! Form::radio('medp', 'Cavo D', (@$postural->medp == 'Cavo D'), ['class' => 'ace']) !!}
          <span class="lbl"> Cavo D</span>
        </label>
        <label>
          {!! Form::radio('medp', 'Cavo E', (@$postural->medp == 'Cavo E'), ['class' => 'ace']) !!}
          <span class="lbl"> Cavo E</span>
        </label>
        <label>
          {!! Form::radio('medp', 'Plano D', (@$postural->medp == 'Plano D'), ['class' => 'ace']) !!}
          <span class="lbl"> Plano D</span>
        </label>
        <label>
          {!! Form::radio('medp', 'Plano E', (@$postural->medp == 'Plano E'), ['class' => 'ace']) !!}
          <span class="lbl"> Plano E</span>
        </label>
      </div>
      @if($errors->any())
      <div class="red darken-4">&nbsp &nbsp{{ $errors->first('medp') }}</div>
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
</div>
