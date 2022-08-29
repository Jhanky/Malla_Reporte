<div class="modal fade" id="EditContrato{{ $list->CON_ID }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="">
                <h6 class="modal-title">
                    Actualizar Información
                </h6>
            </div>

            @php
                use Illuminate\Support\Facades\DB;
            @endphp


            <form class="" method="POST" action="{{ route('contrato.update', $list->CON_ID) }}" novalidate>
                @csrf
                @method('PUT')

                <div class="modal-body" id="cont_modal">
                    <div class="row">
                        <div class="col-6">
                            <label for="UNI_ID" class="form-label">Unidad de negocio</label>
                            <select name="UNI_ID" id="UNI_ID" class="form-select"
                                aria-label="Default select example" required>
                                @php
                                    $uni_n = DB::select('SELECT UNI_NOMBRE FROM unidad_negocios WHERE UNI_ID = ' . $list->UNI_ID);
                                @endphp
                                @foreach ($uni_n as $data1)
                                    <option value="{{ $list->UNI_ID }}">{{ $data1->UNI_NOMBRE }}</option>
                                @endforeach
                                @foreach ($unidad_negocios as $uni)
                                    <option value="{{ $uni->UNI_ID }}">{{ $uni->UNI_NOMBRE }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="col-6">
                            <label for="CLI_ID" class="form-label">Cliente</label>
                            <select name="CLI_ID" id="CLI_ID" class="form-select"
                                aria-label="Default select example" required>
                                @php
                                    $cliente = DB::select('SELECT CLI_NOMBRE FROM clientes WHERE CLI_ID = ' . $list->CLI_ID);
                                @endphp
                                @foreach ($cliente as $data2)
                                    <option value="{{ $list->CLI_ID }}">{{ $data2->CLI_NOMBRE }}</option>
                                @endforeach
                                @foreach ($clientes as $cli)
                                    <option value="{{ $cli->CLI_ID }}">{{ $cli->CLI_NOMBRE }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="col-6">
                            <label for="SER_ID" class="form-label">Servicio</label>
                            <select name="SER_ID" id="SER_ID" class="form-select"
                                aria-label="Default select example" required>
                                @php
                                    $servicio = DB::select('SELECT SER_NOMBRE FROM servicios WHERE SER_ID = ' . $list->SER_ID);
                                @endphp
                                @foreach ($servicio as $data3)
                                    <option value="{{ $list->SER_ID }}">{{ $data3->SER_NOMBRE }}</option>
                                @endforeach
                                @foreach ($servicios as $ser)
                                    <option value="{{ $ser->SER_ID }}">{{ $ser->SER_NOMBRE }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="col-6">
                            <label for="CAM_ID" class="form-label">Campaña</label>
                            <select name="CAM_ID" id="CAM_ID" class="form-select"
                                aria-label="Default select example" required>
                                @php
                                    $campaña = DB::select('SELECT CAM_NOMBRE FROM campañas WHERE CAM_ID = ' . $list->CAM_ID);
                                @endphp
                                @foreach ($campaña as $data4)
                                    <option value="{{ $list->CAM_ID }}">{{ $data4->CAM_NOMBRE }}</option>
                                @endforeach
                                @foreach ($campañas as $cam)
                                    <option value="{{ $cam->CAM_ID }}">{{ $cam->CAM_NOMBRE }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-secondary col-3"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success col-md-3">Guardar</button>
                        </div>
                    </div>
            </form>

        </div>
    </div>
</div>
