<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'DC Comics')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@vite(['resources/js/app.js', 'resources/sass/app.scss']) 

</head>
<body>
  @include('layouts.partials.header')

  <main class="container py-4">
    @yield('content')
  </main>

  @include('layouts.partials.footer')
</body>
</html>
