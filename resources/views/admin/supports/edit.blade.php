<h1>Dúvida {{ $support->id }}</h1>

@if($errors->any())
    @foreach($errors->all() as $erros)
        <ul> {{ $erros }} </ul>
    @endforeach
@endif

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf()
    @method('put')
    <input type="text" placeholder="Assunto" name="subject" value = "{{ $support->subject }}">
    <select name="status">
        <option value="a" {{ $support->status == 'a' ? 'selected' : '' }}>ATIVO</option>
        <option value="c" {{ $support->status == 'c' ? 'selected' : '' }}>CANCELADO</option>
        <option value="p" {{ $support->status == 'p' ? 'selected' : '' }}>PENDENTE</option>
    </select>
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>    
</form>