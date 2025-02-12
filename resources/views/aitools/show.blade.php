@extends('layout')
@section('content')

<h1>{{$aitool->name}} {{$aitool->hasFreePlan ? '✅' :'❌'}}</h1>
<h2>Kategória: {{$aitool->category->name}}</h2>


<p>{{$aitool->description}}</p>
<a href="{{$aitool->link}}" target="_blank">{{$aitool->link}}</a>
<small>{{$aitool->price ? $aitool->price : 0}} Ft</small>
@endsection
