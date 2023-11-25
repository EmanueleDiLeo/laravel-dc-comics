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
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>
                            <form class="d-inline-block " action="{{ route('comics.destroy', $comic)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            {{$comics->links()}}
        </div>
    </div>

@endsection

@section('title')
    | Homepage
@endsection
