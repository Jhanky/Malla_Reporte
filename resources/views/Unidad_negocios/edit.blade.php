<div class="modal fade" id="EditUnidadNegocio{{ $list->UNI_ID }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="">
                <h6 class="modal-title">
                    Actualizar Información
                </h6>
            </div>


            <form class="" method="POST" action="{{ route('unidad_negocio.update', $list->UNI_ID) }}" novalidate>
                @csrf
                @method('PUT')

                <div class="modal-body" id="cont_modal">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="UNI_CODE" class="form-label">Codigo</label>
                            <input type="number" class="form-control" id="UNI_CODE"
                                name="UNI_CODE" value="{{ $list->UNI_CODE }}" required
                                pattern="[0-9]+">
                            <div class="invalid-feedback">Completa los datos</div>
                        </div>
                        <div class="col-md-6">
                            <label for="UNI_NOMBRE" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="UNI_NOMBRE"
                                name="UNI_NOMBRE" value="{{ $list->UNI_NOMBRE }}" required
                                onkeypress="return SoloLetras(event);">
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
