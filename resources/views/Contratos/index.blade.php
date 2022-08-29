@extends('layouts.main')

@section('title')
    Contratos
@endsection

@section('base')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contratos</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <a>Cantidad: {{ $total }}</a>
                    <form class="d-flex">
                        <button type="button" class="btn btn-primary rounded-pill m-2" rel="tooltip" data-bs-toggle="modal"
                        data-bs-target="#CrearContrato">
                        <i class="fas fa-plus"></i>
                        </button>
                    </form>
                </div>
            </div>

            @include('Contratos.create')

            @include('layouts.msj')
            @include('Contratos.mjs')

            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Unidad de negocio nombre</th>
                                <th>Cliente nombre</th>
                                <th>Servicio nombre</th>
                                <th>Campaña nombre</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contratos as $list)
                                <tr>
                                    <td>{{ $list->UNI_NOMBRE }}</td>
                                    <td>{{ $list->CLI_NOMBRE }}</td>
                                    <td>{{ $list->SER_NOMBRE }}</td>
                                    <td>{{ $list->CAM_NOMBRE }}</td>
                                    <td>

                                        <form action="{{ route('contrato.delete', $list->CON_ID) }}" method="POST"
                                            style="display: inline-block; ">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger" rel="tooltip"
                                                onclick="return confirm('Seguro que quiere eliminar este contratos?') ">
                                                <i class="fas fa-trash-alt" title="Eliminar Registro"></i>
                                            </button>

                                        </form>

                                        <button type="button" class="btn btn-primary" rel="tooltip" data-bs-toggle="modal"
                                            data-bs-target="#EditContrato{{ $list->CON_ID }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                @include('Contratos.edit')
                            @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
