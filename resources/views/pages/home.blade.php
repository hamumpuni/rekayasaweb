@extends('layouts.app')
@section('title', 'Beranda - KSO TIMAS-PRATIWI')

@section('content')

<style>
    /* Latar belakang krem polos yang bersih (tanpa garis) */
    .hero-section {
        background-color: #f9f7f2;
        position: relative;
        overflow: hidden;
        border-bottom: 4px solid #c8a96e;
    }

    .text-gold { color: #c8a96e !important; }
    
    .btn-gold { 
        background-color: #c8a96e; 
        color: #0f1d31; 
        font-weight: bold; 
        letter-spacing: 1px;
        border: 2px solid #c8a96e;
        border-radius: 2px;
        transition: 0.3s;
    }
    .btn-gold:hover { background-color: transparent; color: #0f1d31; border-color: #0f1d31; }

    .btn-outline-dark { 
        border: 2px solid #0f1d31; 
        color: #0f1d31; 
        font-weight: bold; 
        letter-spacing: 1px;
        border-radius: 2px;
        transition: 0.3s;
    }
    .btn-outline-dark:hover { background-color: #0f1d31; color: #ffffff; }

    .hero-img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border: 4px solid #c8a96e;
        box-shadow: -15px 15px 0px rgba(15, 29, 49, 0.1);
    }

    .floating-badge {
        position: absolute;
        bottom: -20px;
        left: -30px;
        background-color: #ffffff;
        padding: 20px 30px;
        border-left: 6px solid #c8a96e;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        z-index: 3;
    }

    @media (max-width: 991px) {
        .floating-badge { left: 10px; bottom: 10px; }
        .hero-img { height: 350px; }
    }
</style>

<!-- SECTION 1: HERO (CREAM & NAVY) -->
<section class="hero-section py-5">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-6 position-relative" style="z-index: 2;">
                <!-- Label atas -->
                <div class="d-inline-block px-3 py-1 mb-3" style="border: 1px solid #c8a96e; color: #c8a96e; font-size: 0.85rem; font-weight: bold; letter-spacing: 2px;">
                    SOLUSI TERPADU EPCIC
                </div>
                
                <h1 class="display-4 mb-4" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold; line-height: 1.2;">
                    Membangun <span class="text-gold">Infrastruktur Energi</span> yang Andal & Efisien
                </h1>
                
                <p class="text-muted mb-5" style="font-size: 1.1rem; line-height: 1.8;">
                    Mitra strategis dalam pelaksanaan proyek berskala nasional. Menyediakan layanan terintegrasi dengan standar kualitas, efisiensi, dan ketepatan waktu.
                </p>
                
                <!-- Tombol -->
                <div class="d-flex flex-wrap gap-3 mb-5">
                    <a href="{{ url('/layanan') }}" class="btn btn-gold px-4 py-3 text-uppercase">Jelajahi Layanan</a>
                    <a href="{{ url('/kontak') }}" class="btn btn-outline-dark px-4 py-3 text-uppercase">Hubungi Kami</a>
                </div>

                <div class="row g-4" style="color: #0f1d31;">
                    <div class="col-auto pe-4" style="border-right: 1px solid rgba(15, 29, 49, 0.2);">
                        <h3 class="text-gold mb-0 fw-bold">1.5M+</h3>
                        <p class="small mb-0 opacity-75">Safe Work Hours</p>
                    </div>
                    <div class="col-auto px-4">
                        <h3 class="text-gold mb-0 fw-bold">Zero</h3>
                        <p class="small mb-0 opacity-75">Lost Time Injury</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="position-relative z-2">
                    <img src="{{ asset('images/home.jpg') }}" class="hero-img" alt="Proyek Konstruksi EPCIC" onerror="this.src='https://via.placeholder.com/800x600/1a2f4c/c8a96e?text=Gambar+Proyek'">
                    
                    <div class="floating-badge">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-shield-check text-gold" style="font-size: 2.5rem;"></i>
                            <div>
                                <h6 class="mb-1" style="color: #0f1d31; font-weight: 800;">Standar Internasional</h6>
                                <p class="mb-0 small text-muted">Kualitas Tersertifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection