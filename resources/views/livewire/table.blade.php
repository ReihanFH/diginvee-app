<div>
    <div class="row g-3 mb-4 justify-content-between">
        <div class="col per-page d-flex align-items-center">
            <label class="label-start float-start">Show</label>
            <select class="form-select float-start mx-2" wire:model="perPage">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <label class="label-end float-start">Per Page</label>
        </div>
        <div class="col">
            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search name..."
                style="width: 230px" />
        </div>
    </div>

    <div class="tab-content" id="guest-table-tab-content">

        <div class="app-card app-card-guest-table shadow-sm mb-3">
            <div class="table-responsive p-0">
                <table class="table table-hover text-left m-0" id="guest-table">
                    <thead>
                        <tr>
                            <th class="cell">No</th>
                            <th class="cell">Name</th>
                            {{-- <th class="cell sortable" wire:click="sortBy('name')">Name
                                <span class="float-end d-flex">
                                    <i
                                        class="bi bi-arrow-down-short {{ $sortByName === 'name' && $sortDirection === 'desc' ? '' : 'text-black-50 text-opacity-25' }}"></i>
                                    <i
                                        class="bi bi-arrow-up-short {{ $sortByName === 'name' && $sortDirection === 'asc' ? '' : 'text-black-50 text-opacity-25' }}"></i>
                                </span>
                            </th> --}}
                            <th class="cell">Note</th>
                            {{-- <th class="cell">Phone</th> --}}
                            <th class="cell">Link</th>
                            {{-- <th class="cell">QR</th> --}}
                            {{-- <th class="cell">Status</th> --}}
                            <th class="cell">
                                Actions
                                <a wire:click="refresh" class="cell cursor-pointer float-end" title="Refresh table"><i
                                        class="bi bi-arrow-clockwise"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($guests as $guest)
                            <tr>
                                <td class="cell">
                                    {{ ($guests->currentpage() - 1) * $guests->perpage() + $loop->index + 1 }}
                                </td>
                                <td class="cell">{{ $guest->name }}</td>
                                <td class="cell">{{ $guest->note }}</td>
                                {{-- <td class="cell">{{ $guest->phone }}</td> --}}
                                <td class="cell">
                                    <div class="col-auto d-inline-block text-truncate align-middle"
                                        style="max-width: 300px">
                                        https://arinindra.diginvee.com/{{ $guest->code }}
                                    </div>
                                    <div class="col-auto d-inline-block">
                                        <a onclick="copy('https://arinindra.diginvee.com/{{ $guest->code }}','#copy_button_{{ $guest->id }}')"
                                            id="copy_button_{{ $guest->id }}" class="copy-button" title="Copy"><i
                                                class="bi bi-files"></i></a>
                                    </div>
                                </td>
                                {{-- <td class="cell">
                                    <a href="data:image/png;base64, {!! base64_encode(
                                        QrCode::format('png')->size(500)->margin(3)->generate($guest->code),
                                    ) !!}"
                                        download="QR Code {{ $guest->name }} - Pernikahan Arin & Indra"
                                        class="btn btn-outline-secondary">
                                        <i class="bi bi-download"></i>
                                    </a>
                                </td> --}}
                                {{-- <td class="cell">
                                    @if ((bool) $guest->status === false)
                                        <span class="badge rounded-pill bg-danger text-danger">
                                            Not Attend
                                        </span>
                                    @elseif ((bool) $guest->status === true)
                                        <span class="badge rounded-pill bg-success text-success">
                                            Attended
                                        </span>
                                    @endif
                                </td> --}}
                                <td class="cell">
                                    <a type="button" href="{{ route('invitation', [$guest->code]) }}"
                                        title="Invitation"
                                        class="col-auto d-inline-block btn btn-md app-btn-tertiary m-1" target="_blank">
                                        <i class="bi bi-envelope-open"></i>
                                    </a>

                                    @if ($saved_top_message !== null)
                                        @if ($saved_body_message !== null)
                                            @if ($saved_bottom_message !== null)
                                                @if ($guest->phone !== '62')
                                                    <a type="button"
                                                        href="https://api.whatsapp.com/send?phone={{ $guest->phone }}&text={{ rawurlencode($saved_top_message) . '%0A' . rawurlencode($guest->name) . '%0A%0A' . rawurlencode($saved_body_message) . '%0A%0A' . rawurlencode('https://arinindra.diginvee.com/' . $guest->code) . '%0A%0A' . rawurlencode($saved_bottom_message) }}"
                                                        title="Share"
                                                        class="col-auto d-inline-block btn btn-md app-btn-tertiary m-1"
                                                        target="_blank">
                                                        <i class="bi bi-share"></i>
                                                    </a>
                                                @endif
                                            @endif
                                        @endif
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#updateGuestModal"
                                            wire:click="editGuest({{ $guest->id }})" title="Edit Guest"
                                            class="col-auto d-inline-block btn btn-md app-btn-tertiary m-1">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteGuestModal"
                                            wire:click="deleteGuest({{ $guest->id }})" title="Delete Guest"
                                            class="col-auto d-inline-block btn btn-md app-btn-outline-danger m-1"><i
                                                class="bi bi-trash"></i></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="cell text-center py-5" colspan="6">
                                    <img class="d-block mx-auto mb-3" src="../assets/img/search.svg"
                                        style="max-height: 20vh">
                                    <span class="d-block">There is no data to display</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $guests->onEachSide(0)->links() }}
        </div>

    </div>
</div>
