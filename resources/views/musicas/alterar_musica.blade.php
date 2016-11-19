@extends('principal')
@section('conteudo')
<h2>
Alterar música {{$musica->id_musica}}
</h2>

{!! Form::model($musica, array('url' => array('musicas/salvar_musica'))) !!}
<p>
    {!! Form::label('titulo', 'Título') !!}<br/>
    {!! Form::text('titulo') !!}<br/>
    {!! Form::label('id_album', 'Album') !!}<br/>
	{!! Form::select('id_album',$albuns->lists('nome','id_album'))!!}<br/><br/>
    {!! Form::hidden('id_musica') !!}<br/>
    {!! Form::submit('Enviar') !!}
</p>
{!! Form::close() !!}

@stop