@extends('layouts.admin')

@section('content')
<div class="card border-0 shadow-sm rounded-3 p-4" style="max-width: 650px; margin: auto;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold" style="color: #0f1d31;"><i class="bi bi-cloud-upload me-2"></i> Upload Foto Dokumentasi</h4>
        <a href="{{ route('galeri.index') }}" class="btn btn-sm btn-light border">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-bold">Judul / Keterangan Foto <span class="text-danger">*</span></label>
            <input type="text" name="judul" class="form-control" placeholder="Contoh: Kunjungan Lapangan Tim DED" value="{{ old('judul') }}" required autofocus>
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold">Pilih File Gambar <span class="text-danger">*</span></label>
            <input type="file" name="gambar" class="form-control" accept="image/png, image/jpeg, image/jpg" required>
            <small class="text-muted mt-1 d-block">Format: JPG, JPEG, PNG. Ukuran maksimal: 2MB.</small>
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn text-gold fw-bold py-2.5" style="background-color: #0f1d31; color: #d4af37;">
                <i class="bi bi-check2-circle me-2"></i> SIMPAN FOTO KE GALERI
            </button>
        </div>
    </form>
</div>
@endsection