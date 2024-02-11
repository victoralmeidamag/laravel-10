<h1>
    Detalhes da Dúvida 
</h1>

<ul>
    <li>ID DA DÚVIDA: {{ $support->id }}</li>
    <li>ASSUNTO: {{ $support->subject }}</li>
    <li>STATUS: {{ $support->status === 'a' ? 'Ativo' : ($support->status === 'p' ? 'Pendente' : 'Cancelado') }}</li>
    <li>DÚVIDA: {{ $support->body }}</li>
</ul>

<form action="{{ route('support.destroy', $support->id) }}" method="POST">
    @csrf()
    @method('delete')
    <button type="submit">Deletar</button>
</form>
