<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- @include('admin.component.sidebar') --}}
  <div class="container">
    @yield('isi')
  </div>
  <div class="container">
    @yield('isi1')
  </div>
  <div class="container">
    @yield('isi2')
  </div>
  <div class="container">
    @yield('isi3')
  </div>
  <div class="container">
    @yield('isi4')
  </div>
  @include('tampilanuser.footer')
</body>
</html>
