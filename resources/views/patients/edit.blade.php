<?php $menu_open = 'active open'; $nav_pat = 'active'; ?>
@extends('layout/layout')

@section('content')
<div class="page-header">
  <h1>
    Editar
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Paciente
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="row">
  @include('flash::message')
  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif
  @if($errors->any())
  <div class="alert alert-danger">Existem dados incorretos no formulário!</div>
  @endif
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->

    {!! Form::model($patient, [
      'route' => ['patients.update', $patient->id],
      'method' => 'PATCH',
      'class' => 'form-horizontal']) !!}

      @include('patients/_form')

      {!! Form::close() !!}

    </div>
  </div>
  @endsection
