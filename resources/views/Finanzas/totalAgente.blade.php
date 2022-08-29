@extends('layouts.main')


@section('base')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Total de agentes</h6>
        </div>
        <div class="card-body">
            <div >
                <label for="ini">Buscar fecha</label>
                <input type="date" name="fec-inicio" id="ini">
                <button type="button" class="btn btn-secondary btn-sm float-right">Consultar</button>

             </div>

      <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Campaña</th>
                            <th scope="col">Numero de Agentes</th>

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
                            <th scope="col">Numero de Agentes</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AFGDF</td>
                            <td>124</td>

                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Servicio</th>
                            <th scope="col">Numero de Agentes</th>

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
        </div>
    </div>
@endsection
