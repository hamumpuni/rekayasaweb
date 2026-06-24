@extends('layouts.admin')

@section('content')

{{-- ============================= --}}
{{-- CARD UTAMA --}}
{{-- ============================= --}}
<div class="card border-0 shadow-sm rounded-3 p-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold" style="color: #0f1d31;">
                <i class="bi bi-tools me-2"></i> Manajemen Layanan (EPCIC)
            </h3>
            <p class="text-muted mb-0">Kelola informasi 5 pilar keahlian utama KSO TIMAS-PRATIWI</p>
        </div>

        <button
            type="button"
            class="btn fw-bold py-2 px-3 text-white"
            style="background-color: #0f1d31;"
            data-bs-toggle="modal"
            data-bs-target="#modalTambahLayanan"
        >
            <i class="bi bi-plus-circle me-2"></i> Tambah Layanan Baru
        </button>
    </div>

    {{-- Alert Sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tabel Data Layanan --}}
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th width="5%"  class="text-center">No</th>
                    <th width="15%">Gambar Preview</th>
                    <th width="20%">Nama Layanan</th>
                    <th width="45%">Deskripsi Lengkap</th>
                    <th width="15%" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($layanan as $index => $item)
                    <tr>
                        {{-- Nomor --}}
                        <td class="text-center fw-bold">{{ $index + 1 }}</td>

                        {{-- Gambar --}}
                        <td>
                            @if($item->gambar)
                                <img
                                    src="{{ asset('images/layanan/' . $item->gambar) }}"
                                    alt="{{ $item->nama_layanan }}"
                                    class="rounded img-thumbnail shadow-sm"
                                    style="width: 100px; height: 65px; object-fit: cover;"
                                >
                            @else
                                <div
                                    class="p-2 bg-light text-secondary text-center rounded border"
                                    style="width: 100px; height: 65px; font-size: 0.8rem; display: flex; align-items: center; justify-content: center;"
                                >
                                    <i class="bi bi-image me-1"></i> Kosong
                                </div>
                            @endif
                        </td>

                        {{-- Nama Layanan --}}
                        <td class="fw-bold" style="color: #0f1d31; font-size: 1.05rem;">
                            {{ $item->nama_layanan }}
                        </td>

                        {{-- Deskripsi --}}
                        <td class="text-muted" style="font-size: 0.95rem;">
                            {{ $item->deskripsi }}
                        </td>

                        {{-- Aksi --}}
                        <td class="text-center">
                            <div class="btn-group" role="group">

                                {{-- Tombol Edit (data-* attribute, aman dari konflik quote) --}}
                                <button
                                    type="button"
                                    class="btn btn-sm btn-outline-primary fw-bold px-3 btn-edit-layanan"
                                    title="Edit Data"
                                    data-id="{{ $item->id }}"
                                    data-nama="{{ $item->nama_layanan }}"
                                    data-deskripsi="{{ $item->deskripsi }}"
                                    data-gambar="{{ $item->gambar ? asset('images/layanan/' . $item->gambar) : '' }}"
                                >
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </button>

                                {{-- Tombol Hapus --}}
                                <form
                                    action="{{ route('admin.layanan.destroy', $item->id) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus layanan ini?');"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus Data">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2 text-secondary"></i>
                            Belum ada data Layanan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
{{-- END CARD UTAMA --}}


{{-- ============================= --}}
{{-- MODAL TAMBAH LAYANAN --}}
{{-- ============================= --}}
<div class="modal fade" id="modalTambahLayanan" tabindex="-1" aria-labelledby="modalTambahLayananLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLayananLabel">
                    <i class="bi bi-plus-circle-fill me-2"></i> Tambah Layanan Baru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('admin.layanan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Layanan</label>
                        <input type="text" class="form-control" name="nama_layanan" required placeholder="Masukkan nama layanan...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi Lengkap</label>
                        <textarea class="form-control" name="deskripsi" rows="4" required placeholder="Tuliskan penjelasan detail mengenai layanan..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Gambar Preview / Komponen</label>
                        <input class="form-control" type="file" name="gambar" accept="image/*" required>
                        <small class="text-muted">Format: jpeg, png, jpg. Maksimal 2MB.</small>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white" style="background-color: #0f1d31;">Simpan Layanan</button>
                </div>
            </form>

        </div>
    </div>
</div>
{{-- END MODAL TAMBAH LAYANAN --}}


{{-- ============================= --}}
{{-- MODAL EDIT LAYANAN --}}
{{-- ============================= --}}
<div class="modal fade" id="modalEditLayanan" tabindex="-1" aria-labelledby="modalEditLayananLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalEditLayananLabel">
                    <i class="bi bi-pencil-square me-2"></i> Edit Layanan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="formEditLayanan" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Layanan</label>
                        <input type="text" class="form-control" id="edit_nama_layanan" name="nama_layanan" required placeholder="Masukkan nama layanan...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Deskripsi Lengkap</label>
                        <textarea class="form-control" id="edit_deskripsi" name="deskripsi" rows="4" required placeholder="Tuliskan penjelasan detail mengenai layanan..."></textarea>
                    </div>

                    <div class="mb-3" id="edit_preview_wrapper">
                        <label class="form-label fw-bold">Gambar Saat Ini</label>
                        <div>
                            <img id="edit_preview_gambar" src="" alt="Preview" class="rounded img-thumbnail shadow-sm" style="max-height: 150px; object-fit: cover;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Ganti Gambar <span class="text-muted fw-normal">(opsional)</span></label>
                        <input class="form-control" type="file" name="gambar" accept="image/*">
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
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
{{-- END MODAL EDIT LAYANAN --}}


{{-- ============================= --}}
{{-- SCRIPT --}}
{{-- ============================= --}}
<script>
    document.querySelectorAll('.btn-edit-layanan').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var id        = this.dataset.id;
            var nama      = this.dataset.nama;
            var deskripsi = this.dataset.deskripsi;
            var gambarUrl = this.dataset.gambar;

            // Set action form
            document.getElementById('formEditLayanan').action = '/admin/layanan/' + id;

            // Isi field
            document.getElementById('edit_nama_layanan').value = nama;
            document.getElementById('edit_deskripsi').value    = deskripsi;

            // Preview gambar
            var preview = document.getElementById('edit_preview_gambar');
            var wrapper = document.getElementById('edit_preview_wrapper');
            if (gambarUrl) {
                preview.src           = gambarUrl;
                wrapper.style.display = 'block';
            } else {
                wrapper.style.display = 'none';
            }

            // Buka modal
            new bootstrap.Modal(document.getElementById('modalEditLayanan')).show();
        });
    });
</script>

@endsection