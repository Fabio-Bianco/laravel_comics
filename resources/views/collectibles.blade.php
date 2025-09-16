@extends('layouts.master')

@section('title', 'Collectibles')

@section('content')
  <section class="collectibles-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">Collectibles</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $collectible)
          <div class="col">
            <div class="collectible-card">
              <img src="{{ asset('img/collectible-placeholder.png') }}" alt="Collectible {{ $collectible }}" class="collectible-thumb">
              <h3 class="collectible-name">Collectible {{ $collectible }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection