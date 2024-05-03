@extends('layouts.app')
@section('content')
    <section class="hero-banner">
        <div class="row">
            <div class="col-sm-6">
                <br>
                <br>
                <div class="greeting">
                    Computer <span class="special-greet">INC</span>
                </div>
                <div class="main-title">
                    <p>Great Quality</p>
                    <p>Great Choose </p>
                </div>
                <div class="short-desc">
                    <p>Computer.INC adalah toko dan supplier terkemuka untuk semua kebutuhan perangkat keras komputer Anda. Dengan koleksi lengkap dari motherboard hingga kartu grafis, kami menyediakan solusi terbaik untuk memenuhi kebutuhan teknologi Anda. Nikmati layanan pelanggan yang prima dan harga yang kompetitif hanya di Computer.INC <br>
                    </p>

                </div>
                <a href="{{ route('item.index') }}" type="button" class="btn btn-light btn-view-data"> List Produk <i class="bi bi-arrow-right"></i></a>
            <br><br><br>
            </div>
            <br>
            <br>
            <div class="col-sm-5">
                <img src="{{ Vite::asset('resources/images/home/Computer.inc2.png') }}" class="figure-profile img-fluid" style="margin-right: auto; margin-left: 0; margin-top: 200px;" alt="figure profile">
            </div>
        </div>
        </div>
    </section>
@endsection
