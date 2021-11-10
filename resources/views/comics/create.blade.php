@extends('layout.base')
@section('pageContent')
<div class="container box-custom-2">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        {{-- titolo --}}
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" placeholder="inserisci un titolo" class="form-control" name="title" id="title">
        </div>
        {{-- descrizione --}}
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea cols="30" rows="10" placeholder="inserisci una descrizione" class="form-control" name="description" id="description"></textarea>
        </div>
        {{-- prezzo --}}
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" placeholder="inserisci un prezzo" class="form-control" name="price" id="price">
        </div>
        {{-- series --}}
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" placeholder="inserisci la serie" class="form-control" name="series" id="series">
        </div>
        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" placeholder="inserisci un tipo" class="form-control" name="type" id="type">
        </div>
        {{-- date --}}
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" placeholder="inserisci un data" class="form-control" name="sale_date" id="date">
        </div>
        <a href="#">
            <button type="submit" class="btn btn-primary">Inserisci Fumetto</button>
        </a>
    </form>
</div>
@endsection