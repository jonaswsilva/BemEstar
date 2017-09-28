
@extends('layout/layout')

@section('content')
<div class="page-header">
  <h1>
    Editar
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Usuário
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

    {!! Form::model($user, [
      'route' => ['users.update', $user->id],
      'method' => 'PUT',
      'files' => true,
      'class' => 'form-horizontal']) !!}

      @include('users/_form')

      {!! Form::close() !!}

    </div>
  </div>
  @endsection
