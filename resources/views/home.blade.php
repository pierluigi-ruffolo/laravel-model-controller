@extends('layouts.master')



@section('content')
<div class="container">
    <div class="row min-vh-100 align-items-center justify-content-center text-center">
        <div class="col-md-8">
            <span class="badge rounded-pill bg-danger mb-3 px-3 py-2 uppercase shadow-sm">Benvenuto su CineApp</span>

            <h1 class="display-1 fw-bold mb-4">Il Cinema a portata di <span class="text-danger">Click.</span></h1>

            <p class="lead text-secondary mb-5 fs-4">
                Esplora il nostro database completo di film, dalle ultime uscite ai grandi classici.
                Recensioni, trame e tutto ciò che un vero appassionato deve sapere.
            </p>

            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                <a href="{{route('movies')}}" class="btn btn-danger btn-lg px-5 py-3 fw-bold shadow">
                    Vai alla lista Film
                </a>
            </div>
            <div class="row mt-5 pt-5 border-top border-secondary border-opacity-25">
                <div class="col-4">
                    <h3 class="fw-bold mb-0">10k+</h3>
                    <p class="text-secondary small">Titoli</p>
                </div>
                <div class="col-4">
                    <h3 class="fw-bold mb-0">24/7</h3>
                    <p class="text-secondary small">Aggiornamenti</p>
                </div>
                <div class="col-4">
                    <h3 class="fw-bold mb-0">HD</h3>
                    <p class="text-secondary small">Qualità</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection