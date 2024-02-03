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
            <td>{{ $support->status }}</td>
            <td>{{ $support->body }}</td>
            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>
