@extends('layout.base')
@section('pageContent')
        <div class="container box-custom-1">
          <div class="row">
            <div class="col-12">
              <h1>I nostri fumetti:</h1>
            </div>
          </div>
        </div>
        <div class="container box-custom-2">
            <div class="row">
              @foreach ($comics as $comic)    
              <div class="col-sm-6 comic">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <a href="#" class="btn btn-primary">Vai al fumetto</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
@endsection