<div class="modal fade" id="CrearCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Servicio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                {{-- formulario --}}
                <form action="{{ route('cliente.create') }}" method="POST" name="form-data"
                    class="row needs-validation" novalidate>
                    @csrf
                    <input type="number" class="form-control" id="USER_ID" name="USER_ID"
                        value="{{ Auth::user()->id }}"required pattern="[0-9]+" style="display: none;">
                    <div class="col-md-6">
                        <label for="CLI_CODE" class="form-label">Codigo</label>
                        <input type="number" class="form-control" id="CLI_CODE" name="CLI_CODE" required
                            pattern="[0-9]+">
                        <div class="invalid-feedback">Completa los datos</div>
                    </div>
                    <div class="col-md-6">
                        <label for="CLI_NOMBRE" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="CLI_NOMBRE" name="CLI_NOMBRE" required
                            onkeypress="return SoloLetras(event);">
                        <div class="invalid-feedback">Completa los datos</div>
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
