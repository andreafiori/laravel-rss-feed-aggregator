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
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: #0000001a;
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em #0000001a, inset 0 .125em .5em #00000026
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8
    }

    .bd-mode-toggle {
      z-index: 1500
    }

    .bd-mode-toggle .bi {
      width: 1em;
      height: 1em
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important
    }
  </style>
</head>

<body>
  @include('includes.header');

  <main class="container">

    <!-- Hero section home page -->
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
      <div class="col-lg-6 px-0">
        <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
          efficiently about what's most interesting in this post's contents.</p>
        <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
      </div>
    </div>

    <!-- Latest post? -->
    <!-- <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static"> <strong
                            class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-body-secondary">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p> <a href="#"
                            class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#chevron-right"></use>
                            </svg> </a>
                    </div>
                    <div class="col-auto d-none d-lg-block"> <svg aria-label="Placeholder: Thumbnail"
                            class="bd-placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img"
                            width="200" xmlns="http://www.w3.org/2000/svg">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static"> <strong
                            class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p> <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#chevron-right"></use>
                            </svg> </a>
                    </div>
                    <div class="col-auto d-none d-lg-block"> <svg aria-label="Placeholder: Thumbnail"
                            class="bd-placeholder-img " height="250" preserveAspectRatio="xMidYMid slice" role="img"
                            width="200" xmlns="http://www.w3.org/2000/svg">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div> -->

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
