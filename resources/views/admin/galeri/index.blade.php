@extends('layouts.admin')

@section('content')
<div class="card border-0 shadow-sm rounded-3 p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold" style="color: #0f1d31;">
                <i class="bi bi-images me-2"></i> Galeri Dokumentasi
            </h3>
            <p class="text-muted mb-0">Kelola arsip foto proyek, kegiatan lapangan, dan sertifikasi perusahaan</p>
        </div>
        <a href="{{ route('admin.galeri.create') }}" class="btn fw-bold py-2 px-3" style="background-color: #0f1d31; color: #c8a96e;">
            <i class="bi bi-plus-circle me-2"></i> Tambah Foto Baru
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th width="5%" class="text-center">No</th>
                    <th width="20%">Preview Foto</th>
                    <th width="45%">Judul / Keterangan</th>
                    <th width="15%">Tanggal Upload</th>
                    <th width="15%" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($galeri as $index => $item)
                    <tr>
                        <td class="text-center fw-bold">{{ $index + 1 }}</td>
                        <td>
                            @if($item->gambar)
                                <a href="{{ asset('images/galeri/' . $item->gambar) }}" target="_blank">
                                    <img src="{{ asset('images/galeri/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-thumbnail rounded shadow-sm" style="width: 120px; height: 80px; object-fit: cover;">
                                </a>
                            @else
                                <div class="p-2 bg-light text-secondary text-center rounded border" style="width: 120px; height: 80px; font-size: 0.8rem; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-image me-1"></i> Kosong
                                </div>
                            @endif
                        </td>
                        <td class="fw-bold" style="color: #0f1d31;">{{ $item->judul }}</td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                {{-- PERBAIKAN: Mengubah link edit menjadi pemicu Modal dengan membawa data asset --}}
                                <button type="button" 
                                        class="btn btn-sm btn-outline-primary fw-bold btn-edit-galeri" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modalEditGaleri"
                                        data-id="{{ $item->id }}"
                                        data-judul="{{ $item->judul }}"
                                        data-gambar="{{ $item->gambar ? asset('images/galeri/' . $item->gambar) : '' }}"
                                        title="Edit Data">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </button>

                                <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus foto dokumentasi ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus Data">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            <i class="bi bi-camera fs-1 d-block mb-2 text-secondary"></i> Belum ada foto dokumentasi. Silakan klik tombol <span class="fw-bold">"Tambah Foto Baru"</span> di atas.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

{{-- ============================= --}}
{{-- MODAL EDIT GALERI --}}
{{-- ============================= --}}
<div class="modal fade" id="modalEditGaleri" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" style="color: #0f1d31;"><i class="bi bi-pencil-square me-2"></i> Edit Foto Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formEditGaleri" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit_judul" class="form-label fw-bold">Judul / Keterangan Foto</label>
                        <input type="text" class="form-control" id="edit_judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold d-block">Foto Saat Ini</label>
                        <img id="edit_preview_gambar" src="" alt="Preview" class="img-thumbnail mb-2 shadow-sm d-none" style="max-width: 180px; max-height: 120px; object-fit: cover;">
                        <p id="edit_no_gambar" class="text-muted small d-none">Belum ada gambar aktual.</p>
                        
                        <label for="edit_gambar" class="form-label fw-bold d-block mt-3">Ganti Foto Baru</label>
                        <input class="form-control" type="file" id="edit_gambar" name="gambar" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengganti file gambar lama.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white" style="background-color: #0f1d31;">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- SCRIPT JAVASCRIPT TRANSFER DATA --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.btn-edit-galeri');
        const formEdit = document.getElementById('formEditGaleri');
        const inputJudul = document.getElementById('edit_judul');
        const previewGambar = document.getElementById('edit_preview_gambar');
        const textNoGambar = document.getElementById('edit_no_gambar');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                const judul = this.getAttribute('data-judul');
                const gambarUrl = this.getAttribute('data-gambar');

                // Set rute update action secara dinamis menuju GaleriController@update
                formEdit.action = `/admin/galeri/${id}`;

                // Set nilai text input judul
                inputJudul.value = judul;

                // Logika menampilkan preview foto lama
                if (gambarUrl) {
                    previewGambar.src = gambarUrl;
                    previewGambar.classList.remove('d-none');
                    textNoGambar.classList.add('d-none');
                } else {
                    previewGambar.src = '';
                    previewGambar.classList.add('d-none');
                    textNoGambar.classList.remove('d-none');
                }
            });
        });
    });
</script>
@endsection