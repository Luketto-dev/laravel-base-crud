@extends('layouts.app')

@section('page_title', 'Dettagli fumetto #' . $comic->id)

@section('page_content')
    <div class="row g-0 border rounded overflow-hidden mb-4 shadow-sm w-75 m-auto">
        <div class="col-8 p-4 d-flex flex-column">
            <h2 class="fw-bold">{{$comic->title}}</h2>
            <p class="fst-italic fs-5">{{$comic->description}}</p>
            <div class="fs-5">
                <span>Prezzo:</span>
                <span class="fw-bold">{{$comic->price}}$</span>
            </div>
            <div class="fs-5">
                <span>Serie Fumetto:</span>
                <span class="fw-bold">{{$comic->series}}</span>
            </div>
            <div class="fs-5">
                <span>Data Uscita:</span>
                <span class="fw-bold">{{$comic->sale_date}}</span>
            </div>
            <div class="fs-5">
                <span>Genere:</span>
                <span class="fw-bold">{{$comic->type}}</span>
            </div>
        </div>
        <div class="col-4">
            <img class="ratio" src="{{$comic->thumb}}" alt="">
        </div>
    </div>
@endsection

<!-- <div class="comic d-flex gap-2 w-75 m-auto">
        <div class="comic-poster">
            <img src="{{$comic->thumb}}" alt="">
        </div>
        <div class="comic-details">
            <div class="comic-title">
                <h2>{{$comic->title}}</h2>
            </div>
            <div class="comic-description">
                <h3>Descrizione</h3>
                <p>{{$comic->description}}</p>
            </div>
            <div class="comic-price">
                <div>Prezzo: {{$comic->price}}$</div>
            </div>
            <div class="comic-series">
                <div>Serie: {{$comic->series}}</div>
            </div>
        </div>
    </div> -->