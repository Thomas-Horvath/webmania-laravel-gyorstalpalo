@extends('layout')
@section('content')


<h1>AI eszközök
    <a href="{{ route('aitools.create') }}" title="Új Ai eszköz">💾</a>
</h1>
<div class="alert-container">
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
<script>
    setTimeout(function() {
        let message = document.querySelector('.alert-success');
        if (message) {
            message.style.visibility = "hidden";
        }
    }, 2000);
</script>

@endif
</div>
<hr>


<ul>
    @foreach($aitools as $aitool)
    <li class="actions">
        {{ $aitool->name }}
        <a href="{{ route('aitools.show', $aitool->id) }}" class="button">Megtekintés</a>
        <a href="{{ route('aitools.edit', $aitool->id) }}" class="button">Szerkesztés</a>
        <form action="{{ route('aitools.destroy', $aitool->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="danger" onclick="return confirm('Tuti törli?')">Törlés</button>
        </form>
    </li>
    @endforeach
</ul>


@endsection

