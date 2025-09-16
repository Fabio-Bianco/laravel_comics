@extends('layouts.master')



@section('title', 'Characters')



@section('content')
  <section class="characters-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">Characters</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $character)
          <div class="col">
            <div class="character-card">
              <img src="{{ asset('img/character-placeholder.png') }}" alt="Character {{ $character }}" class="character-thumb">
              <h3 class="character-name">Character {{ $character }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection