@extends('layout.base')
@section('pageContent')
<div class="container box-custom-2">
    <form action="{{route('comics.update', $comic['id'])}}" method="POST">
        @csrf
        {{-- AGGIUNGI METHOD PUT --}}
        @method('PUT')
        {{-- titolo --}}
        <div class="mb-3">
            <label for="title" class="form-label">Modifica Titolo</label>
            <input type="text" placeholder="inserisci un titolo" class="form-control" name="title" value="{{$comic['title']}}" id="title">
        </div>
        {{-- descrizione --}}
        <div class="mb-3">
            <label for="description" class="form-label">Modifica Descrizione</label>
            <textarea cols="30" rows="10" placeholder="inserisci una descrizione" class="form-control" name="description" id="description">{{$comic['description']}}</textarea>
        </div>
        {{-- prezzo --}}
        <div class="mb-3">
            <label for="price" class="form-label">Modifica Prezzo</label>
            <input type="number" placeholder="inserisci un prezzo" class="form-control" value="{{$comic['price']}}" name="price" id="price">
        </div>
        {{-- series --}}
        <div class="mb-3">
            <label for="series" class="form-label">Modifica Serie</label>
            <input type="text" placeholder="inserisci la serie" class="form-control" value="{{$comic['series']}}" name="series" id="series">
        </div>
        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">Modifica Tipo</label>
            <input type="text" placeholder="inserisci un tipo" class="form-control" value="{{$comic['type']}}" name="type" id="type">
        </div>
        {{-- date --}}
        <div class="mb-3">
            <label for="date" class="form-label">Modifica Date</label>
            <input type="date" placeholder="inserisci un data" class="form-control" value="{{$comic['sale_date']}}" name="sale_date" id="date">
        </div>
        <a href="#">
            <button type="submit" class="btn btn-primary">Aggiorna fumetto!</button>
        </a>
    </form>
</div>
@endsection