<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        // Berita 1: Kolaborasi dengan Krakatau Steel
        Berita::create([
            'kategori' => 'Pipeline Project',
            'judul' => 'KSO TIMAS - Pratiwi dan PT Krakatau Steel Jalin Sinergi Strategis',
            'isi' => 'KSO Timas–Pratiwi kembali mencatatkan pencapaian penting dengan berhasil menyelesaikan proyek pipeline nearshore dan onshore yang menjadi bagian dari pengembangan infrastruktur energi nasional.
             Keberhasilan ini menunjukkan kemampuan perusahaan dalam menangani proyek berskala besar dengan tingkat kompleksitas yang tinggi.
             Proyek tersebut mencakup berbagai tahapan, mulai dari proses perencanaan teknis, pengadaan material, hingga pelaksanaan konstruksi dan pengujian akhir.
             Setiap tahapan dilakukan secara terintegrasi dengan pengawasan ketat guna memastikan kualitas pekerjaan tetap terjaga sesuai dengan standar yang telah ditetapkan.
             
             Dalam proses pengerjaannya, KSO Timas–Pratiwi menghadapi berbagai tantangan, termasuk kondisi geografis dan teknis yang beragam.
             Namun, melalui perencanaan yang matang serta koordinasi yang baik antar tim, seluruh tantangan tersebut dapat diatasi dengan efektif.
             
             Keberhasilan proyek ini memberikan dampak positif tidak hanya bagi perusahaan, tetapi juga bagi sektor energi secara keseluruhan. Infrastruktur yang telah dibangun diharapkan mampu meningkatkan distribusi energi secara lebih merata dan efisien,
             sehingga dapat mendukung kebutuhan industri maupun masyarakat.
             Pihak perusahaan menyampaikan bahwa keberhasilan ini merupakan hasil dari kerja sama tim yang solid serta dukungan berbagai pihak yang terlibat. Ke depan, 
             KSO Timas–Pratiwi berkomitmen untuk terus menghadirkan solusi terbaik dan memperkuat posisinya sebagai mitra strategis dalam pembangunan infrastruktur energi di Indonesia.',
            'penulis' => 'Admin',
            'tanggal' => '2023-05-01',
            'gambar'  => 'steel.jpg'
        ]);

        // Berita 2: Proyek Cisem Tahap II
        Berita::create([
            'kategori' => 'Energy Infrastructure',
            'judul' => 'PT Timas Suplindo - PT Pratiwi Putri Sulung Garap Proyek Pipa Gas Cisem Tahap II',
            'isi' => 'Proyek pembangunan pipa gas Cirebon–Semarang (Cisem) Tahap II resmi dimulai sebagai bagian dari upaya pemerintah dalam memperkuat ketahanan energi nasional. 
            Proyek strategis ini diharapkan dapat meningkatkan kapasitas distribusi gas bumi, 
            khususnya di wilayah Pulau Jawa yang memiliki tingkat kebutuhan energi tinggi.
            Pembangunan tahap kedua ini merupakan kelanjutan dari proyek sebelumnya yang telah memberikan kontribusi signifikan terhadap jaringan distribusi gas nasional.
             Pada tahap ini, fokus utama adalah memperluas jangkauan jaringan serta meningkatkan kapasitas aliran gas guna memenuhi kebutuhan industri dan masyarakat.
             Pemerintah menargetkan proyek ini dapat diselesaikan pada akhir tahun 2025. Dengan target tersebut, 
             berbagai pihak yang terlibat diharapkan dapat bekerja secara optimal untuk memastikan proyek berjalan sesuai jadwal tanpa mengurangi kualitas dan aspek keselamatan kerja.
             Keberadaan proyek Cisem Tahap II diyakini akan memberikan dampak besar terhadap pertumbuhan ekonomi, terutama di sektor industri yang sangat bergantung pada pasokan energi yang stabil dan efisien. 
             Selain itu, proyek ini juga menjadi bagian dari langkah strategis dalam mengurangi ketergantungan terhadap energi impor.
             Kolaborasi antara pemerintah, perusahaan, dan berbagai pemangku kepentingan menjadi kunci utama dalam keberhasilan proyek ini. Dengan dukungan tersebut, 
             pembangunan infrastruktur energi diharapkan dapat terus berjalan secara berkelanjutan dan memberikan manfaat jangka panjang bagi masyarakat luas.',
            'penulis' => 'Dunia Energi',
            'tanggal' => '2024-08-03',
            'gambar'  => 'cisem.jpg'
        ]);

        // Berita 3: Proyek Onshore Update
        Berita::create([
            'kategori' => 'Project Update',
            'judul' => 'Inovasi Teknologi dalam Pengerjaan Pipeline Nearshore dan Onshore',
            'isi' => 'JAKARTA – KSO Timas–Pratiwi terus memperkuat komitmennya dalam mendukung pembangunan infrastruktur energi nasional melalui penerapan standar keamanan tinggi dan penggunaan teknologi terkini dalam setiap proyek pengerjaan pipa gas.
            Langkah ini dilakukan untuk memastikan setiap proyek berjalan secara efisien, aman, dan memiliki daya tahan jangka panjang.
            Dalam pelaksanaannya, KSO Timas–Pratiwi menerapkan berbagai metode kerja modern yang telah disesuaikan dengan kondisi lapangan, baik untuk proyek offshore (bawah laut) maupun onshore (darat). 
            Penggunaan teknologi canggih menjadi faktor penting dalam meningkatkan akurasi pengerjaan sekaligus meminimalkan potensi risiko yang dapat terjadi selama proses konstruksi.
            Selain fokus pada aspek teknologi, perusahaan juga menempatkan keselamatan kerja sebagai prioritas utama. Setiap tahapan proyek dilaksanakan dengan mengacu pada standar keselamatan internasional, mulai dari perencanaan hingga tahap penyelesaian. 
            Hal ini dilakukan untuk memastikan seluruh tenaga kerja dapat menjalankan tugasnya dengan aman dan optimal.
            KSO Timas–Pratiwi juga terus berinvestasi dalam pengembangan sumber daya manusia dengan menghadirkan tenaga ahli profesional di bidangnya.
             Sinergi antara teknologi modern dan kompetensi tim menjadi kekuatan utama perusahaan dalam menyelesaikan berbagai proyek strategis.
            Dengan pengalaman dan rekam jejak yang dimiliki, KSO Timas–Pratiwi optimistis dapat terus berkontribusi dalam pembangunan infrastruktur energi yang berkelanjutan serta mendukung ketahanan energi nasional di masa depan.',
            'penulis' => 'Admin',
            'tanggal' => '2024-10-15',
            'gambar' => 'onshore.jpg'
        ]);
    }
}