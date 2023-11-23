@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center my-5">{{ $comic->title}}</h1>
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <img src="{{ $comic->thumb}}" alt="{{ $comic->title}}">
                <div class="card-body">
                    <p class="card-text">Prezzo: {{ $comic->price}}</p>
                    <p class="card-text">Prezzo: {{ $comic->series}}</p>
                    <p class="card-text">Prezzo: {{ $comic->sale_date}}</p>
                    <p class="card-text">Prezzo: {{ $comic->type}}</p>
                    <p class="card-text">Prezzo: {{ $comic->description}}</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('title')
    | Descrizione
@endsection
