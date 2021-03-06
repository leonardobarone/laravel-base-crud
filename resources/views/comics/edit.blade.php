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
            <input type="text" placeholder="inserisci un titolo" class="form-control" name="title" value="{{old('title') ? old('title') : $comic['title']}}" id="title">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- descrizione --}}
        <div class="mb-3">
            <label for="description" class="form-label">Modifica Descrizione</label>
            <textarea cols="30" rows="10" placeholder="inserisci una descrizione" class="form-control" name="description" id="description">{{old('description') ? old('description') : $comic['description']}}</textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- prezzo --}}
        <div class="mb-3">
            <label for="price" class="form-label">Modifica Prezzo</label>
            <input type="number" placeholder="inserisci un prezzo" class="form-control" value="{{ old('price') ? old('price') : $comic['price']}}" name="price" id="price">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- series --}}
        <div class="mb-3">
            <label for="series" class="form-label">Modifica Serie</label>
            <input type="text" placeholder="inserisci la serie" class="form-control" value="{{ old('series') ? old('series') : $comic['series']}}" name="series" id="series">
        </div>
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">Modifica Tipo</label>
            <input type="text" placeholder="inserisci un tipo" class="form-control" value="{{ old('type') ? old('type') : $comic['type']}}" name="type" id="type">
        </div>
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- date --}}
        <div class="mb-3">
            <label for="date" class="form-label">Modifica Date</label>
            <input type="date" placeholder="inserisci un data" class="form-control" value="{{ old('sale_date') ? old('sale_date') : $comic['sale_date']}}" name="sale_date" id="date">
        </div>
        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        <a href="#">
            <button type="submit" class="btn btn-primary">Aggiorna fumetto!</button>
        </a>
    </form>
</div>
@endsection