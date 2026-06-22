@extends('layouts.admin')
@section('content')
<div class="card p-4">
    <h3>Edit Berita</h3>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}">
        </div>
        <div class="mb-3">
            <label>Gambar (Biarkan jika tidak ingin ganti)</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button type="submit" class="btn btn-navy">UPDATE DATA</button>
    </form>
</div>
@endsection