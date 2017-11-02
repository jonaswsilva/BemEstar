@extends('layout.layout')

@section('content')
<div class="text-center purple">
	<h3>Você não tem permissão para realizar está ação :/</h3><a href="{{ URL::previous() }}">Voltar</a>
</div>
@endsection
