<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita - Admin KSO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f9f7f2; color: #0f1d31; }
        .bg-navy { background-color: #0f1d31; color: #d9b3b3; }
        .text-gold { color: #c8a96e; }
        .btn-navy { background-color: #0f1d31; color: #c8a96e; font-weight: bold; }
        .btn-navy:hover { background-color: #c8a96e; color: #0f1d31; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 style="font-family: 'Playfair Display', serif; font-weight: bold;">Tambah <span class="text-gold">Berita Baru</span></h3>
                <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary">Kembali</a>
            </div>

            <div class="card shadow-sm border-0" style="border-top: 4px solid #c8a96e;">
                <div class="card-body p-4">
                    
                    <!-- Form dengan enctype untuk upload file -->
                    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Judul Berita</label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                            @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Kategori</label>
                            <select name="kategori" class="form-select @error('kategori') is-invalid @enderror">
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Project Update" {{ old('kategori') == 'Project Update' ? 'selected' : '' }}>Project Update</option>
                                <option value="Energy Infrastructure" {{ old('kategori') == 'Energy Infrastructure' ? 'selected' : '' }}>Energy Infrastructure</option>
                                <option value="Corporate News" {{ old('kategori') == 'Corporate News' ? 'selected' : '' }}>Corporate News</option>
                            </select>
                            @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Gambar Cover</label>
                            <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
                            @error('gambar') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            <div class="form-text">Format: JPG, JPEG, PNG. Maksimal 2MB.</div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Isi Berita</label>
                            <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" rows="6">{{ old('isi') }}</textarea>
                            @error('isi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <button type="submit" class="btn btn-navy w-100 py-2">SIMPAN BERITA</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>