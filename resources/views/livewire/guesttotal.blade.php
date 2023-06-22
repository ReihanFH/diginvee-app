<!-- TOTAL GUEST CARD -->
<div class="row g-4 mb-5">
    <div class="col-sm-4">
        <div class="app-card text-center shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <div class="stats-type">TOTAL TAMU</div>
                <h4 class="stats-figure mb-1">{{ $all_guests }}</h4>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="app-card text-center shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <div class="stats-type">SUDAH HADIR</div>
                <h4 class="stats-figure mb-1">{{ $attend_guests }}</h4>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="app-card text-center shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <div class="stats-type">BELUM HADIR</div>
                <h4 class="stats-figure mb-1">{{ $pending_guests }}</h4>
            </div>
        </div>
    </div>
</div>
