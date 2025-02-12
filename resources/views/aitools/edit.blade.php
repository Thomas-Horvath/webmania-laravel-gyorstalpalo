@extends('layout')
@section('content')
<h1>AI eszköz módosítása</h1>

@error('name')
<div class="alert alert-warning">{{$message}}</div>
@enderror


<form action="{{ route('aitools.update', $aitool->id)}}" method="post">
    @csrf
    @method('PUT')
    <fieldset>
        <label for="name">Az Ai eszköz neve</label>
        <input type="text" name="name" id="name"value="{{old('name', $aitool->name)}}">
    </fieldset>

    <fieldset>
        <label for="category_id">Típus</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </fieldset>



    <fieldset>
        <label for="description">Leírás</label>
        <textarea type="text" name="description" id="description" >{{old('description', $aitool->description)}}</textarea>
    </fieldset>


    <fieldset>
        <label for="link">Link</label>
        <input type="text" name="link" id="link" value="{{old('link', $aitool->link)}}"/>
    </fieldset>


    <fieldset>
        <label for="hasFreePlan">Van e ingyenes változat?</label>
        <input type="checkbox" name="hasFreePlan" id="hasFreePlan" {{ old('hasFreePlan', $aitool->hasFreePlan) ? 'checked' : '' }} />
    </fieldset>

    <fieldset>
        <label for="price">Ár (havonta Ft-ban)</label>
        <input type="number" name="price" id="price" value="{{ $aitool->price ? $aitool->price : 0}}"/>
    </fieldset>

    <button type="submit">Ment</button>
</form>

@endsection
