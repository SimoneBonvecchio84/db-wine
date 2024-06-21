@extends('layouts.app')

@section('content')
    <div class="container py-3">

        

        <form action="{{ route('wines.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="winery" class="form-label">Cantina</label>
                <input type="text" class="form-control" id="winery" name="winery">
            </div>
            <div class="mb-3">
                <label for="wine" class="form-label">Vino</label>
                <input type="text" class="form-control" id="wine" name="wine">
            </div>
            
            <div class="mb-3">
                <label for="rating" class="form-label">Punteggio</label>
                <input type="text" class="form-control" id="rating" name="rating">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Poster</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            
            <button class="btn btn-success" type="submit">Aggiungi</button>

        </form>

    </div>
@endsection
