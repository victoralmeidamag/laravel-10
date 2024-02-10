<div class="alert alert-danger">
    @if ($errors->any())
        @foreach ($errors->all() as $erros)
            <ul> {{ $erros }} </ul>
        @endforeach
    @endif
</div>
