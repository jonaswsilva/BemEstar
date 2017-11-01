<?php $menu_open = 'active open'; $nav_prof = 'active'; ?>
@extends('layout/layout')

@section('content')
<div class="page-header">
  <h1>
    Editar
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Profissional
    </small>
  </h1>
</div><!-- /.page-header -->
<div class="row">
  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif
  @if($errors->any())
  <div class="alert alert-danger">Existem dados incorretos no formulário!</div>
  @endif
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->

      {!! Form::model($professional, [
      'route' => ['professionals.update', $professional->id],
      'method' => 'PATCH',
      'class' => 'form-horizontal']) !!}

      @include('professionals/_form')

      {!! Form::close() !!}

    </div>
  </div>
  @endsection
