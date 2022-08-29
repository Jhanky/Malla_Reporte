@extends('layouts.main')

 @section('base')
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold">Actualizar estado de agentes</h6>
         </div>
         <div class="card-body">

             <div class="row justify-content-center">
                 <form class="row g-3">
                     <div class="mb-3">
                         <label for="formFile" class="form-label">Buscar archivo de actualizacion</label>
                         <input class="form-control" type="file" id="formFile">
                     </div>
                 </form>
             </div>
             <hr>
             <div class="text-center">
                 <p> <img src="{{ asset('img/1486565571-microsoft-office-excel_81549.png') }}" class="img-fluid"
                         alt="logo-excel" width="50" height="50">Descarga la plantilla modelo para actualizar los
                     datos <a download="Plantilla-modelo" href="{{ asset('doc/Proyectos.xlsx') }}">aqui</a></p>
             </div>

         </div>
     </div>
 @endsection
