<!-- Modal -->
<div class="modal fade" id="asignarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Asignar Malla</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                {{-- formulario --}}
                <form action="{{ route('post.evento') }}" method="POST" name="form-data" class="row needs-validation" novalidate>
                    @csrf
                    <input name="EMP_ID" id="EMP_ID" type="text" value="{{$list->EMP_ID}}" style="display: none;">
                    <div class="col-md-6">
                        <label for="tbl_tipo_identificacions_nombre" class="form-label">Hora inicial</label>
                        <input name="EVE_INICIO" id="EVE_INICIO" class="form-control" type="datetime-local">
                        <div class="invalid-feedback">Completa los datos</div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <label for="tbl_tipo_identificacions_nombre" class="form-label">Hora final</label>
                        <input name="EVE_FINAL" id="EVE_FINAL" class="form-control" type="datetime-local">
                        <div class="invalid-feedback">Completa los datos</div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <label for="CLI_ID" class="form-label">Cliente</label>
                        <select name="CLI_ID" id="CLI_ID" class="form-select" aria-label="Default select example"
                            required>
                            <option value=""></option>
                            @foreach ($clientes as $un)
                                <option value="{{ $un->CLI_ID }}">{{ $un->CLI_NOMBRE }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Completa los datos</div>
                        <br>
                    </div>
                    <div class="col-6">
                        <label for="CAM_ID" class="form-label">Campañas</label>
                        <select name="CAM_ID" id="CAM_ID" class="form-select" aria-label="Default select example"
                            required>
                            <option value=""></option>
                            @foreach ($campañas as $c)
                                <option value="{{ $c->CAM_ID }}">{{ $c->CAM_NOMBRE }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Completa los datos</div>
                        <br>
                    </div>
                    <div class="col-6">
                        <label for="SER_ID" class="form-label">Servicios</label>
                        <select name="SER_ID" id="SER_ID" class="form-select" aria-label="Default select example"
                            required>
                            <option value=""></option>
                            @foreach ($servicios as $s)
                                <option value="{{ $s->SER_ID }}">{{ $s->SER_NOMBRE }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Completa los datos</div>
                        <br>
                    </div>
                    <div class="col-6">
                        <label for="UNI_ID" class="form-label">Unidades de negocio</label>
                        <select name="UNI_ID" id="UNI_ID" class="form-select" aria-label="Default select example"
                            required>
                            <option value=""></option>
                            @foreach ($uni_negocios as $un)
                                <option value="{{ $un->UNI_ID }}">{{ $un->UNI_NOMBRE }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Completa los datos</div>
                        <br>
                    </div>

                    {{-- botones --}}
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn"
                            style="background-color: #f96806; color:white;">Guardar</button>
                    </div>
                    {{-- fin botones --}}


                </form>
                {{-- fin formulario --}}


            </div>
        </div>
    </div>
</div>
