@extends('layouts.main')

@section('base')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Total de agentes </h6>
        </div>
        <div class="card-body">
            <div >
                <label for="ini">Buscar fecha</label>
                <input type="date" name="fec-inicio" id="ini">
                <button type="button" class="btn btn-secondary btn-sm float-right">Consultar</button>

             </div>

      <br>
            <div class="container md-div">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="contacta">
                                <tr>
                                    <th scope="col">Campañas</th>
                                    <th scope="col">Numero de Agentes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sura</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>Consulta Externa</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>Covid-19</td>
                                    <td>50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="container md-div">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="contacta">
                                <tr>
                                    <th scope="col">Empresas</th>
                                    <th scope="col">Numero de Agentes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Clinica General del Norte</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>Super Efectivo</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>Instituto Centro Vascular Irc</td>
                                    <td>50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="container md-div">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="contacta">
                                <tr>
                                    <th scope="col">Servicio</th>
                                    <th scope="col">Numero de Agentes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MArketing</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Telesalud</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>TI</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
