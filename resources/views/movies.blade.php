@extends('layouts.master')

@section('title', 'Movies')

@section('content')
  <section class="movies-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">Movies</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $movie)
          <div class="col">
            <div class="movie-card">
              <img src="{{ asset('img/movie-placeholder.png') }}" alt="Movie {{ $movie }}" class="movie-thumb">
              <h3 class="movie-title">Movie {{ $movie }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection