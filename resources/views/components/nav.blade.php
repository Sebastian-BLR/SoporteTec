<nav class="navbar navbar-expand-lg navbar-light bg-info shadow">
  <div class="container-fluid">

    <a class="navbar-brand" style="min-width: 82px"
      href="@auth {{ route('dashboard') }} @endauth 
      @guest {{ route('home') }} @endguest">@yield('place')</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      @guest
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link {{ $inicioActive ?? '' }}" aria-current="page" href="{{ route('home') }}">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ $contactoActive ?? '' }}" href="{{ route('contacto') }}">Contacto</a>
          </li>

        </ul>

        <div class=" ms-md-auto me-md-3 navbar-nav">
          <div class="nav-item">
            <a class="nav-link {{ $loginActive ?? '' }}" aria-current="page" href="{{ route('login') }}">Login</a>
          </div>
        </div>
      @endguest

      @auth
        <div class=" ms-md-auto me-md-3 navbar-nav">
          <form method="POST" action="{{ route('logout.store') }}">
            @csrf
            <button type="submit" class="btn btn-dark">Logout</button>
          </form>
        </div>
      @endauth
    </div>
  </div>
</nav>
