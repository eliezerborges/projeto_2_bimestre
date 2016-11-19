@extends('principal')
@section('conteudo')
<h2>
Nova música
</h2>

{!! Form::open(array('url' => 'musicas/salvar_musica')) !!}
<p>
    {!! Form::label('titulo', 'Título') !!}<br/>
    {!! Form::text('titulo') !!}<br/>
    {!! Form::label('id_album', 'Album') !!}<br/>
	{!! Form::select('id_album',$albuns->lists('nome','id_album'))!!}<br/><br/>

    {!! Form::submit('Enviar') !!}
</p>
{!! Form::close() !!}

@stop