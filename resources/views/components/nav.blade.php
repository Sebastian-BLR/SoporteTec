<nav class="navbar navbar-expand-lg navbar-light bg-info shadow">
  <div class="container-fluid">

    <a class="navbar-brand" style="min-width: 82px" href="/">@yield('place')</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      @guest
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
          </li>

        </ul>
      @endguest

      <div class=" ms-md-auto me-md-3 navbar-nav">
        <div class="nav-item">
          <a class="nav-link" aria-current="page" href="/login">Login</a>
        </div>
      </div>

    </div>
  </div>
</nav>
