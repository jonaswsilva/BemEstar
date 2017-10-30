<?php $nav_session = 'active'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
    <div>
      <h3 class="header smaller lighter purple">Dados das Sessões</h3>
    </div>


    <div class="pull-right">

      <div class="btn-toolbar inline middle no-margin">
        <div data-toggle="buttons" class="btn-group no-margin">
          <!-- <a class="btn btn-info pull-right" href="{{ URL::to('medicalrecords/'. $medicalrecord->id .'/pdf') }}"><i class="ace-icon fa fa-file bigger-110"></i>Gerar PDF</a> -->


        </div>
      </div>
    </div>
  </div>
</div>

  <div>
    <div id="user-profile-1" class="user-profile row">
      <div class="col-xs-12 col-sm-3 center">
        <div>
          <span class="profile-picture">
            <img id="avatar" class="editable img-responsive" src="/assets/images/avatars/{{ $medicalrecord->patient->avatar }}" />
          </span>

          <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
            <div class="inline position-relative">
              <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                <span class="white">{{ $medicalrecord->patient->person->name }}</span>
              </a>
            </div>
          </div>
        </div>

        <div class="hr hr12 dotted"></div>

        <div class="clearfix">
          <div class="grid2">
            <a class="btn btn-warning" href="{{ URL::to('medicalrecords') }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
          </div>

          <div class="grid2">
            <a class="btn btn-primary" href="{{ URL::to('medicalrecords/'. $medicalrecord->id .'/edit') }}"><i class="ace-icon fa fa-pencil bigger-110"></i>Editar</a>
          </div>
        </div>



      </div>

      <div class="col-xs-12 col-sm-9">

        <h3 class="header smaller lighter blue">Dados do Paciente</h3>
        <div class="space-12"></div>
        <!-- <div class="col-md-11 col-md-offset-1">
        <a class="btn btn-info pull-right" href="{{ URL::to('medicalrecords/'. $medicalrecord->id .'/pdf') }}"><i class="ace-icon fa fa-file bigger-110"></i>Gerar PDF</a>
        </div> -->
        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Id Paciente</div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalrecord->patient_id }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Paciente </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalrecord->patient->person->name .' '. $medicalrecord->patient->person->lastname }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> CPF </div>

            <div class="profile-info-value">
              <span class="editable cpf" id="username">{{ $medicalrecord->patient->person->cpf }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> RG </div>
            <!-- $medicalrecord->date_mu->format('d/m/Y') -->
            <div class="profile-info-value">
              <span class="editable rg" id="username">{{ $medicalrecord->patient->person->rg }}</span>
            </div>
          </div>


          <div class="profile-info-row">
            <div class="profile-info-name"> Data de cadastro </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalrecord->patient->created_at }}</span>
            </div>
          </div>


        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Dados do Profissional</h3>
        <div class="profile-user-info profile-user-info-striped">


          <div class="profile-info-row">
            <div class="profile-info-name"> Dr.(a): </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalrecord->professional->person->name.' '.$medicalrecord->professional->person->lastname }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> CPF: </div>

            <div class="profile-info-value">
              <span class="editable cpf" id="username">{{ $medicalrecord->professional->person->cpf }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> CRM: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalrecord->professional->crm }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Especialidade: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalrecord->professional->especialitie->name }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <a class="btn btn-success btn-xs pull-right" href="{{ URL::to('medicalrecords/session') }}"><i class="ace-icon fa fa-file-o bigger-120"></i> Realizar Sessão</a>
        <h3 class="header smaller lighter blue">Marcação das Sessões</h3>
        <div class="profile-user-info profile-user-info-striped">

          <div class="profile-info-row">
            <div class="profile-info-name"> Marcado Dia: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $medicalrecord->date }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> N° de sessões: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $medicalrecord->number_of_sessions }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Observação: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $medicalrecord->description }}</span>
            </div>
          </div>
        </div>
        @include('flash::message')
        @foreach ($sessions as $session)

        <div class="space-20"></div>

        <h3 class="header smaller lighter blue">Sessão dia {{ $session->date }}</h3>
        <div class="col-md-11 col-md-offset-1">
            {!! Form::open(['url'=>'medicalrecords/destroy/'.$session->id.'/medical/'.$medicalrecord->id , 'method'=>'post','class'=>'delete']) !!}
            {{ csrf_field() }}

            <button type="submit" class="btn btn-danger btn-xs pull-right" >Excluir</button>
          {!! Form::close() !!}
        </div>
        <div class="profile-user-info profile-user-info-striped">

          <div class="profile-info-row">
            <div class="profile-info-name"> Hora: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $session->hour }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Realizado: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $session->description }}</span>
            </div>
          </div>

        </div>
        @endforeach

        <div class="space-6"></div>


      </div>
    </div>
  </div>




</div>

@endsection
