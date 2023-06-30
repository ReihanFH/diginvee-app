<div>
    <!-- HERO -->
    <section class="cover" id="cover">

        <div class="cover-text text-center">
            <p>RESEPSI PERNIKAHAN</p>
            <h1 class="text-white">Arin &amp; Indra</h1>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
            <div class="carousel-item active" style="background-image: url(assets/img/checkin-pic-0.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(assets/img/checkin-pic-1.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/checkin-pic-2.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/checkin-pic-3.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/checkin-pic-4.jpg)"></div>
        </div>
        <nav class="navbar fixed-top bg-transparent">
            <div class="container-fluid">
                <div class="d-flex">
                    <form wire:submit.prevent="update" class="col-auto opacity-0">
                        <input wire:model="checkin" type="text" name="checkin" id="checkIn" class="form-control"
                            placeholder="Scan QR" />
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="checkInModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="checkInModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body p-5 bg-paper">
                    <p style="font-size:25px" class="m-3">SELAMAT DATANG</p>
                    <br>
                    <h2>{{ session('message') }}</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Toasts -->
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast align-items-center text-bg-danger border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <strong>Error : </strong> {{ session('error') }}
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- CHECK IN JAVASCRIPT -->
    <script type="text/javascript">
        // Auto focus to input
        var el = document.getElementById('checkIn');

        el.focus();

        el.onblur = function() {
            setTimeout(function() {
                el.focus();
            });
        };

        // Success modal show-hide
        window.addEventListener('open-modal', event => {
            $('#checkInModal').modal('show');
            setTimeout(function() {
                $('#checkInModal').modal('hide');
            }, 3000);
        });

        // Failed toast show
        const checkInToast = document.getElementById('liveToast')
        window.addEventListener('error', event => {
            const toast = new bootstrap.Toast(checkInToast)

            toast.show()
        });
    </script>
</div>
