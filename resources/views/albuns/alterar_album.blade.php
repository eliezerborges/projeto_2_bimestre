@extends('principal')
@section('conteudo')
<h2>
Alterar album {{$album->id_album}}
</h2>

{!! Form::model($album, array('url' => array('albuns/salvar_album'))) !!}
<p>
    {!! Form::label('nome', 'Nome') !!}<br/>
    {!! Form::text('nome') !!}<br/>
    {!! Form::label('id_banda', 'Banda') !!}<br/>
    {!! Form::select('id_banda',$bandas->lists('nome','id_banda'))!!}
    {!! Form::hidden('id_album') !!}<br/>
    {!! Form::submit('Enviar') !!}
</p>
{!! Form::close() !!}

@stop