@extends('layouts.app')

@section('page_title', 'Comics')

@section('page_content')
    <div class="text-center py-3">
        <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi Fumetto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>prezzo</th>
                <th>tipo</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->type}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection