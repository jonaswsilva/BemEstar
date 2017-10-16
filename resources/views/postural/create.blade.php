<?php $nav_con = 'active'; $menuc_open = 'active open'; ?>
@extends('layout/layout')

@section('content')

<div class="col-xs-12">
  <!-- PAGE CONTENT BEGINS -->

  <div class="widget-box">
    <div class="widget-header widget-header-purple widget-header-flat">
      <h4 class="widget-title lighter">Avaliação Postural</h4>

    </div>
    <div class="hr hr-18 hr-double dotted"></div>
    <div class="row">
      <div class=" hr-18"></div>
      <div class="col-6 col-sm-4">{!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_name', $medicalappointment->patient->person->name, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
      <div class="col-6 col-sm-4">{!!  Form::label('form-field-1', 'Rg: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_cpf', $medicalappointment->patient->person->rg, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
      <div class="col-6 col-sm-4">{!!  Form::label('form-field-1', 'Cpf: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_cpf', $medicalappointment->patient->person->cpf, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
    </div>

    <div class="row">
      <div class=" hr-18"></div>
      <div class="col-6 col-sm-5">{!!  Form::label('form-field-1', 'Professional: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_name', $medicalappointment->professional->person->name, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
      <div class="col-6 col-sm-4">{!!  Form::label('form-field-1', 'CRM: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}{!! Form::text('patient_cpf', $medicalappointment->professional->crm, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}</div>
    </div>

    <div class="hr hr-18 hr-double dotted"></div>

    <div class="widget-body">
      <div class="widget-main">
        <div id="fuelux-wizard-container">
          <div>
            <ul class="steps">
              <li data-step="1" class="active">
                <span class="step">1</span>
                <span class="title">Vista Posterior</span>
              </li>

              <li data-step="2">
                <span class="step">2</span>
                <span class="title">Vista Anterior</span>
              </li>

              <li data-step="3">
                <span class="step">3</span>
                <span class="title">Vista Lateral</span>
              </li>

              <li data-step="4">
                <span class="step">4</span>
                <span class="title">Avaliação Completa</span>
              </li>
            </ul>
          </div>

          <hr />

          <div class="step-content pos-rel">

            {!! Form::open(['route' => 'postural.store', 'method' => 'post' ,'class' => 'form-horizontal']) !!}
            {!! Form::hidden('medicalappointment_id', @$medicalappointment->id, ['id'=>'idMedical']) !!}

            @include('postural/_form')

            {!! Form::close() !!}
          </div>
        </div>
      </div>

      <hr />
      <div class="wizard-actions">
        <button class="btn btn-prev">
          <i class="ace-icon fa fa-arrow-left"></i>
          Anterior
        </button>

        <button class="btn btn-success btn-next" type="submit" data-last="Finalizar">
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
      message: "Obrigado! Avaliação realizada com sucesso!",
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
