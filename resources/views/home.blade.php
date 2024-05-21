@extends('layouts.app')

@section('main-content')
    <section class="text-light container pt-4">
        <div class="row row-cols-5 g-2 h-50">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card">
                    <div class="card-body fs-6">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_titles }}</h6>
                        <div class="card-text">Paese d'origine: {{ $movie->nationality }}</div>
                        <div class="card-text">Data d'uscita: {{ $movie->date }}</div>
                        <div class="card-text">Voto: {{ $movie->vote }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection