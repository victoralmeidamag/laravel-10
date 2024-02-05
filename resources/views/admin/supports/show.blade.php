<h1>
    Detalhes da Dúvida {{ $support->id }}
</h1>

<ul>
    <li>ASSUNTO: {{ $support->subject }}</li>
    <li>STATUS: {{ $support->status === 'a' ? 'Ativo': ($support->status === 'p' ? 'Pendente': 'Cancelado')}}</li>
    <li>DÚVIDA: {{ $support->body }}</li>
</ul>

<form action="{{ route('support.destroy', $support->id) }}" method="POST">
    @csrf()
@method('delete')
    <button type="submit">Deletar</button>
</form>