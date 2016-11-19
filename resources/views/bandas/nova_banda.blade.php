@extends('principal')
@section('conteudo')
<h2>
Nova banda
</h2>

{!! Form::open(array('url' => 'bandas/salvar_banda')) !!}
<p>
    {!! Form::label('nome', 'Nome') !!}<br/>
    {!! Form::text('nome') !!}<br/>
    {!! Form::label('vocalista', 'Vocalista') !!}<br/>
    {!! Form::text('vocalista') !!}<br/><br/>

    {!! Form::submit('Enviar') !!}
</p>
{!! Form::close() !!}

@stop