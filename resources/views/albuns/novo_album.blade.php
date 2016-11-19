@extends('principal')
@section('conteudo')
<h2>
Novo album
</h2>

{!! Form::open(array('url' => 'albuns/salvar_album')) !!}
<p>
    {!! Form::label('nome', 'Nome') !!}<br/>
    {!! Form::text('nome') !!}<br/>
    {!! Form::label('banda', 'Banda') !!}<br/>
	{!! Form::select('id_banda',$bandas->lists('nome','id_banda'))!!}

    {!! Form::submit('Enviar') !!}
</p>
{!! Form::close() !!}

@stop