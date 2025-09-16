@extends('layouts.master')

@section('title', 'Comics')

@section('content')
  <section class="comics-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">Comics</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $comic)
          <div class="col">
            <div class="comic-card">
              <img src="{{ asset('img/comic-placeholder.png') }}" alt="Comic {{ $comic }}" class="comic-thumb">
              <h3 class="comic-title">Comic {{ $comic }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection