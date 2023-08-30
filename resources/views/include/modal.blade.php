<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Incluir Fase Processual</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <label for="fase_processual" class="form-label">Fase Processual</label>
                <select name="fase_processual" id="fase_processual" class="custom-select">
                    <option value="">Selecione</option>
                    @foreach ($fases as $data)
                        <option value="{{ $data->id }}">{{ $data->fase }}</option>
                    @endforeach
                </select>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
