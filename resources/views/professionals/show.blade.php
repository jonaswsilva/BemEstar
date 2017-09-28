<?php $menu_open = 'active open'; $nav_prof = 'active'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h3 class="header smaller lighter blue">Dados do profissional</h3>
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
            <img id="avatar" class="editable img-responsive" src="assets/images/avatars/{{ $professional->avatar }}" />
          </span>



          <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
            <div class="inline position-relative">
              <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                <span class="white">{{ $professional->person->name }}</span>
              </a>
            </div>
          </div>
        </div>

        <div class="hr hr12 dotted"></div>

        <div class="clearfix">
          <div class="grid2">
            <a class="btn btn-warning" href="{{ URL::to('professionals') }}"><i class="ace-icon fa fa-undo bigger-110"></i>Voltar</a>
          </div>

          <div class="grid2">
            <a class="btn btn-primary" href="{{ URL::to('professionals/'. $professional->id .'/edit') }}"><i class="ace-icon fa fa-pencil bigger-110"></i>Editar</a>
          </div>
        </div>

      </div>

      <div class="col-xs-12 col-sm-9">


        <div class="space-12"></div>

        <div class="profile-user-info profile-user-info-striped">
          <div class="profile-info-row">
            <div class="profile-info-name"> Id </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $professional->id }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Nome </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $professional->person->name }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Rg </div>

            <div class="profile-info-value">
              <span class="editable rg" id="username">{{ $professional->person->rg }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Cpf </div>

            <div class="profile-info-value">
              <span class="editable cpf" id="username">{{ $professional->person->cpf }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Sexo </div>

            <div class="profile-info-value">
              <span class="editable" id="username">@if($professional->person->sex == "M")
                  Masculino
              @else
                  Feminino
              @endif</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Celular </div>

            <div class="profile-info-value">
              <span class="editable phone" id="username">{{ $professional->person->phone }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Telefone fixo </div>

            <div class="profile-info-value">
              <span class="editable phonefix" id="username">{{ $professional->landline }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> E-mail </div>

            <div class="profile-info-value">
              <span class="editable" id="username">{{ $professional->person->email }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Cep </div>

            <div class="profile-info-value">
              <i class="fa fa-map-marker light-orange bigger-110"></i>
              <span class="editable cep" id="country">{{ $professional->address->cep }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Rua </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $professional->address->street }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Bairro </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $professional->address->neighborhood }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Cidade </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $professional->address->city->name }}</span>
            </div>
          </div>

          <div class="profile-info-row">
            <div class="profile-info-name"> Estado </div>

            <div class="profile-info-value">
              <span class="editable" id="login">{{ $professional->address->city->state->name }}</span>
            </div>
          </div>

        </div>

        <div class="space-20"></div>



        <div class="hr hr2 hr-double"></div>

        <div class="space-6"></div>


      </div>
    </div>
  </div>




</div>

@endsection
