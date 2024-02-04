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
    <input type="text" placeholder="status" name ="status" value = "{{ $support->status }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>    
</form>