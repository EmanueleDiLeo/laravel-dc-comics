@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1 class="text-center my-5">Crea un nuovo comic</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('comics.store') }}" method="POST">
                {{-- elemnto da inserire i  tutti i form di Laravel per un conctrollo di sicurezza  --}}
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Nome comic</label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 250px"></textarea>
                    <label for="description">Descrizione</label>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" >
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" >
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" >
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" >
                </div>
                <div class="mb-5">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" >
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>

            </form>
        </div>
    </div>
</div>

@endsection

@section('title')
    | Crea comics
@endsection
