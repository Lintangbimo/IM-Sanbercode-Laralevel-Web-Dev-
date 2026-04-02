<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
</head>

<body>
  <div class="page-wrapper" id="main-wrapper">

    <!-- Sidebar -->
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/" class="text-nowrap logo-img">
            <img src="{{ asset('assets/images/logos/logo-light.svg') }}" alt="" />
          </a>
        </div>

        <nav class="sidebar-nav scroll-sidebar">
          <ul id="sidebarnav">

            <li class="nav-small-cap">
              <span class="hide-menu">HOME</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/">
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <span class="hide-menu">FORM</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/register">
                <span class="hide-menu">Form Input</span>
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </aside>

    <!-- Main -->
    <div class="body-wrapper">

      <!-- Header -->
      <header class="app-header">
        <nav class="navbar navbar-light">
          <div class="navbar-collapse justify-content-end px-0">
            <ul class="navbar-nav flex-row ms-auto align-items-center">
              <li class="nav-item">
                <img src="{{ asset('assets/images/profile/user-1.jpg') }}" width="35" class="rounded-circle">
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- CONTENT -->
      <div class="container-fluid">
        @yield('content')
      </div>

    </div>
  </div>

  <!-- JS -->
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}"></script>

</body>

</html>