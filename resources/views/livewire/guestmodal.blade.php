<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="guestModal" tabindex="-1" aria-labelledby="guestModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="guestModalLabel">Create Guest</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveGuest">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Guest Name</label>
                        <input type="text" wire:model="name"
                            class="form-control @if ($errors->has('name')) is-invalid @elseif($name == null) @else is-valid @endif">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Guest Phone</label>
                        <div class="row">
                            <div class="col-4 col-md-3 pe-0">
                                <select wire:model="phonecode" class="form-select">
                                    <option value="62">+62</option>
                                    <option value="61">+61</option>
                                </select>
                            </div>
                            <div class="col-8 col-md-9">
                                <input type="text" wire:model="phone"
                                    class="form-control col-9 @if ($errors->has('phone')) is-invalid @elseif($phone == null) @else is-valid @endif">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Note</label>
                        <input type="text" wire:model="note"
                            class="form-control @if ($errors->has('note')) is-invalid @elseif($note == null) @else is-valid @endif">
                        @error('note')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
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

<!-- Update Guest Modal -->
<div wire:ignore.self class="modal fade" id="updateGuestModal" tabindex="-1" aria-labelledby="updateGuestModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateGuestModalLabel">Edit Guest</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateGuest">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Guest Name</label>
                        <input type="text" wire:model="name"
                            class="form-control @if ($errors->has('name')) is-invalid @elseif($name == null) @else is-valid @endif">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Guest Phone</label>
                        <div class="row">
                            <div class="col-4 col-md-3 pe-0">
                                <select wire:model="phonecode" class="form-select">
                                    <option value="{{ $phonecode }}">+{{ $phonecode }}</option>
                                    @if ($phonecode == '61')
                                        <option value="62">+62</option>
                                    @else
                                        <option value="61">+61</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-8 col-md-9">
                                <input type="text" wire:model="phone"
                                    class="form-control col-9 @if ($errors->has('phone')) is-invalid @elseif($phone == null) @else is-valid @endif">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Note</label>
                        <input type="text" wire:model="note"
                            class="form-control @if ($errors->has('note')) is-invalid @elseif($note == null) @else is-valid @endif">
                        @error('note')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <div class="form-check form-switch form-switch-md d-flex align-items-center">
                            <input wire:model="status" class="form-check-input" type="checkbox" role="switch"
                                id="statusSwitch">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn app-btn-tertiary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn app-btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Guest Modal -->
<div wire:ignore.self class="modal fade" id="deleteGuestModal" tabindex="-1"
    aria-labelledby="deleteGuestModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteGuestModalLabel">Delete Guest</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyGuest">
                <div class="modal-body">
                    Are you sure you want to <strong>delete</strong> this guest from the lists?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn app-btn-tertiary" wire:click="closeModal"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Import Excel Modal -->
<div wire:ignore.self class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">Import Guest</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="import">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Upload File</label>
                        <input type="file" wire:model="file" class="form-control" required>
                    </div>
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
