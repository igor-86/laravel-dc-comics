<!-- Modal -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comunicazione</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Sei sicuro di voler eliminare:</p>
                <h3 id="modal-comic-title"></h3>
            </div>
            <div class="modal-footer">
                {{-- data-bs-dismiss permettere di chiudere il modal quando appare sullo schermo --}}
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- Quando clicco su questo faccio partire submit della form --}}
                <button type="button" class="btn btn-danger" id="final-delete">Cancella</button>

            </div>
        </div>
    </div>
</div>
