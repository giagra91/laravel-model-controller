@extends('layouts.main')

@section('title', "Movies")

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row g-2">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card bg-light text-center rounded-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title}}</h6>
                            <p class="card-text">Lingua originale: {{ $movie->nationality}}</p>
                            <span>
                                Data uscita<a href="#" class="card-link">{{ $movie->date}}</a> - 
                            </span>
                            <span>
                                Voto: <a href="#" class="card-link">{{ $movie->vote}}</a>
                            </span>
                            
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </main>
@endsection