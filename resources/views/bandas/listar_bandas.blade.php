@extends('principal')
@section('conteudo')
<h2>Bandas</h2>

<a href="nova_banda">Nova banda</a>

<table>
    <thead>
        <th>Nome</th>
        <th>Vocalista</th>
        <th>Gerenciar</th>
    </thead>
@foreach ($bandas as $banda)
    <tr>
        <td>{{ $banda->nome }}</td>
        <td>{{ $banda->vocalista }}</td>
        <td>
            <a href="{{ url('bandas/alterar_banda/'.$banda->id_banda) }}">
                Alterar
            </a>
            <a href="{{ url('bandas/excluir_banda/'.$banda->id_banda) }}">
                Excluir
            </a>
        </td>
    </tr>
@endforeach
</table>

@stop
