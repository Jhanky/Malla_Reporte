@extends('layouts.main')

@section('title', 'Supervisor')


@section('base')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">Hombre</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $list)
                            <tr>
                                <td>{{ $list->EMP_NOMBRES }}</td>
                                <td>{{ $list->EMP_CEDULA }}</td>
                                <td style="text-align: center;">
                                    <a class="btn" href="/horario/empleado/{{ $list->EMP_ID }}"
                                        style="background-color: #f96806; color:white">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        var dataTable = new DataTable("#dataTable");
    </script>
@endsection
