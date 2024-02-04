<h1>
    Detalhes da Dúvida {{ $support->id }}
</h1>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Status: {{ $support->body }}</li>
</ul>

<form action="{{ route('support.destroy', $support->id) }}" method="POST">
    @csrf()
@method('delete')
    <button type="submit">Deletar</button>
</form>