@extends('layouts.app')


@section('place')
  Solicitud
@endsection



@section('contenido')
<div class="container mb-4">
  <a class='link-secondary text-decoration-none' href="{{ route('dashboard')}}"><i class="bi bi-arrow-left h2"> Volver</i></a>
</div>

<div class="container bg-light shadow p-3">
  <h1 class="text-center bg-info">Solicitud Nº {{ $solicitud -> id }}</h1>
    <div class="px-4 pt-4">
      <h2 class="mb-0">{{ $solicitud -> problema -> nombre}}</h2>
      <p class="text-bg-secondary font-monospace ">{{ $solicitud -> estatus -> estatu}}</p>
      <p>Cliente: {{ $solicitud -> nombre }}</p>
      <p>Direccion: {{ $solicitud -> direccion }}</p>
      <p>Email: {{ $solicitud -> email }}</p>
      <P>Descripcion del problema: {{ $solicitud -> descripcion }}</p>
      <P>Fecha de Visita Programada: {{ $solicitud -> fecha -> format('l d-m-Y') }}</p>
    </div>

    </div>
@endsection
