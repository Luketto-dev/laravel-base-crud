@extends('layouts.app')

@section('page_title', 'Modifica fumetto #' . $comic->id )

@section('page_content')
<div class="container">
<form class="row g-3" action="{{ Route('comics.update', $comic->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div class="col-md-6">
        <label for="inputTitle" class="form-label">Titolo fumetto</label>
        <input type="text" name="title" value="{{$comic->title}}" class="form-control" id="inputTitle" placeholder="Inserisci titolo fumetto">
    </div>
    <div class="mb-3">
        <label for="inputDescription" class="form-label">Descrizione fumetto</label>
        <textarea class="form-control" name="description" id="inputDescription" rows="3">{{$comic->description}}</textarea>
    </div>
    <div class="col-12">
        <label for="inputCopertina" class="form-label">Copertina fumetto</label>
        <input type="text" class="form-control" value="{{$comic->thumb}}" name="thumb" id="inputCopertina" placeholder="Inserisci il link della copertina">
    </div>
    <div class="col-12">
        <label for="inputPrezzo" class="form-label">Prezzo fumetto</label>
        <input type="text" name="price" class="form-control" value="{{$comic->price}}" id="inputPrezzo" placeholder="inserisci prezzo">
    </div>
    <div class="col-md-6">
        <label for="inputSeries" class="form-label">Serie fumetto</label>
        <input type="text" class="form-control" value="{{$comic->series}}" name="series" id="inputSeries">
    </div>
    <div class="col-md-6">
        <label for="inputData" class="form-label">Data pubblicazione fumetto</label>
        <input type="date" class="form-control" value="{{$comic->sale_date}}" name="sale_date" id="inputData">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">Genere</label>
        <select id="inputState" name="type" class="form-select">
            <option {{$comic->type == 'comic book' ? 'selected' : ''}}>comic book</option>
            <option {{$comic->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">salva</button>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Annulla</a>
    </div>
</form>
</div>
@endsection