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
            <form method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name='name' placeholder="Escribe tu nombre">
              </div>

              <div class="mb-3">
                <label class="form-label" for="email">Email:</label>
                <input type="email" class="form-control" id="email" name='email'
                  placeholder="Escribe tu correo electrónico">
              </div>

              <div class="mb-3">
                <label class="form-label" for="problema">Problema:</label>
                <select class="form-control" id="problema" name="problema">
                  <option value="">Selecciona un problema</option>
                  <option value="1">Problema 1</option>
                  <option value="2">Problema 2</option>
                  <option value="3">Problema 3</option>
                </select>
              </div>

              <div class="mb-3">
                <label class="form-label" for="descripcion">Descripción del problema:</label>
                <textarea class="form-control" id="descripcion" rows="3" name="descripcion"
                  placeholder="Escribe una descripción del problema"></textarea>
              </div>

              <div class="mb-3">
                <label class="form-label" for="dia-visita">Día de la visita:</label>
                <input type="date" class="form-control" id="dia-visita" name="fecha">
              </div </div>

              <div class="d-grid d-md-block">
                <button type="submit" class="btn btn-primary">Enviar Solucitud</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
@endsection
