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
                    <p class="card-text">Serie: {{ $comic->series}}</p>
                    <p class="card-text">Data Uscita: {{ $comic->sale_date}}</p>
                    <p class="card-text">Tipo: {{ $comic->type}}</p>
                    <p class="card-text">Descrizione: {{ $comic->description}}</p>
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>
                    <form class="d-inline-block " action="{{ route('comics.destroy', $comic)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('title')
    | Descrizione
@endsection
