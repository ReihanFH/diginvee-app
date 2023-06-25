<div class="admin">

    <nav class="navbar fixed-top navbar-expand-lg bg-light shadow-lg px-md-3 px-lg-4">
        <div class="container-xl">
            <a class="navbar-brand" href="/admin"><img src="assets/img/logo-diginvee-color.png" alt=""
                    style="height: 24px"></a>
            <div class="float-end">
                <a type="button" class="btn app-btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>
                    Logout</a>
            </div>
        </div>
    </nav>
    <div class="pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <!-- HEADING -->
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="mt-5 mb-5">Guest List</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                &nbsp;
                                <a wire:click="export" class="btn app-btn-tertiary">
                                    <i class="bi bi-download"></i>
                                    Download Excel
                                </a>
                            </div>
                            <div class="col-auto">
                                <a type="button" class="btn app-btn-outline-primary" href="/check-in"
                                    target="_blank">Check
                                    In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('livewire.guesttotal')

            <div class="row my-4 justify-content-end">
                <div class="col-12">
                    <button type="button" class="btn app-btn-primary float-end my-2 ms-2" data-bs-toggle="modal"
                        data-bs-target="#guestModal">
                        <i class="bi bi-plus-lg"></i> New Guest
                    </button>

                    <button type="button" class="btn app-btn-tertiary float-end my-2 ms-2" data-bs-toggle="modal"
                        data-bs-target="#importModal">
                        <i class="bi bi-plus-lg"></i> Import Guest
                    </button>

                    <div class="float-end">
                        @include('livewire.messagemodal')
                    </div>
                </div>
            </div>

            @include('livewire.table')

        </div>
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast align-items-center text-bg-success border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('message') }}
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

    @include('livewire.logout')
    @include('livewire.guestmodal')

    <!-- ADMIN JAVASCRIPT -->
    <script type="text/javascript">
        // Toast and modal show-hide function
        window.addEventListener('show-toasts', event => {
            $('.toast').toast('show');
        })

        window.addEventListener('close-modal', event => {
            $('#guestModal').modal('hide');
            $('#updateGuestModal').modal('hide');
            $('#deleteGuestModal').modal('hide');
            $('#messageModal').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        })

        // Copy text function
        function copy(text, target) {
            setTimeout(function() {
                $('#copied_tip').remove();
            }, 800);
            $(target).append("<div class='tip' id='copied_tip'>Copied!</div>");
            var input = document.createElement('input');
            input.setAttribute('value', text);
            document.body.appendChild(input);
            input.select();
            var result = document.execCommand('copy');
            document.body.removeChild(input)
            return result;
        }

        // setInterval(() => {
        //     document.querySelector('[wire\\:click="refresh"]').click();
        // }, 1000);
    </script>
</div>
