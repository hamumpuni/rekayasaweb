@extends('layouts.app')
@section('title', $berita->judul)

@section('content')
<style>
    /* Background utama putih bersih seperti kertas */
    body {
        background-color: #ffffff;
        color: #333333;
        font-family: 'Georgia', serif; /* Font koran agar elegan */
    }

    .article-container {
        max-width: 800px;
        margin: 50px auto;
        padding: 0 20px;
    }

    /* Judul Berita Utama */
    .article-title {
        font-family: 'Arial', sans-serif; 
        font-weight: 800; 
        font-size: 2.5rem;
        line-height: 1.2;
        color: #000;
    }

    .article-image-caption {
        font-size: 0.85rem;
        color: #666;
        margin-top: 10px;
        margin-bottom: 30px;
        font-family: 'Arial', sans-serif;
        font-style: italic;
    }

    /* Gaya Lokasi/Jakarta - Bold */
    .article-location {
        font-weight: 800;
        color: #000;
        text-transform: uppercase;
    }

    /* Isi Konten Berita */
    .article-content {
        font-size: 1.15rem;
        line-height: 1.8;
        text-align: justify;
    }

    /* Box "Baca Juga" dengan bar vertikal Navy */
    .baca-juga-box {
        border-left: 5px solid #0f1d31; 
        padding-left: 20px;
        margin: 35px 0;
        background-color: #f9f9f9;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .baca-juga-title {
        font-weight: bold;
        font-family: 'Arial', sans-serif;
        font-size: 0.9rem;
        color: #333;
        margin-bottom: 5px;
        display: block;
    }

    .baca-juga-link {
        color: #0044cc;
        text-decoration: none;
        font-weight: bold;
        font-family: 'Arial', sans-serif;
        font-size: 1.1rem;
    }

    .baca-juga-link:hover {
        text-decoration: underline;
    }

    .quote-style {
        font-style: italic;
        color: #555;
        margin: 30px 0;
        padding: 0 20px;
        border-left: 2px solid #ddd;
        display: block;
    }
</style>

<div class="article-container">
    <!-- Judul Berita -->
    <h1 class="article-title mb-4">
        {{ $berita->judul }}
    </h1>

    <!-- Image Handling -->
    <div class="article-image-wrapper">
    @if($berita->gambar && file_exists(public_path('images/' . $berita->gambar)))
        {{-- Membaca langsung dari folder public/images/ --}}
        <img src="{{ asset('images/' . $berita->gambar) }}" class="img-fluid w-100" alt="{{ $berita->judul }}">
    @else
        {{-- Tampilan Navy jika file tidak ditemukan --}}
        <div style="background-color: #0f1d31; height: 400px; width: 100%; display: flex; align-items: center; justify-content: center;">
             <div class="text-center">
                <i class="bi bi-newspaper text-accent" style="font-size: 4rem; color: #c8a96e;"></i>
                <p class="text-white mt-2 small" style="opacity: 0.5;">Dokumentasi Proyek KSO Timas-Pratiwi</p>
             </div>
        </div>
    @endif
</div>
        <p class="article-image-caption">
            Kategori: {{ $berita->kategori }} | Update: {{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}
        </p>
    </div>

    <!-- Konten Artikel -->
    <div class="article-content">
        <p>
            <span class="article-location">Jakarta</span> - 
            {!! nl2br(e($berita->isi)) !!}
        </p>

        <!-- Elemen Baca Juga sesuai permintaan -->
        <div class="baca-juga-box">
            <span class="baca-juga-title">Baca juga:</span>
            <a href="{{ url('/berita') }}" class="baca-juga-link">
                KSO TIMAS-PRATIWI Perkuat Infrastruktur Energi Melalui Proyek Pipa Strategis
            </a>
        </div>

        <p class="quote-style">
            "Keberhasilan pengerjaan proyek ini merupakan bukti sinergi yang kuat antara teknologi tinggi dan tenaga ahli profesional kami," ujar perwakilan teknis KSO Timas-Pratiwi.
        </p>
    </div>
    
    <!-- Navigasi Bawah -->
    <div class="mt-5 border-top pt-4 mb-5">
        <a href="{{ url('/berita') }}" class="btn btn-dark btn-sm rounded-0 px-4">
            <i class="bi bi-arrow-left me-2"></i> KEMBALI KE BERITA
        </a>
    </div>
</div>
@endsection 