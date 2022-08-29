<div class="modal fade" id="CrearContrato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Contrato</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                {{-- formulario --}}
                <form action="{{ route('contrato.create') }}" method="POST" name="form-data"
                    class="row needs-validation" novalidate>
                    @csrf
                    <input type="number" class="form-control" id="USER_ID" name="USER_ID"
                        value="{{ Auth::user()->id }}"required pattern="[0-9]+" style="display: none;">
                        <div class="col-6">
                            <label for="UNI_ID" class="form-label">Unidad de negocio</label>
                            <select name="UNI_ID" id="UNI_ID"
                                class="form-select" aria-label="Default select example" required>
                                <option value=""></option>
                                @foreach ($unidad_negocios as $uni)
                                    <option value="{{ $uni->UNI_ID }}">{{ $uni->UNI_NOMBRE }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="col-6">
                            <label for="CLI_ID" class="form-label">Cliente</label>
                            <select name="CLI_ID" id="CLI_ID"
                                class="form-select" aria-label="Default select example" required>
                                <option value=""></option>
                                @foreach ($clientes as $cli)
                                    <option value="{{ $cli->CLI_ID }}">{{ $cli->CLI_NOMBRE }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="col-6">
                            <label for="SER_ID" class="form-label">Servicio</label>
                            <select name="SER_ID" id="SER_ID"
                                class="form-select" aria-label="Default select example" required>
                                <option value=""></option>
                                @foreach ($servicios as $ser)
                                    <option value="{{ $ser->SER_ID }}">{{ $ser->SER_NOMBRE }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="col-6">
                            <label for="CAM_ID" class="form-label">Campaña</label>
                            <select name="CAM_ID" id="CAM_ID"
                                class="form-select" aria-label="Default select example" required>
                                <option value=""></option>
                                @foreach ($campañas as $cam)
                                    <option value="{{ $cam->CAM_ID }}">{{ $cam->CAM_NOMBRE }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>

                    {{-- botones --}}
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-success col-3">Guardar</button>

                    </div>
                    {{-- fin botones --}}


                </form>
                {{-- fin formulario --}}


            </div>
        </div>
    </div>
</div>
