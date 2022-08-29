 @extends('layouts.main')

 @section('base')
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold">Buenas tardes</h6>
         </div>
         <div class="card-body">
             <div>
                 <!-- <label for="ini">Fecha inicio</label>
            <input type="date" name="fec-inicio" id="ini">
            <label for="fin">Fecha fin</label>
            <input type="date" name="fec-fin" id="fin">

            <button type="button" class="btn btn-secondary btn-sm float-right">Consultar</button> -->
                 <a class="btn btn-secondary btn-sm float-right mt-3 mb-3" href="{{ route('post.export') }}"><i
                         class="fa-solid fa-download"></i> Generar
                     reporte</a>
             </div>
             <br>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead class="contacta">
                         <tr>
                             <th scope="col">Nombre</th>
                             <th scope="col">Cédula</th>
                             <th scope="col">Opciones</th>

                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($empleados as $empleado)
                             <tr>
                                 <td>{{ $empleado->EMP_NOMBRES }}</td>
                                 <td>{{ $empleado->EMP_CEDULA }}</td>
                                 <td class="text-center">
                                     <!-- <a class="btn" style="background-color: #f96806; color:white"
                                             href="/Finanzas/Agente">Ver</a> -->
                                     <form action="{{ route('Finanzas.show', $empleado->EMP_ID) }}" method="POST">

                                         <a class="btn" style="background-color: #f96806; color:white"
                                             href="{{ route('Finanzas.show', $empleado->EMP_ID) }}">Ver</a>
                                         @csrf
                                     </form>
                                 </td>
                             </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 @endsection
