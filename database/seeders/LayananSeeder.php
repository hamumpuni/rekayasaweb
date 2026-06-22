<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            // 1. ENGINEERING
            [
                'nama_layanan' => 'Engineering',
                'deskripsi'    => 'Penyediaan solusi rekayasa komprehensif mencakup Studi Kelayakan, Desain Konseptual, Front End Engineering Design (FEED), hingga Detail Engineering Design (DED) yang presisi.',
                'gambar'       => '',
            ],
            // 2. PROCUREMENT
            [
                'nama_layanan' => 'Procurement',
                'deskripsi'    => 'Manajemen rantai pasok global yang memastikan material dan peralatan mesin tiba tepat waktu (On-Time Delivery). Kami memiliki jaringan vendor terpercaya untuk menjamin standar mutu tinggi.',
                'gambar'       => '',
            ],
            // 3. CONSTRUCTION
            [
                'nama_layanan' => 'Construction',
                'deskripsi'    => 'Eksekusi pembangunan di lapangan yang mencakup pekerjaan sipil, mekanikal, fabrikasi struktur baja berat, dan elektrikal. Pengawasan ketat diterapkan untuk menjamin Zero Accident.',
                'gambar'       => '',
            ],
            // 4. INSTALLATION (Baru)
            [
                'nama_layanan' => 'Installation',
                'deskripsi'    => 'Spesialisasi pemasangan infrastruktur berat dan sistem perpipaan terintegrasi. Berpengalaman menangani instalasi rumit di area onshore maupun perairan nearshore dengan dukungan armada alat berat.',
                'gambar'       => '',
            ],
            // 5. COMMISSIONING (Baru)
            [
                'nama_layanan' => 'Commissioning',
                'deskripsi'    => 'Tahap akhir kritis berupa uji coba seluruh sistem secara menyeluruh (Pre-commissioning & Commissioning). Kami memastikan seluruh fasilitas berfungsi aman dan optimal sebelum serah terima (Handover) kepada klien.',
                'gambar'       => '',
            ],
        ];

        foreach ($services as $item) {
            Layanan::create($item);
        }
    }
}