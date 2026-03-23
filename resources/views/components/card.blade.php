<div class="card h-100 bg-dark text-white border-secondary shadow-sm">
    <div class="card-header border-secondary bg-transparent">
        <h5 class="card-title mb-0 text-danger fw-bold">
            {{ $title }}
            </h1>
    </div>
    <div class="card-body">
        <p class="card-text mb-2">
            <span class="text-secondary small d-block">Titolo Originale:</span>
            <span class="fw-semibold">{{$originalTitle}}</span>
        </p>
        <hr class="border-secondary my-2">
        <div class="row g-0">
            <div class="col-6 border-end border-secondary">
                <span class="text-secondary small d-block">Nazionalità:</span>
                <span>{{$nationality}}</span>
            </div>
            <div class="col-6 ps-3">
                <span class="text-secondary small d-block">Uscita:</span>
                <span>{{$date}}</span>
            </div>
        </div>
    </div>
    <div class="card-footer border-secondary bg-transparent d-flex justify-content-between align-items-center">
        <span class="text-secondary small">Media Voto:</span>
        <span class="badge bg-warning text-dark fw-bold shadow-sm">
            8.8 / 10
        </span>
    </div>
</div>