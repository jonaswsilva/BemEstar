<?php $nav_con = 'active'; $menuc_open = 'active open'; ?>
@extends('layout/layout')

@section('content')

<div class="col-xs-12">
  <!-- PAGE CONTENT BEGINS -->

  <div class="hr hr-18 hr-double dotted"></div>

  <div class="widget-box">
    <div class="widget-header widget-header-blue widget-header-flat">
      <h4 class="widget-title lighter">Avaliação Neurológica</h4>
<!--
      <div class="widget-toolbar">
        <label>
          <small class="green">
            <b>Validation</b>
          </small>

          <input id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4" />
          <span class="lbl middle"></span>
        </label>
      </div> -->
    </div>

    <div class="widget-body">
      <div class="widget-main">
        <div id="fuelux-wizard-container">
          <div>
            <ul class="steps">
              <li data-step="1" class="active">
                <span class="step">1</span>
                <span class="title">Anamnese</span>
              </li>

              <li data-step="2">
                <span class="step">2</span>
                <span class="title">Inspeção</span>
              </li>

              <li data-step="3">
                <span class="step">3</span>
                <span class="title">Palpação</span>
              </li>

              <li data-step="4">
                <span class="step">4</span>
                <span class="title">Controle Motor</span>
              </li>

              <li data-step="5">
                <span class="step">5</span>
                <span class="title">Força Muscular</span>
              </li>

              <li data-step="6">
                <span class="step">6</span>
                <span class="title">Avaliação Sensorial</span>
              </li>

              <li data-step="7">
                <span class="step">7</span>
                <span class="title">Reflexos</span>
              </li>

              <li data-step="8">
                <span class="step">8</span>
                <span class="title">Avaliação Completa</span>
              </li>

            </ul>
          </div>

          <hr />

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
        </div>

        <hr />
        <div class="wizard-actions">
          <button class="btn btn-prev">
            <i class="ace-icon fa fa-arrow-left"></i>
            Anterior
          </button>

          <button class="btn btn-success btn-next" data-last="Finalizar">
            Próximo
            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
          </button>
        </div>
      </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
  </div>



  </div><!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
@stop

@push('page-script')

<script src="{{ asset('assets/js/wizard.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-additional-methods.min.js') }}"></script>
<script src="{{ asset('assets/js/bootbox.js') }}"></script>
<script src="{{ asset('assets/js/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>

<script type="text/javascript">
  jQuery(function($) {

    $('[data-rel=tooltip]').tooltip();

    $('.select2').css('width','200px').select2({allowClear:true})
    .on('change', function(){
      $(this).closest('form').validate().element($(this));
    });


    var $validation = false;
    $('#fuelux-wizard-container')
    .ace_wizard({
      //step: 2 //optional argument. wizard will jump to step "2" at first
      //buttons: '.wizard-actions:eq(0)'
    })
    .on('actionclicked.fu.wizard' , function(e, info){
      if(info.step == 1 && $validation) {
        if(!$('#validation-form').valid()) e.preventDefault();
      }
    })
    //.on('changed.fu.wizard', function() {
    //})
    .on('finished.fu.wizard', function(e) {
      bootbox.dialog({
        message: "Thank you! Your information was successfully saved!",
        buttons: {
          "success" : {
            "label" : "OK",
            "className" : "btn-sm btn-primary"
          }
        }
      });
    }).on('stepclick.fu.wizard', function(e){
      //e.preventDefault();//this will prevent clicking and selecting steps
    });


    //jump to a step
    /**
    var wizard = $('#fuelux-wizard-container').data('fu.wizard')
    wizard.currentStep = 3;
    wizard.setState();
    */

    //determine selected step
    //wizard.selectedItem().step



    //hide or show the other form which requires validation
    //this is for demo only, you usullay want just one form in your application
    // $('#skip-validation').removeAttr('checked').on('click', function(){
    //   $validation = this.checked;
    //   if(this.checked) {
    //     $('#sample-form').hide();
    //     $('#validation-form').removeClass('hide');
    //   }
    //   else {
    //     $('#validation-form').addClass('hide');
    //     $('#sample-form').show();
    //   }
    // })



    //documentation : http://docs.jquery.com/Plugins/Validation/validate


    $.mask.definitions['~']='[+-]';
    $('#phone').mask('(999) 999-9999');

    jQuery.validator.addMethod("phone", function (value, element) {
      return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
    }, "Enter a valid phone number.");

    $('#validation-form').validate({
      errorElement: 'div',
      errorClass: 'help-block',
      focusInvalid: false,
      ignore: "",
      rules: {
        email: {
          required: true,
          email:true
        },
        password: {
          required: true,
          minlength: 5
        },
        password2: {
          required: true,
          minlength: 5,
          equalTo: "#password"
        },
        name: {
          required: true
        },
        phone: {
          required: true,
          phone: 'required'
        },
        url: {
          required: true,
          url: true
        },
        comment: {
          required: true
        },
        state: {
          required: true
        },
        platform: {
          required: true
        },
        subscription: {
          required: true
        },
        gender: {
          required: true,
        },
        agree: {
          required: true,
        }
      },

      messages: {
        email: {
          required: "Please provide a valid email.",
          email: "Please provide a valid email."
        },
        password: {
          required: "Please specify a password.",
          minlength: "Please specify a secure password."
        },
        state: "Please choose state",
        subscription: "Please choose at least one option",
        gender: "Please choose gender",
        agree: "Please accept our policy"
      },


      highlight: function (e) {
        $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
      },

      success: function (e) {
        $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
        $(e).remove();
      },

      errorPlacement: function (error, element) {
        if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
          var controls = element.closest('div[class*="col-"]');
          if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
          else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
        }
        else if(element.is('.select2')) {
          error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
        }
        else if(element.is('.chosen-select')) {
          error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
        }
        else error.insertAfter(element.parent());
      },

      submitHandler: function (form) {
      },
      invalidHandler: function (form) {
      }
    });




    $('#modal-wizard-container').ace_wizard();
    $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


    /**
    $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
      $(this).closest('form').validate().element($(this));
    });

    $('#mychosen').chosen().on('change', function(ev) {
      $(this).closest('form').validate().element($(this));
    });
    */


    $(document).one('ajaxloadstart.page', function(e) {
      //in ajax mode, remove remaining elements before leaving page
      $('[class*=select2]').remove();
    });
  })
</script>
@endpush
