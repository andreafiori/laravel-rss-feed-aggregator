<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Andrea Fiori">

  <title>@yield('title', 'RSS feed aggregator')</title>
  <!-- TODO canonical link <link rel="canonical" href=""> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <!-- <link rel="manifest" href="favicons/manifest.json"> -->
  <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#712cf9">

  <link rel="icon" href="/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="icon" href="/favicons/favicon.ico">

  <meta name="theme-color" content="#712cf9">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap" rel="stylesheet">
  <script src="{{ asset('js/color-modes.js') }}"></script>

</head>

<body>
  @include('includes.theme-switcher');

  @include('includes.header');

  <main class="container">

    {{-- Full-width section --}}
    @yield('fullwidth')

    {{-- 2-column section with sidebar --}}
    @hasSection('sidebar_content')
    <div class="row g-5">
      <div class="col-md-4">
      @include('includes.sidebar')
      </div>
      <div class="col-md-8">
      @yield('sidebar_content')
      </div>
    </div>
  @endif

  </main>

  @include('includes.footer')


  <!-- <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" class="astro-vvvwv3sm"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/js/bootstrap.min.js" integrity="sha512-zKeerWHHuP3ar7kX2WKBSENzb+GJytFSBL6HrR2nPSR1kOX1qjm+oHooQtbDpDBSITgyl7QXZApvDfDWvKjkUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
