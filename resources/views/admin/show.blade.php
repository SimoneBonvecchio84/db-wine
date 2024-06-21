@extends('layouts.app')

@section('content')
<div class="container w-50 py-5" >

    <h1>Dettagli:{{ $wine->wine }}</h1>

    <h2>Cantina:{{ $wine->winery}}</h2>

    <h2>Voto:{{ $wine->rating }}</h2>

    <h3>Location:{{$wine->location}}</h3>

    <img class="w-25" src="{{ $wine->image }}" alt="{{ $wine->wine }}">

    <h3>{{ $wine->slug }}</h3>

</div>


@endsection