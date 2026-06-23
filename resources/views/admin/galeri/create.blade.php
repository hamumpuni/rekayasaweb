@extends('layouts.admin')

@section('content')

<div class="card border-0 shadow-sm rounded-3 p-4" style="max-width: 650px; margin: auto;">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold" style="color: #0f1d31;">
            @if(isset($galeri))
                <i class="bi bi-pencil-square me-2"></i> Edit Foto Dokumentasi
            @else
                <i class="bi bi-cloud-upload me-2"></i> Upload Foto Dokumentasi
            @endif
        </h4>
        <a href="{{ route('admin.galeri.index') }}" class="btn btn-sm btn-light border">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    {{-- Alert Error Validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Tambah / Edit --}}
    <form
        action="{{ isset($galeri) ? route('admin.galeri.update', $galeri->id) : route('admin.galeri.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @if(isset($galeri))
            @method('PUT')
        @endif

        {{-- Judul --}}
        <div class="mb-3">
            <label class="form-label fw-bold">
                Judul / Keterangan Foto <span class="text-danger">*</span>
            </label>
            <input
                type="text"
                name="judul"
                class="form-control"
                placeholder="Contoh: Kunjungan Lapangan Tim DED"
                value="{{ old('judul', $galeri->judul ?? '') }}"
                required
                autofocus
            >
        </div>

        {{-- Preview Gambar (hanya saat edit) --}}
        @if(isset($galeri) && $galeri->gambar)
            <div class="mb-3">
                <label class="form-label fw-bold">Gambar Saat Ini</label>
                <div>
                    <img
                        src="{{ asset('images/galeri/' . $galeri->gambar) }}"
                        alt="{{ $galeri->judul }}"
                        class="img-thumbnail shadow-sm"
                        style="max-height: 180px; object-fit: cover;"
                    >
                </div>
            </div>
        @endif

        {{-- Upload Gambar --}}
        <div class="mb-4">
            <label class="form-label fw-bold">
                @if(isset($galeri))
                    Ganti File Gambar <span class="text-muted fw-normal">(opsional)</span>
                @else
                    Pilih File Gambar <span class="text-danger">*</span>
                @endif
            </label>
            <input
                type="file"
                name="gambar"
                class="form-control"
                accept="image/png, image/jpeg, image/jpg"
                {{ isset($galeri) ? '' : 'required' }}
            >
            <small class="text-muted mt-1 d-block">
                Format: JPG, JPEG, PNG. Ukuran maksimal: 2MB.
                @if(isset($galeri))
                    Kosongkan jika tidak ingin mengganti gambar.
                @endif
            </small>
        </div>

        {{-- Tombol Submit --}}
        <div class="d-grid mt-4">
            <button type="submit" class="btn fw-bold py-2" style="background-color: #0f1d31; color: #c8a96e;">
                <i class="bi bi-check2-circle me-2"></i>
                @if(isset($galeri))
                    SIMPAN PERUBAHAN
                @else
                    SIMPAN FOTO KE GALERI
                @endif
            </button>
        </div>

    </form>
</div>

@endsection