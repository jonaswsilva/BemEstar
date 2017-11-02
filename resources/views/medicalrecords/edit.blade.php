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
      'route' => ['medicalrecords.update', $medicalrecord->id],
      'method' => 'PATCH',
      'class' => 'form-horizontal']) !!}

      @include('medicalrecords/_form')

      {!! Form::close() !!}

    </div>
  </div>
  @endsection

  @push('page-script')
  <script src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('assets/js/spinbox.min.js') }}"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
  <script type="text/javascript">
  $(function(){

  	$('#spinner1').ace_spinner({value:1,min:1,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
  	.closest('.ace-spinner')
  	.on('changed.fu.spinbox', function(){
  		//console.log($('#spinner1').val())
  	});
  });

  </script>
  @endpush
