<?php $nav_session = 'active'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-xs-12">
    <h2 class="header smaller lighter green">Sessões</h2>

    <div class="pull-left">
      <a class="btn btn-info" href="{{ URL::to('medicalrecords/create') }}"><i class="ace-icon fa fa-file-o"></i>Marcar Sessão</a>
      <a class="btn btn-warning" href="{{ URL::to('medicalrecords/session/find') }}"><i class="ace-icon fa fa-file-o bigger-120"></i> Realizar Sessão</a>
    </div>

    <div class="clearfix">
      <div class="pull-right tableTools-container"></div>
    </div>
    @include('flash::message')
    @if (Session::has('message'))
      <div class="alert alert-{{ @$alert }}">{{ Session::get('message') }}</div>
    @endif

    <div class="table-header">
      Resultado para Procedimentos
    </div>

    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->
    <div>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th class="center">Id</th>
            <th><i class="fa fa-wheelchair"></i>Paciente</th>
            <th><i class="fa fa-user-md"></i>Profissional</th>
            <th>N° de sessões</th>
            <th><i class=""></i>Sessões realizadas</th>

            <th></th>
          </tr>
        </thead>

        <tbody>
          @foreach ($medicalrecords as $medicalrecord)
          <tr>

            <td class="center">{{ $medicalrecord->id }}</td>
            <td>{{ $medicalrecord->patient->person->name }}</td>
            <td>{{ $medicalrecord->professional->person->name }}</td>
            <td class="text-center">{{ $medicalrecord->number_of_sessions }}</td>
            <td class="text-center">{{ $medicalrecord->actual_session }}</td>

            <td>
              <div class="hidden-sm hidden-xs btn-group">
                {!! Form::open(['url'=>'medicalrecords/'.$medicalrecord->id,'method'=>'post','class'=>'delete']) !!}
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}

                <a class="btn btn-xs btn-success" href="{{ URL::to('medicalrecords/'.$medicalrecord->id) }}">
                  <i class="ace-icon fa fa-check bigger-120"></i>Ver sessões
                </a>

                <a class="btn btn-xs btn-info" href="{{ URL::to('medicalrecords/'. $medicalrecord->id .'/edit') }}" data-toggle="modal">
                  <i class="ace-icon fa fa-pencil bigger-120"></i>Editar
                </a>


                <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="bottom" title="Excluir Consulta" ><i class="ace-icon fa fa-trash-o bigger-120"></i>Excluir</button>
              {!! Form::close() !!}
              </div>

              <div class="hidden-md hidden-lg">
                <div class="inline pos-rel">
                  <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                  </button>

                  <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                    <li>
                      <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                        <span class="blue">
                          <i class="ace-icon fa fa-search-plus bigger-120"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                        <span class="green">
                          <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                        <span class="red">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ Form::open(array('url' => 'medicalrecords/' . @$medicalrecord->id, 'id' => 'form-delete')) }}
        {{ Form::hidden('_method', 'DELETE') }}

      {{ Form::close() }}

    </div>
  </div>
</div>

@stop

@push('page-script')

<script type="text/javascript">

jQuery(function($) {

$('.btn-delete').click(function(e){
    e.preventDefault();
    // confirmo que quiere borrar el cliente!
    var deleteClient = confirm('Deseja mesmo excluir este procedimento?');
    if (deleteClient === true) {
        var row = $(this).closest('tr');
        //var id = row.attr('data-id');
        // non funka!: var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':USER_ID', id);
        var data = form.serialize();
        // enfoque optimista (antes de borrar oculto la fila
        row.fadeOut(function () {
            $.post(url, data, function (result) {
                alert(result);
            }).fail(function () {
                alert('Sessão não foi excluída!');
                row.show();
            });
        });
    }
    else {
        return false;
    }
})
})


</script>

@endpush
