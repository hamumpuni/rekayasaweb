@extends('layouts.admin')

@section('title', 'Kelola Berita - Admin KSO')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 style="font-family: 'Playfair Display', serif; font-weight: bold; color: #0f1d31;">
        Manajemen <span class="text-gold">Berita</span>
    </h2>
    <div>
        <a href="{{ route('admin.berita.exportPdf') }}" class="btn btn-outline-dark me-2">
            <i class="bi bi-file-earmark-pdf"></i> Export PDF
        </a>
        <a href="{{ route('admin.berita.create') }}" class="btn btn-navy">
            <i class="bi bi-plus-lg"></i> Tambah Berita
        </a>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card shadow-sm border-0" style="border-top: 4px solid #0f1d31;">
    <div class="card-body p-0 table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="bg-navy">
                <tr>
                    <th width="5%" class="py-3 px-4 text-white text-center">No</th>
                    <th width="15%" class="py-3 text-white">Gambar</th>
                    <th width="35%" class="py-3 text-white">Judul Berita</th>
                    <th width="15%" class="py-3 text-white">Kategori</th>
                    <th width="15%" class="py-3 text-white">Tanggal</th>
                    <th width="15%" class="py-3 px-4 text-center text-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($berita as $key => $item)
                    <tr>
                        <td class="px-4 text-center fw-bold">{{ $key + 1 }}</td>
                        <td>
                            @if($item->gambar)
                                <img src="{{ asset('images/' . $item->gambar) }}"
                                    style="width: 70px; height: 45px; object-fit: cover; border-radius: 4px;"
                                    class="shadow-sm">
                            @else
                                <span class="badge bg-light text-secondary border">No Image</span>
                            @endif
                        </td>
                        <td class="fw-bold" style="color: #0f1d31;">{{ $item->judul }}</td>
                        <td>
                            <span class="badge bg-secondary">{{ $item->kategori }}</span>
                        </td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                        <td class="px-4 text-center">
                            <div class="d-flex justify-content-center gap-1">
                                <a href="{{ route('admin.berita.edit', $item->id) }}"
                                    class="btn btn-sm btn-outline-primary border-0" title="Edit Berita">
                                    <i class="bi bi-pencil fs-5"></i>
                                </a>
                                <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus berita ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger border-0" title="Hapus Berita">
                                        <i class="bi bi-trash fs-5"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">Belum ada data berita.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection