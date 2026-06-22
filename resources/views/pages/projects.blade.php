@extends('layouts.app')
@section('title', 'My Projects')
@section('content')
<style>
    .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
        object-position: center;
    }
    .project-card {
        transition: transform 0.3s;
    }
    .project-card:hover {
        transform: translateY(-5px);
    }
</style>

<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Proyek</h2>

    <div class="row mt-2 py-3">
        @forelse ($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm project-card border-0">
                    <img src="{{ asset('bootstrap-5.3.8-dist/images/' . $project->image) }}" class="card-img-top">
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                        <p class="text-muted small mb-3">
                            <strong>Tech:</strong> {{ $project->teknologi }}
                        </p>

                        <div class="mt-auto">
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary w-100">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center py-5">
                    <h4 class="mb-0">Belum ada project yang ditambahkan.</h4>
                </div>
            </div>
        @endforelse
    </div>

    {{-- Navigasi Halaman (Pagination) --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection