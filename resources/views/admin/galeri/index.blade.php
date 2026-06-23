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
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>
                            <a href="{{ asset('images/galeri/' . $item->gambar) }}" target="_blank">
                                <img src="{{ asset('images/galeri/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                    class="img-thumbnail rounded shadow-sm"
                                    style="width: 120px; height: 80px; object-fit: cover;">
                            </a>
                        </td>
                        <td class="fw-bold" style="color: #0f1d31;">{{ $item->judul }}</td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="{{ route('admin.galeri.edit', $item->id) }}"
                                    class="btn btn-sm btn-outline-primary" title="Edit Data">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.galeri.destroy', $item->id) }}" method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus foto dokumentasi ini?');">
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
                            <i class="bi bi-camera fs-1 d-block mb-2 text-secondary"></i>
                            Belum ada foto dokumentasi. Silakan klik tombol <span class="fw-bold">"Tambah Foto Baru"</span> di atas.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection