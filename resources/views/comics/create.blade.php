@extends('layout.base')
@section('pageContent')
<div class="container box-custom-2">
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        {{-- titolo --}}
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input value="{{old('title')}}" type="text" placeholder="inserisci un titolo" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- descrizione --}}
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea cols="30" rows="10" placeholder="inserisci una descrizione" class="form-control" name="description" id="description"></textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- prezzo --}}
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input value="{{old('price')}}" type="number" placeholder="inserisci un prezzo" class="form-control" name="price" id="price">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- series --}}
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input value="{{old('series')}}" type="text" placeholder="inserisci la serie" class="form-control" name="series" id="series">
        </div>
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input value="{{old('type')}}" type="text" placeholder="inserisci un tipo" class="form-control" name="type" id="type">
        </div>
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        {{-- date --}}
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input value="{{old('sale_date')}}" type="date" placeholder="inserisci un data" class="form-control" name="sale_date" id="date">
        </div>
        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>            
        @enderror

        <a href="#">
            <button type="submit" class="btn btn-primary">Inserisci Fumetto</button>
        </a>
    </form>
</div>
@endsection