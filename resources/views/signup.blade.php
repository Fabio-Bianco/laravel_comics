@extends('layouts.master')

@section('title', 'Sign-Up')

@section('content')
  <section class="signup-section">
    <div class="container">
      <h1 class="text-center text-uppercase mb-4">Sign-Up</h1>
      <form action="{{ route('signup.submit') }}" method="POST" class="signup-form">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign-Up</button>
      </form>
    </div>
  </section>
@endsection
