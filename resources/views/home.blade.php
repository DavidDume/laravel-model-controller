@extends('layouts.app')

@section('content')

    <div class="row">
        @foreach ($movies as $movie)
            <div class="card col-3">
                <div class="card-body">
                  <h5 class="card-title">{{$movie->title}}</h5>
                  <p class="card-text">Titolo Originale: {{$movie->original_title}}</p>
                  <p class="card-text">Voto: {{$movie->vote}}</p>
                </div>
              </div>
        @endforeach
    </div>
    <ul>
        
    </ul>


@endsection