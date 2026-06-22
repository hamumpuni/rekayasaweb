@extends('layouts.app')
@section('title', 'Tentang Kami - KSO TIMAS-PRATIWI')

@section('content')

<!-- HEADER TENTANG KAMI -->
<section class="py-3" style="background-color: #0f1d31; border-bottom: 4px solid #c8a96e;">
    <div class="container text-center py-2">
        <div class="text-uppercase mb-2" style="color: #c8a96e; font-size: 0.8rem; letter-spacing: 2px; font-weight: bold;">
            Profil Perusahaan
        </div>
        <h1 class="display-5 text-white mb-0" style="font-family: 'Playfair Display', serif; font-weight: bold;">
            Tentang Kami
        </h1>
    </div>
</section>

<!-- KONTEN UTAMA (Satu Background Krem agar tidak belang-belang) -->
<section class="py-5" style="background-color: #f9f7f2;">
    <div class="container py-4">
        
        <!-- BAGIAN 1: SEJARAH PERUSAHAAN -->
        <div class="row align-items-center g-5 mb-5 pb-lg-4">
            
            <div class="col-lg-6">
                <div class="text-uppercase mb-2" style="color: #c8a96e; font-size: 0.85rem; letter-spacing: 2px; font-weight: bold;">
                    Sejarah Konsorsium
                </div>
                <h2 class="mb-4" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold; line-height: 1.3;">
                    Sinergi Strategis Dua Kekuatan Industri
                </h2>
                
                <p class="text-muted" style="line-height: 1.8; text-align: justify;">
                    <strong>KSO TIMAS-PRATIWI</strong> merupakan konsorsium strategis yang lahir dari gabungan dua perusahaan konstruksi dan rekayasa tangguh, yakni <strong>PT Timas Suplindo</strong> dan <strong>PT Pratiwi Putri Sulung</strong>. Sinergi ini dibentuk secara khusus untuk menggabungkan keahlian teknik, sumber daya, dan pengalaman panjang kedua entitas dalam mengeksekusi proyek-proyek infrastruktur berskala besar secara bersama-sama.
                </p>
                <p class="text-muted" style="line-height: 1.8; text-align: justify;">
                    Memasuki tahun ke-<strong>3 berjalan</strong>, konsorsium ini telah membuktikan komitmen dan kualitas kinerjanya dengan sukses memegang <strong>2 proyek strategis nasional</strong>. Berbekal pencapaian tersebut, kami terus berdedikasi untuk menghadirkan solusi rekayasa dan pelaksanaan proyek EPCIC yang inovatif, aman, efisien biaya, dan tepat waktu bagi kemajuan industri energi di Indonesia.
                </p>
            </div>

            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="{{ asset('images/LOGO KSO.png') }}" alt="Kantor KSO Timas Pratiwi" class="img-fluid w-100 shadow-lg" style="border: 4px solid #ffffff; border-bottom: 8px solid #c8a96e; object-fit: cover;">
                </div>
            </div>

        </div>

        <!-- BAGIAN 2: VISI & MISI (Dibungkus Kotak Navy) -->
        <div class="row g-4 mt-2">
            
            <!-- Kotak Visi -->
            <div class="col-md-6">
                <div class="card h-100 text-center p-5 shadow-lg" style="border: none; border-top: 4px solid #c8a96e; border-radius: 0; background-color: #0f1d31; transition: 0.3s;" onmouseover="this.style.transform='translateY(-5px)';" onmouseout="this.style.transform='translateY(0)';">
                    <div class="mb-4">
                        <i class="bi bi-eye-fill" style="font-size: 3.5rem; color: #c8a96e;"></i>
                    </div>
                    <h3 class="mb-4 text-white" style="font-family: 'Playfair Display', serif; font-weight: bold;">Visi Kami</h3>
                    <p class="text-light" style="line-height: 1.8; font-size: 1.05rem; opacity: 0.85;">
                        Menjadi perusahaan konsorsium EPCIC terkemuka di Indonesia yang unggul dalam kualitas, keselamatan, dan ketepatan waktu dalam setiap proyek.
                    </p>
                </div>
            </div>
            
            <!-- Kotak Misi -->
            <div class="col-md-6">
                <div class="card h-100 p-5 shadow-lg" style="border: none; border-top: 4px solid #c8a96e; border-radius: 0; background-color: #0f1d31; transition: 0.3s;" onmouseover="this.style.transform='translateY(-5px)';" onmouseout="this.style.transform='translateY(0)';">
                    <div class="text-center mb-4">
                        <i class="bi bi-rocket-takeoff-fill" style="font-size: 3.5rem; color: #c8a96e;"></i>
                    </div>
                    <h3 class="text-center mb-4 text-white" style="font-family: 'Playfair Display', serif; font-weight: bold;">Misi Kami</h3>
                    <ul class="text-light" style="line-height: 1.8; padding-left: 1.5rem; opacity: 0.85;">
                        <li class="mb-2">Menyediakan layanan EPCIC terintegrasi mulai dari <i>engineering</i> hingga <i>commissioning</i> dengan standar internasional.</li>
                        <li class="mb-2">Menjamin kualitas dan keselamatan kerja (HSE) sebagai prioritas mutlak dalam setiap pelaksanaan proyek.</li>
                        <li class="mb-2">Menyelesaikan proyek secara tepat waktu dan efisien biaya untuk memberikan nilai terbaik bagi klien.</li>
                        <li>Mengembangkan sinergi sumber daya manusia yang kompeten dan profesional di bidang konstruksi.</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection