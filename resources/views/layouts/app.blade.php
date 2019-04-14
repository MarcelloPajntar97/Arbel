<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('Arbel', 'Arbel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/dropdown.js') }}"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <main class="py-4">
  @yield('content')
</main>
</div>
</body>
</html>
