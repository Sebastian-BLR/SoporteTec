@extends('layouts.app')


@section('place')
  Dashboard
@endsection



@section('contenido')
  <div class="container bg-light shadow p-3">
    <h1 class="text-center bg-info">Solicitudes</h1>

    <div class="d-none d-lg-flex">

      <div class="col-8 col-lg-5">
        <p class="mb-0 text-center ">Datos</p>
      </div>

      <p class="col-4 col-lg-2 text-center ">Estatus</p>

      <div class="d-grid d-md-flex col-lg-5 align-items-center  justify-content-md-center gap-2 gap-md-5 my-4 my-lg-0">
        <p class="text-center">Acciones</p>
      </div>

    </div>
    @foreach ($solicitudes as $solicitud)
      <div class="row border-bottom border-top">

        <div class="col-12 col-lg-5 ">
          <p class="mb-0 ps-2">Folio: {{ $solicitud->id }}</p>
          <p class="mb-0 ps-2">Nombre: {{ $solicitud->nombre }}</p>
          <p class="mb-0 ps-2">Fecha: {{ $solicitud->fecha->format('d/m/Y') }}</p>
        </div>

        {{-- <p class="col-4 col-lg-1 text-center py-md-4">{{ $solicitud->estatus->estatu }}</p> --}}

        <div class="d-grid   col-lg-2 align-items-center my-4 my-lg-0 ">
               

                <div class="btn-group">
                  <button class="btn btn-{{ $solicitud -> estatus -> color }}  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                   {{ $solicitud->estatus->estatu}}
                  </button>
                  <ul class="dropdown-menu p-0 ">
                    @foreach ($estatus as $estatu)
                    @if($estatu->id !== $solicitud->estatus->id)
                    <form action="{{ route('solicitud.update', ['solicitud' => $solicitud->id]) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="estatus" value="{{ $estatu -> id }}">
                      <button type="submit" class="btn btn-{{ $estatu -> color }} w-100 rounded-0 ">{{ $estatu -> estatu }}</button>
                    </form>
                    @endif
                    @endforeach
                    
                  </ul>
                </div>
                

          {{-- <button type="button" class="btn btn-success p-2">{{ $solicitud->estatus->estatu }}</button> --}}
        </div>
     
        <div class="d-grid d-lg-flex col-lg-5 align-items-center  justify-content-lg-center gap-2 gap-md-5 mb-3 mb-md-0">
          <a type="button" class="btn  btn-primary col-lg-2"
            href="{{ route('solicitud.index', ['solicitud' => $solicitud->id]) }}">Ver</a>
          
          <form method="POST" action="{{ route('solicitud.delete', ['solicitud' => $solicitud->id]) }}" class="col-lg-3 d-grid">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn  btn-danger">Eliminar</button>
          </form>
        </div>

      </div>
    @endforeach
  </div>
  <div class="mt-5 container">
    {{ $solicitudes->links() }}
  </div>
@endsection
