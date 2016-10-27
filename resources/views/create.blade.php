@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
				<div class="table-responsive">
                    <h4>NOVO ALUNO</h4>

                    {!! Form::open(['route'=>'home.store'])  !!}
                        {!! Form::text('nome', null, ['placeholder' => 'Nome']) !!}
                        {!! Form::number('idade', null, ['placeholder' => 'Idade']) !!}
                        {!! Form::text('turma', null, ['placeholder' => 'Turma']) !!}
                        {!! Form::submit('Salvar') !!}
                    {!! Form::close() !!}
@endsection
                </div>
            </div>
        </div>
    </div>
</div>