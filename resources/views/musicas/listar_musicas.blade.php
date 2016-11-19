@extends('principal')
@section('conteudo')
<h2>Musicas</h2>

<a href="nova_musica">Nova música</a>

<table>
    <thead>
        <th>Título</th>
        <th>Álbum</th>
        <th>Banda</th>
        <th>Gerenciar</th>
    </thead>
@foreach ($musicas as $musica)
    <tr>
        <td>{{ $musica->titulo }}</td>
        <td>{{ $musica->album->nome }}</td>
        <td>{{ $musica->album->banda->nome }}</td>

        <td>
            <a href="{{ url('musicas/alterar_musica/'.$musica->id_musica) }}">
                Alterar
            </a>
            <a href="{{ url('musicas/excluir_musica/'.$musica->id_musica) }}">
                Excluir
            </a>
        </td>
    </tr>
@endforeach
</table>

@stop
