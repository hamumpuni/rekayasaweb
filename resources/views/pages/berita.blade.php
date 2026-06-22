@extends('layouts.app')
@section('title', 'Berita & Artikel - KSO TIMAS-PRATIWI')

@section('content')
<style>
    body { 
        background-color: #f9f7f2; 
    }
    
    /* Styling Kartu Berita Premium */
    .card-berita { 
        background-color: #ffffff; 
        border: none; 
        border-bottom: 4px solid transparent; 
        border-radius: 2px; 
        transition: all 0.3s ease; 
        box-shadow: 0 4px 6px rgba(15, 29, 49, 0.05);
    }
    .card-berita:hover { 
        transform: translateY(-8px); 
        border-bottom: 4px solid #c8a96e; 
        box-shadow: 0 15px 25px rgba(15, 29, 49, 0.1);
    }
    
    .text-gold { color: #c8a96e !important; }
    
    /* Tombol Navy yang berubah jadi Emas saat di-hover */
    .btn-navy { 
        background-color: #0f1d31; 
        color: #ffffff; 
        border: none; 
        border-radius: 2px; 
        font-weight: bold; 
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: 0.3s; 
    }
    .btn-navy:hover { 
        background-color: #c8a96e; 
        color: #0f1d31; 
    }
</style>

<!-- HEADER BERITA (Tema Navy Konsisten dengan Halaman Lain) -->
<section class="py-3" style="background-color: #0f1d31; border-bottom: 4px solid #c8a96e;">
    <div class="container text-center py-2">
        <div class="text-uppercase mb-2" style="color: #c8a96e; font-size: 0.8rem; letter-spacing: 2px; font-weight: bold;">
            Pusat Informasi & Publikasi
        </div>
        <h1 class="display-5 text-white mb-0" style="font-family: 'Playfair Display', serif; font-weight: bold;">
            Berita <span class="text-gold">&</span> Artikel
        </h1>
    </div>
</section>

<!-- DAFTAR BERITA (Latar Cream) -->
<section class="py-5" style="background-color: #f9f7f2;">
    <div class="container py-4">
        <div class="row g-4 justify-content-center">
            
            @forelse($semua_berita as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 card-berita p-3">
                        
                        <!-- BAGIAN GAMBAR -->
                        <div style="height: 220px; overflow: hidden; background-color: #1a2f4c; border-radius: 2px;" class="d-flex align-items-center justify-content-center mb-3">
                            @if($item->gambar && file_exists(public_path('images/' . $item->gambar)))
                                <img src="{{ asset('images/' . $item->gambar) }}" style="width: 100%; height: 100%; object-fit: cover; transition: 0.5s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
                            @else
                                <div class="text-center">
                                    <i class="bi bi-newspaper mb-2 d-block" style="font-size: 3rem; color: rgba(200, 169, 110, 0.5);"></i>
                                    <span style="color: rgba(200, 169, 110, 0.5); font-size: 0.8rem; letter-spacing: 1px;">NO IMAGE</span>
                                </div>
                            @endif
                        </div>
                        
                        <!-- BAGIAN TEKS -->
                        <div class="card-body p-0 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="text-gold small fw-bold text-uppercase" style="letter-spacing: 1px;">
                                    <i class="bi bi-tag-fill me-1"></i> {{ $item->kategori }}
                                </span>
                            </div>
                            
                            <h5 class="card-title mb-3" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold; line-height: 1.4;">
                                {{ $item->judul }}
                            </h5>
                            
                            <p class="card-text text-muted small mb-4" style="line-height: 1.8;">
                                {{ Str::limit(strip_tags($item->isi), 100) }}
                            </p>
                            
                            <!-- TOMBOL -->
                            <div class="mt-auto">
                                <a href="{{ url('/berita/'.$item->id) }}" class="btn btn-navy btn-sm w-100 py-2">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            @empty
                <!-- Pesan Kosong Jika Belum Ada Berita -->
                <div class="col-12 text-center py-5">
                    <i class="bi bi-journal-x text-muted" style="font-size: 4rem; opacity: 0.5;"></i>
                    <h5 class="mt-3 text-muted">Belum ada berita atau artikel yang dipublikasikan.</h5>
                </div>
            @endforelse

        </div>
    </div>
</section>
@endsection