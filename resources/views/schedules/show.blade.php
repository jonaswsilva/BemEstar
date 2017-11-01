<?php $menu_open = 'active open'; $nav_pat = 'active'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h3 class="header smaller lighter blue">Agendamento de consulta</h3>
    </div>


    <div class="pull-right">

      <div class="btn-toolbar inline middle no-margin">
        <div data-toggle="buttons" class="btn-group no-margin">


        </div>
      </div>
    </div>
  </div>
</div>
<div class="hr dotted"></div>
<div>
  <div id="user-profile-1" class="user-profile row">
    <div class="col-xs-12 col-sm-3 center">
      <div>
        <span class="profile-picture">
          <img id="avatar" class="editable img-responsive" src="/assets/images/avatars/{{ $schedule->patient->avatar }}" />
        </span>



        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
          <div class="inline position-relative">
            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
              <i class="ace-icon fa fa-circle light-green"></i>
              &nbsp;
              <span class="white">{{ $schedule->patient->person->name }}</span>
            </a>
          </div>
        </div>
      </div>

      <div class="hr hr12 dotted"></div>



    </div>

    <div class="col-xs-12 col-sm-9">


      <div class="space-12"></div>

      <div class="profile-user-info profile-user-info-striped">


        <div class="col-sm-10 infobox-container">
          <div class="infobox infobox-green">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-user"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content">Paciente:</div>
              <span class="infobox-data-number">{{ $schedule->patient->person->name }}</span>

            </div>


          </div>

          <div class="infobox infobox-blue">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-user-md"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content">Profissional:</div>
              <span class="infobox-data-number">{{ $schedule->professional->person->name }}</span>
            </div>

          </div>


          <div class="infobox infobox-red">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-calendar"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content">Data:</div>
              <span class="infobox-data-number">{{ $schedule->date }}</span>
            </div>
          </div>

          <div class="infobox infobox-pink">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-clock-o"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content">Horário:</div>
              <span class="infobox-data-number">{{ $schedule->hour }}</span>

            </div>

          </div>

          <div class="space-6"></div>

          <div class="infobox infobox-orange infobox-small infobox-dark">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-undo"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content"><a class="btn btn-warning" href="{{ URL::to('schedules/all') }}">Voltar</a></div>

            </div>
          </div>

          <div class="infobox infobox-blue infobox-small infobox-dark">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-pencil"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content"><a class="btn btn-primary" href="{{ URL::to('schedules/'. $schedule->id .'/edit') }}">Editar</a></div>
            </div>
          </div>

          <div class="infobox infobox-red infobox-small infobox-dark">
            <div class="infobox-icon">
              <i class="ace-icon fa fa-times"></i>
            </div>

            <div class="infobox-data">
              <div class="infobox-content"><a href="#" class="btn btn-danger btn-delete" data-rel="tooltip" title="Delete">Excluir</a></div>

            </div>
          </div>
        </div>

        <div class="vspace-12-sm"></div>

      </div>

      <div class="space-20"></div>

      <div class="hr hr2 hr-double"></div>

      <div class="space-6"></div>

    </div>
  </div>
</div>
{{ Form::open(array('url' => 'schedules/' . @$schedule->id, 'id' => 'form-delete')) }}
{{ Form::hidden('_method', 'DELETE') }}

{{ Form::close() }}
</div>

@endsection

@push('page-script')
<script type="text/javascript">
jQuery(function($) {

  $('.btn-delete').click(function(e){
    e.preventDefault();
    // confirmo que quiere borrar el cliente!
    var deleteClient = confirm('Deseja mesmo excluir esta consulta?');
    if (deleteClient === true) {
      var row = $(this).closest('tr');
      //var id = row.attr('data-id');
      // non funka!: var row = $(this).parents('tr');
      var id = row.data('id');
      var form = $('#form-delete');
      var url = form.attr('action').replace(':USER_ID', id);
      var data = form.serialize();

      row.fadeOut(function () {
        $.post(url, data, function (result) {
          alert(result);
        }).fail(function () {
          alert('Il Cliente non è stato cancellato!');
          row.show();
        });
      });
    } else {
      return false;
    }
  })

})

</script>
@endpush
