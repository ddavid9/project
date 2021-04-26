<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Chess</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/railscasts.min.css">
      <link rel="stylesheet" href="/css/scribbler-global.css">
      <link rel="stylesheet" href="/css/scribbler-landing.css">
      <link rel="author" href="humans.txt">
  </head>
  <body>
    <nav>
      <div class="logo"></div>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        @if (auth()->check())
            <li class="menu__item"><a href="/dashboard" class="link link--dark">Dashboard</a></li>
        @else
            <li class="menu__item"><a href="/register" class="link link--dark">Register</a></li>
            <li class="menu__item"><a href="/login" class="link link--dark">Log in</a></li>
        @endif

      </ul>
    </nav>
    <div class="hero">
      <h1 class="hero__title">Chess</h1>
    </div>

    <div class="wrapper">
        @yield('content')
    </div>
  </body>
</html>
