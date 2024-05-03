@extends('layouts.app')
@section('content')
    <section class="hero-banner">
        <div class="row">
            <div class="col-5 mt-5">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ Vite::asset('resources/images/profile/Foto Diri.jpeg') }}" class="rounded img-fluid figure-profile-about" alt="figure profile about">
                    </div>
                </div>
            </div>
            <div class="col-7 custom-margin-left">
                <div class="dash distance-dash-profile"></div>
                <div class="greeting">
                        TENTANG <span class="special-greet">AKU </span>
                </div>
                <div class="title-profile">
                    <p> REY SEPTIAN <br>
                        1204220091
                    </p>
                </div>
                <div class="desc-profile">
                    <p class="fw-semibold">Sistem Informasi <span class="desc-profile1">Telkom University Surabaya</p>
                    <p class="fw-semibold"> Saya adalah Mahasiswa Telkom University Surabaya studi Sistem Informasi semester 4</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
@push('js-libraries')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush
@push('js')
    @vite('resources/js/charts.js')
@endpush
