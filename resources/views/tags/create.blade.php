@extends('layout')
@section('content')
<h1>Új cimke</h1>

@error('name')
<div class="alert alert-warning">{{$message}}</div>
@enderror


<form action="{{ route('tags.store')}}" method="post">
    @csrf
    <fieldset>
        <label for="name">Cimke név</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Ment</button>
</form>

@endsection
