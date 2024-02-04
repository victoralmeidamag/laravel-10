<h1>LISTAGEM DOS SUPORTES</h1>

<a href="{{ route('supports.create') }}">Adicionar dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
    @foreach($supports as $support)
        <tr>
            <td>{{ $support->subject }}</td>
            <td>{{ $support->status === 'a' ? 'ATIVO': ($support->status === 'p' ? 'PENDENTE': 'CANCELADO')}}</td>
            <td>{{ $support->body }}</td>
            <td>
                <a href="{{ route('supports.show', $support->id)}}">Ir</a>
                <a href="{{ route('supports.edit', $support->id)}}">Editar</a>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
