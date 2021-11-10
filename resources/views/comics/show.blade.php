@extends('layout.base')
@section('pageContent')
    <div class="container">
        <h1>{{$comic->title}}</h1>
        </p>
            {{$comic->description}}
        <p>
            <img width="100px" src="{{$comic->thumb}}" alt="">
    </div>
@endsection