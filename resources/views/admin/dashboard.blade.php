@extends('layouts.admin')

@section('title', 'Dashboard - Admin KSO')

@section('content')
    <h2 class="mb-4" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">
        Ringkasan <span class="text-gold">Sistem</span>
    </h2>

    <div class="row g-4">
        <div class="col-md-3">
    <a href="{{ route('admin.berita.index') }}" style="text-decoration: none;">
        <div class="card border-0 shadow-sm rounded-3" style="border-bottom: 4px solid #0f1d31 !important; transition: 0.3s;">
            <div class="card-body p-4 d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted mb-1">Total Berita</h6>
                    <h2 class="mb-0 fw-bold" style="color: #0f1d31;">{{ \App\Models\Berita::count() }}</h2>
                </div>
                <div class="bg-navy text-gold rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; font-size: 1.5rem;">
                    <i class="bi bi-newspaper"></i>
                </div>
            </div>
        </div>
    </a>
</div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3" style="border-bottom: 4px solid #c8a96e !important;">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted mb-1">Layanan</h6>
                        <h2 class="mb-0 fw-bold" style="color: #0f1d31;">5</h2>
                    </div>
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="background-color: #c8a96e; color: #0f1d31; width: 60px; height: 60px; font-size: 1.5rem;">
                        <i class="bi bi-tools"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection