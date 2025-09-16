@extends('layouts.master')

@section('title', 'Videos')

@section('content')
  <section class="videos-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">Videos</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $video)
          <div class="col">
            <div class="video-card">
              <img src="{{ asset('img/video-placeholder.png') }}" alt="Video {{ $video }}" class="video-thumb">
              <h3 class="video-title">Video {{ $video }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection