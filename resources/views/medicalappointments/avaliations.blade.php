<?php $nav_con = 'active'; $menuc_open = 'active open'; ?>
@extends('layout/layout')

@section('content')

<div class="row">

  <div class="col-sm-10 col-md-offset-1">

    <div class="widget-box">
      <div class="widget-header widget-header-flat">
        <h4 class="widget-title purple">Dados da consulta</h4>
      </div>

      <div class="widget-body">
        <div class="widget-main">
          <div class="row">
            <div class="">
              {{ Form::open(array('route' => 'medicalappointments.store', 'class' => 'form-horizontal')) }}

              {{ Form::token() }}

              <div class="form-group">
                {!!  Form::label('form-field-1', 'Id. da Consulta:: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
                <div class="col-sm-9">
                  {!! Form::text('patient_name', $medicalappointment->id, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}
                </div>
              </div>


              <div class="form-group">
                {!!  Form::label('form-field-1', 'Paciente: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
                <div class="col-sm-9">
                  {!! Form::text('patient_name', $medicalappointment->patient->person->name, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}
                  @if($errors->any())
                  <div class="red darken-4">&nbsp &nbsp{!! $errors->first('patient_name') !!}</div>
                  @endif
                </div>
              </div>

              {!! Form::hidden('patient_id', @$medicalappointment->patient_id, ['id'=>'idPatient']) !!}

              <div class="form-group">
                {!! Form::label('form-field-5', 'Profissional:', ['class'=> 'col-sm-3 control-label no-padding-right']) !!}
                <div class="col-sm-9">
                  {!! Form::text('professional_id', $medicalappointment->professional->person->name, ['disabled'=>'disabled', 'class' => 'col-xs-10 col-sm-5']) !!}
                  @if($errors->any())
                  <div class="red darken-4">{{ $errors->first('professionals') }}</div>
                  @endif
                </div>
              </div>

              {!! Form::hidden('professional_id', Auth::user()->id ) !!}


              <div class="form-group">
                {!!  Form::label('form-field-1', 'Data: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
                <div class="col-sm-9">
                  {!! Form::text('date_hour', $medicalappointment->date_hour, ['disabled'=>'disabled','class' => 'col-xs-10 col-sm-5']) !!}
                </div>
              </div>

              <div class="form-group">
                {!!  Form::label('form-field-1', 'Descrição: ', ['class' => 'col-sm-3 control-label no-padding-right'])  !!}
                <div class="col-sm-9">
                  {!! Form::textarea('description', $medicalappointment->description, ['disabled'=>'disabled','size' => '30x5','class' => 'col-xs-10 col-sm-8 description']) !!}
                  @if($errors->any())
                  <div class="red darken-4">&nbsp &nbsp{!! $errors->first('description') !!}</div>
                  @endif
                </div>
              </div>

              <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">

                  <div class="btn-group">
                    <a class="btn btn-primary btn-xlg" href="{{ URL::to('postural/avaliation/'. $medicalappointment->id ) }}">
                      Avaliação Postural
                    </a>
                    <a class="btn btn-success btn-xlg" href="{{ URL::to('medicalappointments/formneurological') }}">
                      Avaliação Neurológica
                    </a>
                  </div>


                </div>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.col -->
</div>

@stop

@push('page-script')
<script src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('assets/js/moment/locale/pt-br.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>



<script type="text/javascript">
$(function(){

  $('#timepicker1').timepicker({
    minuteStep: 1,
    showSeconds: false,
    showMeridian: false,
    disableFocus: true,
    icons: {
      up: 'fa fa-chevron-up',
      down: 'fa fa-chevron-down'
    }
  }).on('focus', function() {
    $('#timepicker1').timepicker('showWidget');
  }).next().on(ace.click_event, function(){
    $(this).prev().focus();
  });


  $('#date-timepicker1').datetimepicker({
    format: 'L LT',//use this option to display seconds
    locale: 'pt-br',
    icons: {
      time: 'fa fa-clock-o',
      date: 'fa fa-calendar',
      up: 'fa fa-chevron-up',
      down: 'fa fa-chevron-down',
      previous: 'fa fa-chevron-left',
      next: 'fa fa-chevron-right',
      today: 'fa fa-arrows ',
      clear: 'fa fa-trash',
      close: 'fa fa-times'
    }
  });

});



</script>

@endpush
