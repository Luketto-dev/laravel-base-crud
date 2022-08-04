@extends('layouts.app')

@section('page_title', 'Aggiungi un nuovo fumetto')

@section('page_content')
<form class="row g-3" action="{{ Route('comics.store')}}" method="post">
    @csrf
    <div class="col-md-6">
        <label for="inputTitle" class="form-label">Titolo fumetto</label>
        <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Inserisci titolo fumetto">
    </div>
    <div class="mb-3">
        <label for="inputDescription" class="form-label">Descrizione fumetto</label>
        <textarea class="form-control" name="description" id="inputDescription" rows="3"></textarea>
    </div>
    <div class="col-12">
        <label for="inputCopertina" class="form-label">Copertina fumetto</label>
        <input type="text" class="form-control" name="thumb" id="inputCopertina" placeholder="Inserisci il link della copertina">
    </div>
    <div class="col-12">
        <label for="inputPrezzo" class="form-label">Prezzo fumetto</label>
        <input type="text" name="price" class="form-control" id="inputPrezzo" placeholder="inserisci prezzo">
    </div>
    <div class="col-md-6">
        <label for="inputSeries" class="form-label">Serie fumetto</label>
        <input type="text" class="form-control" name="series" id="inputSeries">
    </div>
    <div class="col-md-6">
        <label for="inputData" class="form-label">Data pubblicazione fumetto</label>
        <input type="date" class="form-control" name="sale_date" id="inputData">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">Genere</label>
        <select id="inputState" name="type" class="form-select">
            <option selected>Scegli</option>
            <option>comik book</option>
            <option>graphic novel</option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">salva</button>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Annulla</a>
    </div>
</form>
@endsection