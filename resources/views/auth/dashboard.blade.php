@extends('layouts.app')


@section('place')
  Dashboard
@endsection



@section('contenido')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow-lg p-3 mb-5 bg-white">
          <div class="card-header bg-info h2 text-center">Solicitudes</div>
          <div class="card-body">

            <div class="row justify-content-around mb-4">
              <a type="button" class="col-sm-5 btn">
                <div class="card  p-3 mb-2 shadow-sm" style="background-color: #eee">
                  <div class="card-header bg-info text-center h3">Hoy</div>
                  <div class="card-body h1 text-center">
                    5
                  </div>
                </div>
              </a>



              <a type="button" class="col-sm-5 btn ">
                <div class="card p-3 mb-2 shadow-sm" style="background-color: #eee">
                  <div class="card-header bg-info text-center h3 ">Mañana</div>
                  <div class="card-body h1 text-center">
                    6
                  </div>
                </div>
              </a>

            </div>

            <div class="row justify-content-around">

              <div class="col-sm-5 mb-4 mb-mb-0">
                <button class="btn btn-danger btn-lg w-100 p-4">Pendientes</button>
              </div>
            
              <div class="col-sm-5">
                <button class="btn btn-success btn-lg w-100 p-4">Completadas</button>
              </div>
            
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
