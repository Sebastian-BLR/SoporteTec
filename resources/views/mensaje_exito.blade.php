@extends('layouts.app')


@section('place')
  Exito
@endsection



@section('contenido')
  <div class="container">
    @if (session()->has('mensaje_exito'))
      <div class="alert alert-success">
        {{ session('mensaje_exito') }}
      </div>
    @endif
  </div>
@endsection
