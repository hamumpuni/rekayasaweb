@extends('layouts.admin')

@section('title', 'Edit Berita - Admin KSO')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 style="font-family: 'Playfair Display', serif; font-weight: bold; color: #0f1d31;">
        Edit <span class="text-gold">Berita</span>
    </h3>
    <a href="{{ route('admin.berita.index') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
</div>

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card shadow-sm border-0" style="border-top: 4px solid #c8a96e;">
    <div class="card-body p-4">
        <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-bold">Judul Berita</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                    value="{{ old('judul', $berita->judul) }}">
                @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Kategori</label>
                <select name="kategori" class="form-select @error('kategori') is-invalid @enderror">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Project Update" {{ old('kategori', $berita->kategori) == 'Project Update' ? 'selected' : '' }}>Project Update</option>
                    <option value="Energy Infrastructure" {{ old('kategori', $berita->kategori) == 'Energy Infrastructure' ? 'selected' : '' }}>Energy Infrastructure</option>
                    <option value="Pipeline Project" {{ old('kategori', $berita->kategori) == 'Pipeline Project' ? 'selected' : '' }}>Pipeline Project</option>
                    <option value="Corporate News" {{ old('kategori', $berita->kategori) == 'Corporate News' ? 'selected' : '' }}>Corporate News</option>
                </select>
                @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Tanggal</label>
                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror"
                    value="{{ old('tanggal', $berita->tanggal) }}">
                @error('tanggal') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Gambar Cover</label>
                @if($berita->gambar)
                    <div class="mb-2">
                        <img src="{{ asset('images/' . $berita->gambar) }}"
                            style="width: 120px; height: 80px; object-fit: cover; border-radius: 4px;"
                            class="shadow-sm">
                        <small class="text-muted d-block mt-1">Gambar saat ini</small>
                    </div>
                @endif
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror"
                    accept="image/*">
                @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
                <div class="form-text">Biarkan kosong jika tidak ingin mengganti gambar. Format: JPG, JPEG, PNG. Maksimal 2MB.</div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Isi Berita</label>
                <textarea name="isi" class="form-control @error('isi') is-invalid @enderror"
                    rows="6">{{ old('isi', $berita->isi) }}</textarea>
                @error('isi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-navy w-100 py-2">
                <i class="bi bi-check2-circle me-2"></i> UPDATE BERITA
            </button>
        </form>
    </div>
</div>
@endsection