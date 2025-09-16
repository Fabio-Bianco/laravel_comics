@extends('layouts.master')

@section('title', 'Games')

@section('content')
  <section class="games-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">Games</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $game)
          <div class="col">
            <div class="game-card">
              <img src="{{ asset('img/game-placeholder.png') }}" alt="Game {{ $game }}" class="game-thumb">
              <h3 class="game-title">Game {{ $game }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection