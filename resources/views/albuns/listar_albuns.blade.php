@extends('principal')
@section('conteudo')
<h2>Albuns</h2>

<a href="novo_album">Novo album</a>

<table>
    <thead>
        <th>Nome</th>
        <th>Banda</th>
        <th>Gerenciar</th>
    </thead>
@foreach ($albuns as $album)
    <tr>
        <td>{{ $album->nome }}</td>
        <td>{{ $album->banda->nome }}</td>
        <td>
            <a href="{{ url('albuns/alterar_album/'.$album->id_album) }}">
                Alterar
            </a>
            <a href="{{ url('albuns/excluir_album/'.$album->id_album) }}">
                Excluir
            </a>
        </td>
    </tr>
@endforeach
</table>

@stop
