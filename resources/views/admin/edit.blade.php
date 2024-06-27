@extends('layouts.app')

@section('content')
    <div class="container py-3">

        

        <form action="{{ route('wines.update',$wine->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="winery" class="form-label">Cantina</label>
                <input type="text" class="form-control" id="winery" name="winery"
                value="{{$wine->winery}}">
            </div> 
            <div class="mb-3">
                <label for="wine" class="form-label">Vinoooo</label>
                <input type="text" class="form-control" id="wine" name="wine" value="{{$wine->wine}}">
            </div>
            
            <div class="mb-3">
                <label for="rating" class="form-label">Punteggio</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{$wine->rating}}">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="{{$wine->location}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Poster</label>
                <input type="text" class="form-control" id="image" name="image" value="{{$wine->image}}">
            </div>
            
            <button class="btn btn-success" type="submit">Aggiungi</button>

        </form>

    </div>
@endsection