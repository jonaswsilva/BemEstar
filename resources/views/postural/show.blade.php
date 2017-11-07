<?php $nav_con = 'active'; $menuc_open = 'active open'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
    <div>
      <h3 class="header smaller lighter purple">Avaliação Postural {{ $postural->medicalappointment->patient->person->name }}</h3>
    </div>


    <!-- <div class="pull-right">

      <div class="btn-toolbar inline middle no-margin">
        <div data-toggle="buttons" class="btn-group no-margin">


        </div>
      </div>
    </div> -->
  </div>
</div>

<div>
  <div id="user-profile-1" class="user-profile row">
    <div class="col-xs-12 col-sm-3 center">
      <div>
        <span class="profile-picture">
          <img id="avatar" class="editable img-responsive" src="/assets/images/avatars/{{ $postural->medicalappointment->patient->avatar }}" />
        </span>

        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
          <div class="inline position-relative">
            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
              <span class="white">Paciente: {{ $postural->medicalappointment->patient->person->name }}</span>
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
          <a class="btn btn-primary" href="{{ URL::to('postural/'. $postural->id .'/edit') }}"><i class="ace-icon fa fa-pencil bigger-110"></i>Editar</a>
        </div>
      </div>



    </div>

    <div class="col-xs-12 col-sm-9">


      <div class="space-12"></div>

      <div class="col-md-11 col-md-offset-1">
        {!! Form::open(['url'=>'postural/'.$postural->id,'method'=>'post','class'=>'delete']) !!}
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger pull-right" >Excluir</button>
      {!! Form::close() !!}
      <a class="btn btn-info pull-right" target="_blank" href="{{ URL::to('postural/'. $postural->medicalappointment->id .'/pdf') }}"><i class="ace-icon fa fa-file bigger-110"></i>Gerar PDF</a>
      </div>
      <div class="profile-user-info profile-user-info-striped">

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
            <span class="editable" id="login">{{ $postural->headl }}</span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Cervical: </div>

          <div class="profile-info-value">
            <span class="editable" id="login">{{ $postural->cervc }}</span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Ombros: </div>

          <div class="profile-info-value">
            <span class="editable" id="login">{{ $postural->ombr }}</span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> MS: </div>

          <div class="profile-info-value">
            <span class="editable" id="login">{{ $postural->ms }}</span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Abdomem: </div>

          <div class="profile-info-value">
            <span class="editable" id="login">{{ $postural->abdo }}</span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Dorsal: </div>

          <div class="profile-info-value">
            <span class="editable" id="login">{{ $postural->dorsal }}</span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Lombar: </div>

          <div class="profile-info-value">
            <span class="editable" id="login">{{ $postural->lombar }}</span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Pelve: </div>

          <div class="profile-info-value">
            <span class="editable" id="login">{{ $postural->pelve }}</span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Joelho: </div>

          <div class="profile-info-value">
            <span class="editable" id="login">{{ $postural->joelh }}</span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Médio-Pé: </div>

          <div class="profile-info-value">
            <span class="editable" id="login">{{ $postural->medp }}</span>
          </div>
        </div>

      </div>

      <div class="space-6"></div>


    </div>
  </div>
</div>




</div>

@endsection
