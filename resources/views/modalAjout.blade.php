<div class="modal fade" id="volumeExpireModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Saisir les informations</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="modalForm" method="POST" action="{{ route('rechargeVolume') }}">
            @csrf
            <input type="hidden" name="id" value="">

            <div class="mb-3">
              <label for="volumeInput" class="form-label">Volume</label>
              <input type="number" class="form-control" id="volumeInput" name="Volume" placeholder="Entrer le volume" required/>
            </div>
            <div class="mb-3">
              <label for="expireAtInput" class="form-label">ExpireAt</label>
              <input type="date" class="form-control" id="expireAtInput" name="ExpireAt" required/>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
