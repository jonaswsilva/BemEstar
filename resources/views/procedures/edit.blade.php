<?php $nav_sch = 'active'; ?>
@extends('layout/layout')

@section('content')
<div class="page-header">
  <h1>
    Editar
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Procedimento
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

    {!! Form::open([
      'route' => ['procedures.update', $procedure->id],
      'method' => 'PATCH',
      'class' => 'form-horizontal']) !!}

      @include('procedures/_form')

      {!! Form::close() !!}

    </div>
  </div>
  @endsection
