<div class="modal fade" id="EditCliente{{ $list->CLI_ID }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="">
                <h6 class="modal-title">
                    Actualizar Información
                </h6>
            </div>


            <form class="" method="POST" action="{{ route('cliente.update', $list->CLI_ID) }}" novalidate>
                @csrf
                @method('PUT')

                <div class="modal-body" id="cont_modal">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="CLI_CODE" class="form-label">Codigo</label>
                            <input type="number" class="form-control" id="CLI_CODE" name="CLI_CODE"
                                value="{{ $list->CLI_CODE }}" required pattern="[0-9]+">
                            <div class="invalid-feedback">Completa los datos</div>
                        </div>
                        <div class="col-md-6">
                            <label for="CLI_NOMBRE" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="CLI_NOMBRE" name="CLI_NOMBRE"
                                value="{{ $list->CLI_NOMBRE }}" required onkeypress="return SoloLetras(event);">
                            <div class="invalid-feedback">Completa los datos</div>
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
