<div class="container">
    <div id="calendario"></div>
</div>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="evento" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="form">

                    <div class="form-group mb-3">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" name="id" id="id"
                            placeholder="">
                    </div>

                    <div class="form-group mb-3">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" name="title" id="title"
                            placeholder="Escribe el título del evento">
                    </div>

                    <div class="form-group mb-3">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>


                    <div class="form-group mb-3">
                        <label for="start" class="form-label">start</label>
                        <input type="datetime-local" class="form-control" name="start" id="start"
                            aria-describedby="helpId" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="end" class="form-label">end</label>
                        <input type="datetime-local" class="form-control" name="end" id="end"
                            aria-describedby="helpId" placeholder="">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-warning" id="btnEliminar">Eliminar</button>
                <button type="button" class="btn btn-danger" id="btnModificar">Modificar</button>

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
