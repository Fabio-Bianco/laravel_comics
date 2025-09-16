@extends('layouts.master')

@section('title', 'Fans')

@section('content')
  <section class="fans-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">Fans</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $fan)
          <div class="col">
            <div class="fan-card">
              <img src="{{ asset('img/fan-placeholder.png') }}" alt="Fan {{ $fan }}" class="fan-thumb">
              <h3 class="fan-title">Fan Event {{ $fan }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection