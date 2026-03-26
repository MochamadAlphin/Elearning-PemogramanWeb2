@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary-blue: #2d2a70;
        --accent-orange: #ed6b23;
        --accent-hover: #d35400;
        --soft-gray: #f8f9fa;
    }

    /* Hero Fullscreen Setup */
    .hero-wrapper {
        position: relative;
        height: 100vh; 
        min-height: 600px;
        width: 100%;
        overflow: hidden;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(45,42,112,0.92) 0%, rgba(45,42,112,0.4) 100%);
        z-index: 2;
    }

    .hero-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 3;
        height: 100%;
        display: flex;
        align-items: center; 
    }

    /* Button Styling */
    .btn-orange-custom {
        background-color: var(--accent-orange);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-orange-custom:hover {
        background-color: var(--accent-hover);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(237, 107, 35, 0.3);
    }

    .btn-outline-light {
        padding: 12px 30px;
        border-width: 2px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    /* Card Styling */
    .card-custom {
        border: none;
        border-radius: 15px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        background: white;
    }

    .card-custom:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(45, 42, 112, 0.1) !important;
    }

    .feature-icon-box {
        width: 60px;
        height: 60px;
        background: rgba(237, 107, 35, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: var(--accent-orange);
        font-size: 1.5rem;
    }
</style>

<div class="hero-wrapper">
    <div class="hero-overlay"></div>
    <img src="{{ asset('images/background1.jpg') }}" class="hero-img" alt="Berangkatin Background">
    
    <div class="container hero-content">
        <div class="row w-100">
            <div class="col-lg-7 text-white">
                <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInUp">
                    Solusi Cerdas <br><span style="color: var(--accent-orange)">Perjalanan</span> Kereta Api
                </h1>
                <p class="fs-5 mb-5 opacity-90 leading-relaxed" style="max-width: 550px;">
                    Nikmati kemudahan reservasi tiket secara real-time. Sistem terintegrasi untuk mobilitas yang lebih efisien dan modern.
                </p>
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a href="#fitur" class="btn btn-orange-custom btn-lg shadow">Mulai Perjalanan</a>
                    <a href="#" class="btn btn-outline-light btn-lg" style="border-radius: 8px; font-weight: 600;">Pelajari Fitur</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="fitur" class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h6 class="text-uppercase fw-bold mb-2" style="color: var(--accent-orange); letter-spacing: 2px;">Layanan Kami</h6>
            <h2 class="fw-bold display-6" style="color: var(--primary-blue)">Fitur Utama Sistem</h2>
            <div style="width: 50px; height: 3px; background: var(--accent-orange); margin: 20px auto;"></div>
        </div>

        <div class="row g-4">
            @foreach($features as $feature)
            <div class="col-md-3">
                <div class="card card-custom shadow-sm h-100 p-4 text-center">
                    <div class="feature-icon-box">
                        <i class="bi bi-cpu">◈</i> 
                    </div>
                    <h5 class="fw-bold mb-3" style="color: var(--primary-blue)">{{ $feature }}</h5>
                    <p class="text-muted small mb-0">Dioptimalkan dengan teknologi terkini untuk menjamin kenyamanan transaksi Anda.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5" style="background: linear-gradient(rgba(45,42,112,0.05), rgba(45,42,112,0.05)); border-top: 1px solid #eee;">
    <div class="container text-center py-4">
        <h3 class="fw-bold mb-3" style="color: var(--primary-blue)">Siap untuk Berangkat bersama Berangkatin?</h3>
        <p class="text-muted mb-4 fs-5">Gabung dengan ribuan pengguna lainnya sekarang juga.</p>
        <button class="btn btn-orange-custom btn-lg px-5">Daftar Akun Sekarang</button>
    </div>
</section>
@endsection