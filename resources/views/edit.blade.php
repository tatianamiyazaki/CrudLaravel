@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="table-responsive">
                    <h4>EDITAR</h4>
                    
                        {!! Form::model($alunos, ['route'=>['home.update', $alunos->id], 'method'=> 'PATCH'])  !!}
                            {!! Form::text('nome', null) !!}
                            {!! Form::number('idade', null) !!}
                            {!! Form::text('turma', null) !!}
                            {!! Form::submit('Salvar') !!} 
                        {!! Form::close() !!}
@endsection
                </div>
            </div>
        </div>
    </div>
</div>