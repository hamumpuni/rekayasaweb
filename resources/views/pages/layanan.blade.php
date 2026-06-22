@extends('layouts.app')
@section('title', 'Layanan EPCIC - KSO TIMAS-PRATIWI')

@section('content')

<!-- HEADER LAYANAN (NAVY) -->
<section class="py-3" style="background-color: #0f1d31; border-bottom: 4px solid #c8a96e;">
    <div class="container text-center py-2">
        <div class="text-uppercase mb-2" style="color: #c8a96e; font-size: 0.8rem; letter-spacing: 2px; font-weight: bold;">
            Solusi Rekayasa & Konstruksi
        </div>
        <h1 class="display-5 text-white mb-0" style="font-family: 'Playfair Display', serif; font-weight: bold;">
            Layanan Terintegrasi EPCIC
        </h1>
    </div>
</section>

<!-- BAGIAN 1: DETAIL EPCIC (CREAM) -->
<section class="py-5" style="background-color: #f9f7f2;">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">
                Tahapan Layanan Kami
            </h2>
            <div style="width: 60px; height: 3px; background-color: #c8a96e; margin: 15px auto;"></div>
            <p class="text-muted mx-auto" style="max-width: 700px; line-height: 1.8;">
                Kami mengawal setiap fase proyek dari konsep hingga siap beroperasi, memastikan kesinambungan, efisiensi biaya, dan kualitas tanpa kompromi.
            </p>
        </div>

        <!-- Baris Atas: E, P, C -->
        <div class="row g-4 mb-4 justify-content-center">
            <!-- Engineering -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 border-0 shadow-sm" style="background-color: #ffffff; border-top: 4px solid #c8a96e; border-radius: 2px;">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-vector-pen me-3" style="font-size: 2.5rem; color: #c8a96e;"></i>
                        <h4 class="mb-0" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">Engineering</h4>
                    </div>
                    <p class="text-muted small" style="line-height: 1.8; text-align: justify;">
                        Penyediaan solusi rekayasa komprehensif mencakup Studi Kelayakan, Desain Konseptual, <i>Front End Engineering Design (FEED)</i>, hingga Rekayasa Detail. Kami memanfaatkan simulasi 3D mutakhir untuk meminimalisir benturan dan risiko desain.
                    </p>
                </div>
            </div>

            <!-- Procurement -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 border-0 shadow-sm" style="background-color: #ffffff; border-top: 4px solid #c8a96e; border-radius: 2px;">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-box-seam me-3" style="font-size: 2.5rem; color: #c8a96e;"></i>
                        <h4 class="mb-0" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">Procurement</h4>
                    </div>
                    <p class="text-muted small" style="line-height: 1.8; text-align: justify;">
                        Manajemen rantai pasok global yang memastikan material dan peralatan mesin tiba tepat waktu (<i>On-Time Delivery</i>). Kami memiliki jaringan vendor bersertifikat internasional untuk menjamin spesifikasi dan kualitas material proyek Anda.
                    </p>
                </div>
            </div>

            <!-- Construction -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 border-0 shadow-sm" style="background-color: #ffffff; border-top: 4px solid #c8a96e; border-radius: 2px;">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-cone-striped me-3" style="font-size: 2.5rem; color: #c8a96e;"></i>
                        <h4 class="mb-0" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">Construction</h4>
                    </div>
                    <p class="text-muted small" style="line-height: 1.8; text-align: justify;">
                        Eksekusi pembangunan di lapangan yang mencakup pekerjaan sipil, mekanikal, fabrikasi struktur baja berat, dan elektrikal. Pengawasan ketat dilakukan oleh tenaga ahli untuk memastikan kesesuaian dengan <i>blueprint</i>.
                    </p>
                </div>
            </div>
        </div>

        <!-- Baris Bawah: I, C (Di-center) -->
        <div class="row g-4 justify-content-center">
            <!-- Installation -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 border-0 shadow-sm" style="background-color: #ffffff; border-top: 4px solid #c8a96e; border-radius: 2px;">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-tools me-3" style="font-size: 2.5rem; color: #c8a96e;"></i>
                        <h4 class="mb-0" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">Installation</h4>
                    </div>
                    <p class="text-muted small" style="line-height: 1.8; text-align: justify;">
                        Spesialisasi pemasangan infrastruktur berat dan sistem perpipaan terintegrasi. Berpengalaman menangani instalasi rumit di area <i>onshore</i> maupun perairan <i>nearshore</i> dengan dukungan armada alat berat.
                    </p>
                </div>
            </div>

            <!-- Commissioning -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 border-0 shadow-sm" style="background-color: #ffffff; border-top: 4px solid #c8a96e; border-radius: 2px;">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-clipboard-check me-3" style="font-size: 2.5rem; color: #c8a96e;"></i>
                        <h4 class="mb-0" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">Commissioning</h4>
                    </div>
                    <p class="text-muted small" style="line-height: 1.8; text-align: justify;">
                        Tahap akhir kritis berupa uji coba seluruh sistem secara menyeluruh (<i>Pre-commissioning & Commissioning</i>). Kami memastikan seluruh fasilitas berfungsi aman dan optimal sebelum serah terima (<i>Handover</i>) kepada klien.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- BAGIAN 2: SPESIALISASI KEAHLIAN (WHITE) -->
<section class="py-5" style="background-color: #f9f7f2;">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-4">
                <h2 style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">Fokus Keahlian</h2>
                <div style="width: 50px; height: 3px; background-color: #c8a96e; margin-bottom: 20px;"></div>
                <p class="text-muted" style="line-height: 1.8;">
                    Sebagai konsorsium gabungan, kami menyatukan portofolio dan kekuatan untuk menangani sektor infrastruktur paling krusial di Indonesia.
                </p>
            </div>
            <div class="col-lg-8">
                <div class="row g-4">
                    <div class="col-md-4 text-center">
                        <div class="p-4 border rounded" style="background-color: #f9f7f2; border-color: #e5e1da !important;">
                            <i class="bi bi-building text-gold mb-3 d-block" style="font-size: 2rem;"></i>
                            <h6 style="color: #0f1d31; font-weight: bold;">Fasilitas Migas</h6>
                            <p class="small text-muted mb-0">Pembangunan kilang dan stasiun kompresor gas.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="p-4 border rounded" style="background-color: #f9f7f2; border-color: #e5e1da !important;">
                            <i class="bi bi-water text-gold mb-3 d-block" style="font-size: 2rem;"></i>
                            <h6 style="color: #0f1d31; font-weight: bold;">Pipeline System</h6>
                            <p class="small text-muted mb-0">Jaringan pipa transmisi darat dan area pesisir laut.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="p-4 border rounded" style="background-color: #f9f7f2; border-color: #e5e1da !important;">
                            <i class="bi bi-lightning-charge text-gold mb-3 d-block" style="font-size: 2rem;"></i>
                            <h6 style="color: #0f1d31; font-weight: bold;">Power Plant</h6>
                            <p class="small text-muted mb-0">Infrastruktur pendukung untuk pembangkit listrik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BAGIAN 3: HSE & MANAJEMEN PROYEK (NAVY) -->
<section class="py-5" style="background-color: #f9f7f2; border-top: 1px solid rgba(200, 169, 110, 0.2);">
    <div class="container py-5">
        <div class="row g-5">
            
            <div class="col-lg-6">
                <div class="d-flex mb-3">
                    <i class="bi bi-shield-fill-check me-3 mt-1" style="font-size: 2rem; color: #c8a96e;"></i>
                    <div>
                        <h3 style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">Komitmen HSE Mutlak</h3>
                        <p style="color: #4a4a4a; line-height: 1.8; text-align: justify;">
                            Kesehatan, Keselamatan Kerja, dan Lindung Lingkungan (HSE) bukan sekadar aturan, melainkan budaya utama KSO TIMAS-PRATIWI. Kami menargetkan Zero Lost Time Injury (Zero LTI) dalam setiap jam kerja, dengan pengawasan QA/QC yang ketat.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="d-flex mb-3">
                    <i class="bi bi-graph-up-arrow me-3 mt-1" style="font-size: 2rem; color: #c8a96e;"></i>
                    <div>
                        <h3 style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">Manajemen Proyek Andal</h3>
                        <p style="color: #4a4a4a; line-height: 1.8; text-align: justify;">
                            Menyatukan dua sistem manajemen dari dua perusahaan besar memungkinkan kami melakukan pengendalian proyek yang sangat efisien. Kami menjamin transparansi, mitigasi risiko proaktif, serta penyerahan proyek tepat jadwal dan sesuai anggaran.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>  

<!-- BAGIAN 4: CALL TO ACTION (CREAM) -->
<section class="py-5" style="background-color: #f9f7f2; border-top: 4px solid #c8a96e;">
    <div class="container text-center py-5">
        <h2 style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">
            Rencanakan Proyek Anda Bersama Kami
        </h2>
        <p class="text-muted mt-3 mb-4 mx-auto" style="max-width: 600px;">
            Hubungi tim teknis kami untuk konsultasi awal, estimasi biaya, atau pengajuan tender proyek infrastruktur energi perusahaan Anda.
        </p>
        <a href="{{ url('/kontak') }}" class="btn px-5 py-3 shadow-sm text-uppercase" style="background-color: #0f1d31; color: #ffffff; font-weight: bold; letter-spacing: 1px; border-radius: 2px;">
            Hubungi Tim KSO TIMAS-PRATIWI
        </a>
    </div>
</section>

@endsection