@extends('layouts.app')

@section('page_title', 'Lista Comics')

@section('page_content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Prezzo</th>
                <th>Genere</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}$</td>
                <td>{{$comic->type}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a class="btn btn-info" href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
                        <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                            class="form-delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center py-3">
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi Fumetto</a>
    </div>
@endsection