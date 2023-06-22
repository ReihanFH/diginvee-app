<div>
    <!-- Logout Modal -->
    <div wire:ignore.self class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to <strong>Logout?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn app-btn-tertiary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <a href="/logout" class="btn btn-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
