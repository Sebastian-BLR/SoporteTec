@extends('layouts.app')


@section('place')
  Dashboard
@endsection



@section('contenido')
  <div class="container bg-light shadow p-3">
    <h1 class="text-center bg-info">Solicitudes</h1>

    <div class="d-none d-lg-flex">

      <div class="col-8 col-lg-4">
        <p class="mb-0 text-center ">Datos</p>
      </div>

      <p class="col-4 col-lg-1 text-center">Estatus</p>

      <div class="d-grid d-md-flex col-lg-6 align-items-center  justify-content-md-center gap-2 gap-md-5 my-4 my-lg-0">
        <p class="text-center">Acciones</p>
      </div>

    </div>
    @foreach ($solicitudes as $solicitud)
      <div class="row border-bottom border-top">

        <div class="col-8 col-lg-4">
          <p class="mb-0 ps-2">Folio: {{ $solicitud->id }}</p>
          <p class="mb-0 ps-2">Nombre: {{ $solicitud->nombre }}</p>
          <p class="mb-0 ps-2">Fecha: {{ $solicitud->fecha->format('d/m/Y') }}</p>
        </div>

        <p class="col-4 col-lg-1 text-center py-md-4">{{ $solicitud -> estatus -> estatu }}</p>

        <div class="d-grid d-md-flex col-lg-6 align-items-center  justify-content-md-center gap-2 gap-md-5 my-4 my-lg-0">
          <button type="button" class="btn btn-sm btn-success col-md-4">Cambiar estado</button>
          <button type="button" class="btn btn-sm btn-primary col-md-2">Editar</button>
          <button type="button" class="btn btn-sm btn-danger  col-md-3">Eliminar</button>
        </div>

      </div>
    @endforeach
  </div>
  <div class="mt-5 container">
      {{ $solicitudes->links() }}
  </div>
@endsection
