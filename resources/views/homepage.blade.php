@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
  {{-- Jumbotron --}}
  <x-jumbotron />

  <section class="comics-section">
    <div class="container">
      <div class="current-series-btn">Current Series</div>

      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4">
        @forelse ($comics as $comic)
          <div class="col">
            <article class="comic-card h-100">
              <img class="comic-thumb w-100"
                src="{{ $comic['thumb'] ?? '' }}"
                alt="{{ $comic['title'] ?? 'Comic cover' }}"
                loading="lazy">
              <h3>{{ $comic['title'] ?? 'Senza titolo' }}</h3>
            </article>
          </div>
        @empty
          <p class="text-muted">Nessun fumetto disponibile.</p>
        @endforelse
      </div>

      <button class="load-more">Load More</button>
    </div>
  </section>
@endsection
