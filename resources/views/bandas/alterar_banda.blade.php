@extends('principal')
@section('conteudo')
<h2>
Alterar banda {{$banda->id_banda}}
</h2>

{!! Form::model($banda, array('url' => array('bandas/salvar_banda'))) !!}
<p>
    {!! Form::label('nome', 'Nome') !!}<br/>
    {!! Form::text('nome') !!}<br/>
    {!! Form::label('vocalista', 'Vocalista') !!}<br/>
    {!! Form::text('vocalista') !!}<br/><br/>
    {!! Form::hidden('id_banda') !!}<br/>
    {!! Form::submit('Enviar') !!}
</p>
{!! Form::close() !!}

@stop