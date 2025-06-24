<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="generator" content="Astro v5.9.2">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>RSS feed aggregator - @yield('title')</title>

  <!-- TODO canonical link <link rel="canonical" href=""> -->

  <!-- <script src="/docs/5.3/assets/js/color-modes.js"></script> -->

  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="manifest" href="favicons/manifest.json">
  <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#712cf9">

  <link rel="icon" href="/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="icon" href="/favicons/favicon.ico">

  <meta name="theme-color" content="#712cf9">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap" rel="stylesheet">
  <link href="blog.css" rel="stylesheet">

</head>

<body>
  @include('includes.header');

  <main class="container">

    <!-- Hero section home page -->
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
      <div class="col-lg-12 px-0">
        <h1 class="display-12 fst-italic">The RSS feed aggregator you need</h1>
        <p class="lead my-3">Multiple feeds, categories and sub-categories.</p>
        <!-- <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p> -->
      </div>
    </div>

    <div class="row g-5">
      <div class="col-md-4">
        @include('includes.sidebar')
      </div>

      <div class="col-sm-12 col-md-8 col-lg-8">
        @yield('content')
      </div>
  </main>

  @include('includes.footer')

</body>

</html>
