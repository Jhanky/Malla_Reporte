@extends('layouts.main')

@section('title')
    Servicios
@endsection

@section('base')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Servicios</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <a>Cantidad: {{ $total }}</a>
                    <form class="d-flex">
                        <button type="button" class="btn btn-primary rounded-pill m-2" rel="tooltip" data-bs-toggle="modal"
                        data-bs-target="#CrearServicio">
                        <i class="fas fa-plus"></i>
                        </button>
                    </form>
                </div>
            </div>

            @include('Servicios.create')

            @include('layouts.msj')
            @include('Servicios.mjs')

            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicio as $list)
                                <tr>
                                    <td>{{ $list->SER_NOMBRE }}</td>
                                    <td>

                                        <form action="{{ route('servicio.delete', $list->SER_ID) }}" method="POST"
                                            style="display: inline-block; ">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger" rel="tooltip"
                                                onclick="return confirm('Seguro que quiere eliminar este servicio?') ">
                                                <i class="fas fa-trash-alt" title="Eliminar Registro"></i>
                                            </button>

                                        </form>

                                        <button type="button" class="btn btn-primary" rel="tooltip" data-bs-toggle="modal"
                                            data-bs-target="#EditServicio{{ $list->SER_ID }}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                @include('Servicios.edit')
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
