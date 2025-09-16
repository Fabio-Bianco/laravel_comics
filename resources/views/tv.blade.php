@extends('layouts.master')

@section('title', 'TV Shows')

@section('content')
  <section class="tv-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">TV Shows</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $tvShow)
          <div class="col">
            <div class="tv-card">
              <img src="{{ asset('img/tv-placeholder.png') }}" alt="TV Show {{ $tvShow }}" class="tv-thumb">
              <h3 class="tv-title">TV Show {{ $tvShow }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection