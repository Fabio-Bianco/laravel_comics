@extends('layouts.master')

@section('title', 'News')

@section('content')
  <section class="news-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">News</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $news)
          <div class="col">
            <div class="news-card">
              <img src="{{ asset('img/news-placeholder.png') }}" alt="News {{ $news }}" class="news-thumb">
              <h3 class="news-title">News Title {{ $news }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection