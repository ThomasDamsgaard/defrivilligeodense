<!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <!-- <ul class="navbar-nav mr-auto">

            </ul> -->

            <!-- Right Side Of Navbar -->
            <!-- <ul class="navbar-nav ml-auto"> -->
                <!-- Authentication Links -->
                <!-- @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> -->

<!-- Panel -->
<!-- <div class="columns is-centered">
  <div class="column is-12">
    <nav class="panel">
      <p class="panel-heading">
        <strong>Medlemmer</strong>
      </p>
      <div class="panel-block">
        <p class="control has-icons-left">
          <input class="input is-small" type="text" placeholder="Søg">
          <span class="icon is-small is-left">
            <i class="fas fa-search" aria-hidden="true"></i>
          </span>
        </p>
      </div>

      @foreach ($members as $member)

      @include('partials.tableRow')

      @endforeach

      <div class="panel-block">
        <button class="button is-outlined" onclick="refs.add.open()">
          Tilføj medlem
        </button>
      </div>
    </nav>
  </div>
</div> -->
<!-- Panel -->



<!-- <a class="panel-block member" onclick="refs.show.open()" id="{{ $member->id }}">
  <span class="panel-icon">
    <i class="fas fa-user" aria-hidden="true"></i>
  </span>
  <span class="column is-4">
    <p> {{ $member->name }} </p>
  </span>
  <span class="panel-icon">
    <i class="fas fa-at" aria-hidden="true"></i>
  </span>
  <span class="column is-5">
    {{ $member->email }}
  </span>
  <span class="panel-icon">
    <i class="fas fa-tshirt" aria-hidden="true"></i>
  </span>
  <span class="panel-button column is-1">
    {{ $member->size }}
  </span>
  <span class="panel-icon">
    <i class="fas fa-coins" aria-hidden="true"></i>
  </span>
  <span class="panel-button column is-2">
    {{ $member->points}}
  </span>
</a> -->
