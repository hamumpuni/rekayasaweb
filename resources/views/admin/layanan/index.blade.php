@extends('layouts.admin')

@section('content')
<div class="card border-0 shadow-sm rounded-3 p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold" style="color: #0f1d31;"><i class="bi bi-tools me-2"></i> Manajemen Layanan (EPCIC)</h3>
            <p class="text-muted mb-0">Kelola informasi 5 pilar keahlian utama KSO TIMAS-PRATIWI</p>
        </div>
        <a href="{{ route('layanan.create') }}" class="btn text-gold fw-bold py-2 px-3" style="background-color: #0f1d31; color: #d4af37;">
            <i class="bi bi-plus-circle me-2"></i> Tambah Layanan Baru
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
                    <th width="15%">Gambar Preview</th>
                    <th width="20%">Nama Layanan</th>
                    <th width="45%">Deskripsi Lengkap</th>
                    <th width="15%" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($layanan as $index => $item)
                    <tr>
                        <td class="text-center fw-bold">{{ $index + 1 }}</td>
                        <td>
                            @if($item->gambar)
                                <img src="{{ asset('images/layanan/' . $item->gambar) }}" alt="{{ $item->nama_layanan }}" class="rounded img-thumbnail shadow-sm" style="width: 100px; height: 65px; object-fit: cover;">
                            @else
                                <div class="p-2 bg-light text-secondary text-center rounded border" style="width: 100px; height: 65px; font-size: 0.8rem; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-image me-1"></i> Kosong
                                </div>
                            @endif
                        </td>
                        <td class="fw-bold" style="color: #0f1d31; font-size: 1.05rem;">{{ $item->nama_layanan }}</td>
                        <td class="text-muted" style="font-size: 0.95rem;">{{ $item->deskripsi }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="{{ route('layanan.edit', $item->id) }}" class="btn btn-sm btn-outline-primary fw-bold px-3" title="Edit Data">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>
                                
                                <form action="{{ route('layanan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus layanan {{ $item->nama_layanan }}?');">
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
@endsection