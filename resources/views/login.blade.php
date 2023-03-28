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
            <form>
              @csrf
              <div class="mb-3">
                <label class="form-label" for="nombre">User:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Escribe tu user">
              </div>

              <div class="mb-3">
                <label for="inputPassword" class="sr-only form-label">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Escribe tu Password" required>
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
