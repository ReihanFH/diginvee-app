<div>
    @if ($saved_top_message === null)
        <button type="button" class="btn app-btn-secondary" data-bs-toggle="modal" data-bs-target="#messageModal">
            Message
        </button>
        <!-- Message Modal -->
        <div wire:ignore.self class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalLabel">Broadcast Message Template</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            wire:click="closeModal"></button>
                    </div>
                    <form wire:submit.prevent="saveMessage">
                        <div class="modal-body">
                            <textarea id="topMessage" type="text" wire:model="top_message" class="form-control" placeholder="Header" required></textarea>
                            <input type="text" value="Guest Name" class="form-control mt-3 mb-3" disabled>
                            <textarea id="bodyMessage" type="text" wire:model="body_message" class="form-control" placeholder="Body" required></textarea>
                            <input type="text" value="Invitation Link" class="form-control mt-3 mb-3" disabled>
                            <textarea id="bottomMessage" type="text" wire:model="bottom_message" class="form-control" placeholder="Footer"
                                required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn app-btn-tertiary" wire:click="closeModal"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn app-btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        <button type="button" data-bs-toggle="modal" data-bs-target="#messageModal"
            wire:click="editMessage({{ $message_id }})" class="btn app-btn-secondary">
            Message
        </button>
        <div wire:ignore.self class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalLabel">Broadcast Message Template</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            wire:click="closeModal"></button>
                    </div>
                    <form wire:submit.prevent="updateMessage">
                        <div class="modal-body">
                            <textarea id="topMessage" type="text" wire:model="top_message" class="form-control" placeholder="Header" required></textarea>
                            <input type="text" value="Guest Name" class="form-control mt-3 mb-3" disabled>
                            <textarea id="bodyMessage" type="text" wire:model="body_message" class="form-control" placeholder="Body" required></textarea>
                            <input type="text" value="Invitation Link" class="form-control mt-3 mb-3" disabled>
                            <textarea id="bottomMessage" type="text" wire:model="bottom_message" class="form-control" placeholder="Footer"
                                required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn app-btn-tertiary" wire:click="closeModal"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn app-btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
