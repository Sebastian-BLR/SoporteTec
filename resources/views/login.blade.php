@extends('layouts.app')


@section('place')
  Login
@endsection



@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow-lg p-3 mb-5 bg-white">
          <div class="card-header bg-info h3">Iniciar Sesión</div>
          <div class="card-body">
            <form method="POST">
              @if(session()->has('mensaje'))
              <div class="alert alert-danger">{{ session('mensaje') }}</div>
              @endif
              @csrf
              <div class="mb-3">
                <label class="form-label" for="nombre">User:</label>
                <input type="text" name="user" id="nombre" placeholder="Escribe tu user"
                  class="form-control @error('user') is-invalid @enderror" aria-describedby="errorUser">

                <div id='errorUser' class="invalid-feedback alert alert-danger p-1" role="alert">
                  @error('user')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <label for="inputPassword" class="sr-only form-label">Password</label>
                <input type="password" id="inputPassword" name="password" placeholder="Escribe tu Password"
                  class="form-control @error('password') is-invalid @enderror" aria-describedby="errorPassword">

                <div id='errorPassword' class="invalid-feedback alert alert-danger p-1" role="alert">
                  @error('password')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Recordarme
                </label>
              </div>

              <div class="d-grid d-md-block">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
