<?php $nav_report = 'active'; ?>
@extends('layout/layout')

@section('content')

<div class="row">
  <div class="col-xs-12">
    <h2 class="header smaller lighter green">Relatórios</h2>

    <div class="clearfix">
      <div class="pull-right tableTools-container"></div>
    </div>
    @include('flash::message')
    @if (Session::has('message'))
    <div class="alert alert-{{ @$alert }}">{{ Session::get('message') }}</div>
    @endif

    <div class="table-header">
      Resultado para Relatórios
    </div>

    <div class="space-6"></div>

    <div class="col-sm-7 infobox-container">
      <div class="infobox infobox-green">
        <div class="infobox-icon">
          <i class="ace-icon fa fa-list"></i>
        </div>
        <div class="infobox-data">
          <span class="infobox-data-number">{{ @$countschedules }}</span>
          <div class="infobox-content">Consultas Marcadas</div>
        </div>
      </div>

      <div class="infobox infobox-blue">
        <div class="infobox-icon">
          <i class="ace-icon fa fa-check-square-o"></i>
        </div>
        <div class="infobox-data">
          <span class="infobox-data-number">{{ @$countschedulestoday }}</span>
          <div class="infobox-content">Consultas Hoje</div>
        </div>
      </div>

      <div class="infobox infobox-pink">
        <div class="infobox-icon">
          <i class="ace-icon fa fa-file-o"></i>
        </div>
        <div class="infobox-data">
          <span class="infobox-data-number">{{ @$countmedicalrecords }}</span>
          <div class="infobox-content">Sessões Marcadas</div>
        </div>
      </div>

      <div class="infobox infobox-red">
        <div class="infobox-icon">
          <i class="ace-icon fa fa-user"></i>
        </div>
        <div class="infobox-data">
          <span class="infobox-data-number">{{ @$countspatients }}</span>
          <div class="infobox-content">Pacientes</div>
        </div>
      </div>

      <div class="infobox infobox-blue2">
        <div class="infobox-icon">
          <i class="ace-icon fa fa-file-o"></i>
        </div>
        <div class="infobox-data">
          <span class="infobox-data-number">{{ @$medicalappointmentsmounth }}</span>
          <div class="infobox-content">Realizadas Mês</div>
        </div>
      </div>

      <div class="infobox infobox-orange2">
        <div class="infobox-icon">
          <i class="ace-icon fa fa-file"></i>
        </div>
        <div class="infobox-data">
          <span class="infobox-data-number">{{ $countsessions }}</span>
          <div class="infobox-content">Sessões Realizadas</div>
        </div>
      </div>

      <div class="space-6"></div>

      <div class="infobox infobox-green infobox-small infobox-dark">
        <div class="infobox-progress">
          <div class="easy-pie-chart percentage">
            <span><h1>{{ @$countposturals }}</h1></span>
          </div>
        </div>
        <div class="infobox-data">
          <div class="infobox-content">Avaliações</div>
          <div class="infobox-content">Posturais</div>
        </div>
      </div>

      <div class="infobox infobox-blue infobox-small infobox-dark">
        <div class="infobox-progress">
          <div class="easy-pie-chart percentage">
              <h1>{{ @$countneurologicals }}</h1>
            </div>
          </div>
          <div class="infobox-data">
            <div class="infobox-content">Avaliações</div>
            <div class="infobox-content">Neurológicas</div>
          </div>
        </div>

        <div class="infobox infobox-grey infobox-small infobox-dark">
          <div class="easy-pie-chart percentage">
            <h1>{{ @$countsprofessionals }}</h1></p>
          </div>
          <div class="infobox-data">
            <div class="infobox-content">Profissionais</div>
          </div>
        </div>
      </div>

    </div>
  </div>


  @stop
