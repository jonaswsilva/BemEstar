<?php $nav_con = 'active'; $menuc_open = 'active open'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
    <div>
      <h3 class="header smaller lighter purple">Avaliação Neurológica {{ $neurological->medicalappointment->patient->person->name }}</h3>
    </div>
  </div>
</div>

<div>
  <div id="user-profile-1" class="user-profile row">
    <div class="col-xs-12 col-sm-3 center">
      <div>
        <span class="profile-picture">
          <img id="avatar" class="editable img-responsive" src="/assets/images/avatars/{{ $neurological->medicalappointment->patient->avatar }}" />
        </span>

        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
          <div class="inline position-relative">
            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
              <span class="white">Paciente: {{ $neurological->medicalappointment->patient->person->name }}</span>
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
          <a class="btn btn-primary" href="{{ URL::to('neurological/'. $neurological->id .'/edit') }}"><i class="ace-icon fa fa-pencil bigger-110"></i>Editar</a>
        </div>
      </div>



    </div>

    <div class="col-xs-12 col-sm-9">
      <div class="col-md-11 col-md-offset-1">
          {!! Form::open(['url'=>'neurological/'.$neurological->id,'method'=>'post','class'=>'delete']) !!}
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit" class="btn btn-danger pull-right" >Excluir</button>
        {!! Form::close() !!}
      <a class="btn btn-info pull-right" target="_blank" href="{{ URL::to('neurological/'. $neurological->medicalappointment->id .'/pdf') }}"><i class="ace-icon fa fa-file bigger-110"></i>Gerar PDF</a>
      </div>
        <div class="space-12"></div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Anamnese</h3>
        <div class="profile-user-info profile-user-info-striped">

          <div class="profile-info-row">
            <div class="profile-info-name"> História da moléstia pregresa:</div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $neurological->histp }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> História da moléstia atual:</div>
            <div class="profile-info-value">
              <span class="editable" id="username">{{ $neurological->hista }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> História da moléstia familiar: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $neurological->histf }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Foco principal da conduta fisioterapêutica: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $neurological->focf }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Inspeção</h3>
        <div class="profile-user-info profile-user-info-striped">

          <div class="profile-info-row">
            <div class="profile-info-name"> Forma de locomoção (ao primeiro contato): </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $neurological->foml }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Prótese: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $neurological->prot }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Órtese: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $neurological->ort }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Padrão motor predominante: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $neurological->padrm }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Condições da Pele: </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $neurological->condp }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Palpação</h3>
        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Tônus de base: </div>

            <div class="profile-info-value">
              <span class="editable" id="country">{{ $neurological->tonb }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Distribuição topográfica: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->distt }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Graduação: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->grad }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Testes comprobatórios: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->testc }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Controle Motor</h3>
        <div class="profile-user-info profile-user-info-striped">

          <div class="profile-info-row">
            <div class="profile-info-name"> Mobilidade/ADM: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->mobil }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Estabilidade: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->estab }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Marcha: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->march }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Estabilidade: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->estabh }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Caracterização da deambulação: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->caracd }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Moticidade fina: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->motf }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Mãos - tipos de pega: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->mao }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Força Muscular</h3>
        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Extensores e flexores do pescoço: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->extfp }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Abdutores e adutores do ombro: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->abad }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Rotadores internos e externos do ombro: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->rotie }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Extensores e flexores do cotovelo: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->extfc }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Extensores e flexores do punho: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->extefp }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Pronadores e supinadores: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->pros }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Extensores e flexores do quadril: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->extfq }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Abdutores e adutores do quadril: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->abadq }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Rotadores internos e externos: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->rotaie }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Extensores e flexores do joelho: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->extfj }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Inversores e eversores do tornozelo: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->invt }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Plantiflexorese dorsiflexores e do tornozelo: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->pladt }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Avaliação Sensorial</h3>
        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Sensibilidade superficial: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->senss }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Sensibilidade profunda: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->sensp }}</span>
            </div>
          </div>
        </div>

        <div class="space-20"></div>
        <h3 class="header smaller lighter blue">Reflexos</h3>
        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Corticais: </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $neurological->cortc }}</span>
            </div>
          </div>
        </div>

        </div>

        <div class="space-6"></div>

        <div class="hr hr2 hr-double"></div>

        <div class="space-6"></div>


      </div>
    </div>
  </div>


  {{ Form::open(array('url' => 'neurological/' . @$neurological->id, 'id' => 'form-delete')) }}
    {{ Form::hidden('_method', 'DELETE') }}

  {{ Form::close() }}

</div>

@endsection
