@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
			<div class="table-responsive">
<table class="table table-striped">
	<thead><tr>
			<th>Nome</th>
			<th>Idade</th>
			<th>Turma</th>
			<th>Ação</th>
		</tr></thead>
	<tbody>
	@foreach($alunos as $alunos)
		<tr>
			<td>{{$alunos->nome}}</td>
			<td>{{$alunos->idade}}</td>
			<td>{{$alunos->turma}}</td>
			<td>
<form method="POST" action="{{ route('home.destroy', $alunos->id) }}" accept-charset="UTF-8">
<input name="_method" type="hidden" value="DELETE">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
<a href="{{ route('home.edit', $alunos->id) }}" type="submit" button type="button" class="btn btn-warning">Editar</a>
<input onclick="return confirm('Excluir?');" type="submit" button type="button" class="btn btn-danger" value="Excluir" />
</form></td></tr>
	@endforeach
	</tbody>
</table>
<a href="{{ route('home.create') }}" button type="button" class="btn btn-info">Novo</a></button>
</div></div></div></div></div>
@endsection
