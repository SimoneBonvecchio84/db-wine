@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cantina</th>
                <th scope="col">Vino</th>
                <th scope="col">Voto</th>
                <th scope="col">Provenieza</th>
                <th scope="col">Poster</th>
                <th scope="col">Slug</th>
                <th scope="col">Dettagli</th>
                <th scope="col">Modifica</th>
                <th scope="col">Cancella</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($wines as $curWine)
            <tr>
                <th scope="row">{{ $curWine->id }}</th>
                <td>{{ $curWine->winary }}</td>
                <td>{{ $curWine->wine }}</td>
                <td>{{ $curWine->rating }}</td>
                <td>{{ $curWine->location }}</td>
                <td>{{ $curWine->image }}</td>
                <td>{{ $curWine->slug }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('wines.show', $curWine->slug) }}">Dettagli</a>
                </td>
                
            </tr>                
            @endforeach
        </tbody>
    </table>
@endsection
