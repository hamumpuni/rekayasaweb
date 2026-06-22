@extends('layouts.admin')

@section('content')
<div class="card border-0 shadow-sm rounded-3 p-4">
    <div class="mb-4">
        <h3 class="fw-bold" style="color: #0f1d31;"><i class="bi bi-building me-2"></i> Profil Perusahaan</h3>
        <p class="text-muted">Kelola informasi utama, visi misi, dan kontak perusahaan yang akan tampil di halaman depan website.</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Perusahaan <span class="text-danger">*</span></label>
                    <input type="text" name="nama_perusahaan" class="form-control" value="{{ $profil->nama_perusahaan ?? 'KSO TIMAS-PRATIWI' }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Tentang Kami <span class="text-danger">*</span></label>
                    <textarea name="tentang" class="form-control" rows="5" placeholder="Tuliskan sejarah singkat atau deskripsi perusahaan..." required>{{ $profil->tentang ?? '' }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Visi</label>
                        <textarea name="visi" class="form-control" rows="3" placeholder="Tuliskan visi perusahaan...">{{ $profil->visi ?? '' }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Misi</label>
                        <textarea name="misi" class="form-control" rows="3" placeholder="Tuliskan misi perusahaan...">{{ $profil->misi ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-light border-0 p-3 mb-4">
                    <label class="form-label fw-bold">Logo Perusahaan</label>
                    @if(isset($profil) && $profil->logo)
                        <div class="mb-2 text-center">
                            <img src="{{ asset('images/logo/' . $profil->logo) }}" alt="Logo" class="img-thumbnail" style="max-height: 100px;">
                        </div>
                    @endif
                    <input type="file" name="logo" class="form-control">
                    <small class="text-muted mt-1">Format: JPG/PNG, Maks 2MB</small>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $profil->email ?? '' }}" placeholder="contoh: info@timaspratiwi.com">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">No. Telepon / WA</label>
                    <input type="text" name="telepon" class="form-control" value="{{ $profil->telepon ?? '' }}" placeholder="021-xxxxxxx">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Alamat Kantor</label>
                    <textarea name="alamat" class="form-control" rows="2" placeholder="Alamat lengkap...">{{ $profil->alamat ?? '' }}</textarea>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn text-gold fw-bold py-2" style="background-color: #0f1d31; color: #d4af37;">
                        <i class="bi bi-save me-2"></i> SIMPAN PERUBAHAN
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection