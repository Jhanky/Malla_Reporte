@extends('layouts.main')


@section('base')
    @foreach ($consulta as $empleado)
    @endforeach
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">
                {{ $empleado->EMP_NOMBRES }}
            </h6>
        </div>
        <div class="card-body">
            <div>
                <!-- <label for="ini">Fecha inicio</label>
                                <input type="date" name="fec-inicio" id="ini">
                                <label for="fin">Fecha fin</label>
                                <input type="date" name="fec-fin" id="fin">

                                <button type="button" class="btn btn-secondary btn-sm float-right">Consultar</button> -->

            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Campaña</th>
                            <th scope="col">Numero de horas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SDF</td>
                            <td>243</td>

                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Empresa</th>
                            <th scope="col">Numero de horas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AFGDF</td>
                            <td>124</td>

                        </tr>
                        <tr>
                            <td>AF</td>
                            <td>454</td>

                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Servicio</th>
                            <th scope="col">Numero de horas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NBV</td>
                            <td>103</td>

                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- <button type="button" class="btn btn-secondary btn-sm float-right"><i class="fa-solid fa-download"></i> Generar
                                reporte</button> -->

            <div class="container">
                <div class="row">
                    <div class="col-sm text-center">
                        <form class="form-group row" action="{{ route('post.grupo', $empleado->EMP_ID) }}" method="POST" \>
                            <div><a class="form-group btn btn-secondary btn-sm"
                                    href="{{ route('post.grupo', $empleado->EMP_ID) }}"><i class="fa-solid fa-download"></i>
                                    Generar
                                    reporte de Campaña</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm text-center">
                        <form class="form-group row" action="{{ route('post.empresa', $empleado->EMP_ID) }}" method="POST"
                            \>
                            <div><a class="form-group btn btn-secondary btn-sm"
                                    href="{{ route('post.empresa', $empleado->EMP_ID) }}"><i
                                        class="fa-solid fa-download"></i> Generar
                                    reporte de Empresa</a></div>
                        </form>
                    </div>
                    <div class="col-sm text-center">
                        <form class="form-group row" action="{{ route('post.servicio', $empleado->EMP_ID) }}" method="POST"
                            \>
                            <div><a class="form-group btn btn-secondary btn-sm"
                                    href="{{ route('post.servicio', $empleado->EMP_ID) }}"><i
                                        class="fa-solid fa-download"></i> Generar
                                    reporte de Servicio</a></div>
                        </form>
                    </div>
                </div>
            </div>







        </div>
    </div>
@endsection
