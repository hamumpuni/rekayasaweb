@extends('layouts.app')
@section('title', 'Hubungi Kami - KSO TIMAS-PRATIWI')

@section('content')

<section class="py-3" style="background-color: #0f1d31; border-bottom: 4px solid #c8a96e;">
    <div class="container text-center py-2">
        <div class="text-uppercase mb-2" style="color: #c8a96e; font-size: 0.8rem; letter-spacing: 2px; font-weight: bold;">
            Hubungi Kami
        </div>
        <h1 class="display-5 text-white mb-0" style="font-family: 'Playfair Display', serif; font-weight: bold;">
            Mulai Proyek EPCIC Anda
        </h1>
    </div>
</section>

<section class="py-5" style="background-color: #f9f7f2;">
    <div class="container">
        <div class="row g-5">
            
            <div class="col-lg-7">
                <div class="p-4" style="background-color: #ffffff; border: 1px solid #e5e1da; border-radius: 2px;">
                    <h3 class="mb-4" style="font-family: 'Playfair Display', serif; color: #0f1d31;">Kirim Pesan</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold" style="color: #0f1d31;">Nama Lengkap</label>
                                <input type="text" class="form-control" style="border-radius: 0; border: 1px solid #ddd;" placeholder="Masukkan nama Anda">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold" style="color: #0f1d31;">Email Perusahaan</label>
                                <input type="email" class="form-control" style="border-radius: 0; border: 1px solid #ddd;" placeholder="email@perusahaan.com">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label small fw-bold" style="color: #0f1d31;">Subjek</label>
                                <input type="text" class="form-control" style="border-radius: 0; border: 1px solid #ddd;" placeholder="RFQ Proyek...">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label small fw-bold" style="color: #0f1d31;">Pesan Anda</label>
                                <textarea class="form-control" rows="5" style="border-radius: 0; border: 1px solid #ddd;" placeholder="Jelaskan kebutuhan proyek Anda..."></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn w-100 py-3 mt-2" style="background-color: #0f1d31; color: #c8a96e; font-weight: bold; letter-spacing: 1px; border-radius: 0; transition: 0.3s;">
                                    KIRIM PERMINTAAN
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="mb-4">
                    <h3 style="font-family: 'Playfair Display', serif; color: #0f1d31;">Kantor Pusat</h3>
                    <div style="width: 50px; height: 3px; background: #c8a96e; margin-bottom: 20px;"></div>
                </div>

                <div class="d-flex mb-4">
                    <i class="bi bi-geo-alt fs-3 me-3" style="color: #c8a96e;"></i>
                    <div>
                        <h6 class="fw-bold mb-1" style="color: #0f1d31;">Alamat</h6>
                        <p class="text-muted small">Jl. Raya Casablanca, Jakarta Selatan, Indonesia</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <i class="bi bi-telephone fs-3 me-3" style="color: #c8a96e;"></i>
                    <div>
                        <h6 class="fw-bold mb-1" style="color: #0f1d31;">Telepon</h6>
                        <p class="text-muted small">0895-6061-08094</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <i class="bi bi-envelope fs-3 me-3" style="color: #c8a96e;"></i>
                    <div>
                        <h6 class="fw-bold mb-1" style="color: #0f1d31;">Email Resmi</h6>
                        <p class="text-muted small">info@pps.com</p>
                    </div>
                </div>

                <hr style="border-color: #e5e1da;">

                <div class="mt-4">
                    <h6 class="fw-bold mb-3" style="color: #0f1d31;">Ikuti Media Sosial Kami</h6>
                    <div class="d-flex gap-3">
                        <a href="#" style="color: #0f1d31; font-size: 1.5rem;"><i class="bi bi-instagram"></i></a>
                        <a href="#" style="color: #0f1d31; font-size: 1.5rem;"><i class="bi bi-linkedin"></i></a>
                        <a href="#" style="color: #0f1d31; font-size: 1.5rem;"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" style="color: #0f1d31; font-size: 1.5rem;"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.307604471714!2d106.840742!3d-6.223847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c7a3c3e34b%3A0x6d113c57703c7e4c!2sJl.%20Raya%20Casablanca%2C%20Jakarta%20Selatan!5e0!3m2!1sid!2sid!4v1689254323232!5m2!1sid!2sid" 
        width="100%" height="400" style="border:0; border-top: 4px solid #c8a96e;" allowfullscreen="" loading="lazy"></iframe>
</div>

@endsection