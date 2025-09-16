@extends('layouts.master')

@section('title', 'Shop')

@section('content')
  <section class="shop-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">Shop</h1>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach (range(1, 12) as $product)
          <div class="col">
            <div class="shop-card">
              <img src="{{ asset('img/shop-placeholder.png') }}" alt="Product {{ $product }}" class="shop-thumb">
              <h3 class="shop-title">Product {{ $product }}</h3>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection