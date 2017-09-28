<?php $menu_open = 'active open'; $nav_pat = 'active'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h3 class="header smaller lighter blue">Dados da Consulta</h3>
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

        <div class="hr hr12 dotted"></div>
        <a class="btn btn-info" href="{{ URL::to('medicalappointments/'. $medicalappointment->id .'/pdf') }}"><i class="ace-icon fa fa-file bigger-110"></i>PDF</a>


      </div>

      <div class="col-xs-12 col-sm-9">


        <div class="space-12"></div>

        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Id </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->id }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Paciente </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->patient->person->name }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Professional </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->professional->person->name }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Data </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->date_mu->format('d/m/Y') }}</span>
            </div>
          </div>


          <div class="profile-info-row">
            <div class="profile-info-name"> Hora </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->hour }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Descrição </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $medicalappointment->description }}</span>
            </div>
          </div>


        </div>

        <div class="space-20"></div>

        <div class="space-12"></div>

        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Id </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->id }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Anamnese: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->comment }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Vista Posterior</h3>
        <div class="profile-user-info profile-user-info-striped">


          <div class="profile-info-row">
            <div class="profile-info-name"> Cabeça: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->head }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Cervical: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->cerv }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Ombros: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->omb }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Escápula Direita: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->escd }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Escápula Esquerda: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->esce }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Dorsal: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->dorsp }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Triângulo de Talles: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->tritp }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Golpe do Machado: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->gmach }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Cristas Ilíacas: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $postural->crip }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Pregas Glúteas: </div>

            <div class="profile-info-value">
              <span class="editable" id="country">{{ $postural->preg }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Joelhos: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->joel }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Pregas Poplíteas: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->pregp }}</span>
            </div>
          </div>


          <div class="profile-info-row">
            <div class="profile-info-name"> Retro-pé: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->retrop }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Vista Anterior</h3>
        <div class="profile-user-info profile-user-info-striped">

          <div class="profile-info-row">
            <div class="profile-info-name"> Cabeça: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->heada }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Clavículas: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Gladil Costal: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->gladc }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Ombros: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->ombra }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Triângulo de Talles: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->trit }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Rotação de Tronco: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->rott }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Cristas Ilíacas: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->cri }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Rotação de Pelve: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->rotp }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Joelho: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->joelhva }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Paletas: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->palet }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Ante-Pé: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->antp }}</span>
            </div>
          </div>

        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Vista Lateral</h3>
        <div class="profile-user-info profile-user-info-striped">

          <div class="profile-info-row">
            <div class="profile-info-name"> Cabeça: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->heada }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Cervical: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Ombros: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> MS: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Abdomem: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Dorsal: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Lombar: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Pelve: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Joelho: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Médio-Pé: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $postural->clava }}</span>
            </div>
          </div>

        </div>

        <div class="space-6"></div>

        <div class="hr hr2 hr-double"></div>

        <div class="space-6"></div>


      </div>
    </div>
  </div>




</div>

@endsection
