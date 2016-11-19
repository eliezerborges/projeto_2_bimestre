@extends('principal')
@section('conteudo')
<h2>
Alterar musica {{$musica->id}}
</h2>
<!-- usamos o Form::model para ligar o formulário diretamente ao modelo passado para
a visão, desta maneira os dados são associados diretamente -->
{!! Form::model($musica, array('url' => array('musica/salvar'))) !!}
<p>
    {!! Form::label('titulo', 'Título') !!}<br/>
    {!! Form::text('titulo') !!}<br/>
    {!! Form::tex('id_album') !!}<br/>
    {!! Form::hidden('id') !!}<br/>
    {!! Form::submit('Enviar') !!}
</p>
{!! Form::close() !!}

@stop