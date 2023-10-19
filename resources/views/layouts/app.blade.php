<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('laravel-logo.svg') }}">
  @stack('head')
  <title>@yield('title')</title>
</head>
<body>
<header>@yield('header')</header>
    <main>
        @yield('content')
    </main>
</body>
</html>