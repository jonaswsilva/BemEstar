<?php $nav_con = 'active'; $menuc_open = 'active open'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
    <div>
      <h3 class="header smaller lighter purple">Dados da Consulta</h3>
    </div>


    <div class="pull-right">

      <div class="btn-toolbar inline middle no-margin">
        <div data-toggle="buttons" class="btn-group no-margin">
          <!-- <a class="btn btn-info pull-right" href="{{ URL::to('medicalappointments/'. $medicalappointment->id .'/pdf') }}"><i class="ace-icon fa fa-file bigger-110"></i>Gerar PDF</a> -->


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
            <img id="avatar" class="editable img-responsive" src="/assets/images/avatars/{{ $medicalappointment->patient->avatar }}" />
          </span>

          <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
            <div class="inline position-relative">
              <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                <span class="white">{{ $medicalappointment->patient->person->name }}</span>
              </a>
            </div>
          </div>
        </div>

        <div class="hr hr12 dotted"></div>

        <div class="clearfix">
          <div class="grid2">
            <a class="btn btn-warning" href="{{ URL::to('medicalappointments') }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
          </div>

          <div class="grid2">
            <a class="btn btn-primary" href="{{ URL::to('medicalappointments/'. $medicalappointment->id .'/edit') }}"><i class="ace-icon fa fa-pencil bigger-110"></i>Editar</a>
          </div>
        </div>



      </div>

      <div class="col-xs-12 col-sm-9">

        <h3 class="header smaller lighter blue">Dados do Paciente</h3>
        <div class="space-12"></div>
        <!-- <div class="col-md-11 col-md-offset-1">
        <a class="btn btn-info pull-right" href="{{ URL::to('medicalappointments/'. $medicalappointment->id .'/pdf') }}"><i class="ace-icon fa fa-file bigger-110"></i>Gerar PDF</a>
        </div> -->
        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Id Paciente</div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->patient_id }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Paciente </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->patient->person->name .' '. $medicalappointment->patient->person->lastname }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> CPF </div>

            <div class="profile-info-value">
              <span class="editable cpf" id="username">{{ $medicalappointment->patient->person->cpf }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> RG </div>
            <!-- $medicalappointment->date_mu->format('d/m/Y') -->
            <div class="profile-info-value">
              <span class="editable rg" id="username">{{ $medicalappointment->patient->person->rg }}</span>
            </div>
          </div>


          <div class="profile-info-row">
            <div class="profile-info-name"> Data de cadastro </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->patient->created_at }}</span>
            </div>
          </div>


        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Dados do Profissional</h3>
        <div class="profile-user-info profile-user-info-striped">


          <div class="profile-info-row">
            <div class="profile-info-name"> Dr.(a): </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->professional->person->name.' '.$medicalappointment->professional->person->lastname }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> CPF: </div>

            <div class="profile-info-value">
              <span class="editable cpf" id="username">{{ $medicalappointment->professional->person->cpf }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> CRM: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->professional->crm }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Especialidade: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->professional->especialitie->name }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Dados da Consulta</h3>
        <div class="profile-user-info profile-user-info-striped">

          <div class="profile-info-row">
            <div class="profile-info-name"> Dia: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $medicalappointment->date_mu->format('d/m/Y') }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Hora: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $medicalappointment->hour }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Avaliação postural: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">Sim</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Avaliação Neurológica: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">Não</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Observação: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $medicalappointment->description }}</span>
            </div>
          </div>
        </div>

        <div class="space-6"></div>


      </div>
    </div>
  </div>




</div>

@endsection
