@extends('layouts.app')


@section('place')
  Contacto
@endsection



@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow-lg p-3 mb-5 bg-white">
          <div class="card-header bg-info h4">Solicitud de Servicio Técnico</div>
          <div class="card-body">
            <form method="POST" class="needs-validation" novalidate>
              @csrf

              <div class="mb-3">

                <label class="form-label" for="nombre">Nombre:</label>
                <input type="text" id="nombre" name='nombre' placeholder="Escribe tu nombre"
                  class="form-control @error('nombre') is-invalid @enderror" aria-describedby="errorNombre"
                  value="{{ old('nombre') }}">

                <div id='errorNombre' class="invalid-feedback alert alert-danger p-1" role="alert">
                  @error('nombre')
                    {{ $message }}
                  @enderror
                </div>

              </div>

<div class="row">
  
                <div class="mb-3 col-md-8">
                  <label class="form-label" for="email">Email:</label>
                  <input type="email" id="email" name='email' placeholder="Escribe tu correo electrónico"
                    class="form-control @error('email') is-invalid @enderror" aria-describedby="errorEmail"
                    value="{{ old('email') }}">
  
                  <div id='errorEmail' class="invalid-feedback alert alert-danger p-1" role="alert">
                    @error('email')
                      {{ $message }}
                    @enderror
                  </div>
                </div>
  
                <div class="mb-3 col-md-4">
                  <label class="form-label" for="fecha-visita">Fecha de la visita:</label>
                  <input type="date" id="fecha-visita" name="fecha" min={{ $fechaMin}}
                    class="form-control @error('fecha') is-invalid @enderror" aria-describedby="errorFecha"
                    value="{{ old('fecha') }}">
  
                  <div id='errorFecha' class="invalid-feedback alert alert-danger p-1" role="alert">
                    @error('fecha')
                      {{ str_replace('fecha', 'fecha de la visita', $message) }}
                    @enderror
                  </div>
                </div>
</div>

              <div class="mb-3">
                <label class="form-label" for="direccion">Direccion:</label>
                <textarea id="direccion" rows="3" name="direccion" placeholder="Escribe tu direccion"
                  class="form-control @error('direccion') is-invalid @enderror" aria-describedby="errorDireccion">{{ old('direccion') }}</textarea>

                <div id='errorDireccion' class="invalid-feedback alert alert-danger p-1" role="alert">
                  @error('direccion')
                    {{ $message }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="problema">Problema:</label>
                <select id="problema" name="problema_id" class="form-control @error('problema_id') is-invalid @enderror"
                  aria-describedby="errorProblema_id" ">
                    <option value="">Selecciona un problema</option>
                     @foreach ($problemas as $problema)
                  <option value="{{ $problema->id }}" @if ($problema->id == old('problema_id')) selected @endif>
                    {{ $problema->nombre }}</option>
                  @endforeach

                </select>

                <div id='errorProblema_id' class="invalid-feedback alert alert-danger p-1" role="alert">
                  @error('problema_id')
                    {{ str_replace('problema id', 'problema', $message) }}
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="descripcion">Descripción del problema:</label>
                <textarea id="descripcion" rows="3" name="descripcion" placeholder="Escribe una descripción del problema"
                  class="form-control @error('descripcion') is-invalid @enderror" aria-describedby="errorDescripcion">{{ old('descripcion') }}</textarea>

                <div id='errorDescripcion' class="invalid-feedback alert alert-danger p-1" role="alert">
                  @error('descripcion')
                    {{ $message }}
                  @enderror
                </div>
              </div>

            

              <div class="d-grid d-md-block">
                <button type="submit" class="btn btn-primary">Enviar Solucitud</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endsection
