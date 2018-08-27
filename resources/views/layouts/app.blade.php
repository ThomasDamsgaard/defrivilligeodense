<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>De Frivillige Odense</title>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


  <!-- Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <style media="screen">
  html, body {
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
  }

  a {
    color: #636b6f;
    padding: 0 25px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
  }

  .has-padding-top {
    padding-top: 3rem;
  }

  .has-large-padding-top {
    padding-top: 5rem;
  }
  </style>

  @yield('css')

</head>
<body>
  <div id="app">
    <!-- Container -->
    <div class="container">

      <!-- Navbar -->
      <nav class="navbar is-transparent">

        <!-- Left Side -->
        @auth
        <div class="navbar-brand">
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              {{ Auth::user()->name }}
            </a>
            <div class="navbar-dropdown is-right is-boxed">
              <a class="navbar-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Log ud') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </div>
      </div>
      @endauth
      <!-- Left Side -->

      <!-- Right Side -->
      <div class="navbar-menu is-active">
        <div class="navbar-end">
          @guest
          <div class="navbar-item">
            <div class="field is-grouped">
              <a class="navbar-item" href="{{ route('login') }}">{{ __('Log ind') }}</a>
            </div>
          </div>
          @endguest
        </div>
      </div>
      <!-- Right Side -->

    </nav>
    <!-- Navbar  -->

  </div>
  <!-- Container -->


  <main>
    @yield('content')
  </main>
</div>
@yield('scripts')

</body>
</html>
