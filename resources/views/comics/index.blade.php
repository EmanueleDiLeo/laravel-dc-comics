@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center my-5">Lista comics</h1>

        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4 mb-4">
                    <div class="card">
                        <img src="{{ $comic->thumb}}" alt="{{ $comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title}}</h5>
                            <p class="card-text">Prezzo: {{ $comic->price}}</p>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Più info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('title')
    | Homepage
@endsection
