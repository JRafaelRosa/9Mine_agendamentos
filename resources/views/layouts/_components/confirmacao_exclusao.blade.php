<!-- Modal -->
<div class="modal fade" id="confirmarExclusaoModal" tabindex="-1" aria-labelledby="confirmarExclusaoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-warning border border-warning">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmarExclusaoModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir este usuário? Essa ação não pode ser desfeita.
            </div>
            <div class="modal-footer border-top border-warning">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" onclick="document.querySelector('form').submit();">
                    Confirmar
                </button>
            </div>
        </div>
    </div>
</div>
