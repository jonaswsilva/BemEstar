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

    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->


  </div>
</div>

@stop
