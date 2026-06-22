<?php

namespace Database\Seeders;

// Pastikan untuk memanggil model User dan class seeder lainnya
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   public function run(): void
    {
        // 1. Ciptakan Akun Admin Abadi
        User::updateOrCreate(
            ['email' => 'admin@timas.com'],
            ['name'     => 'Administrator',
             'password' => bcrypt('password123'),
            ]
        );

        // INI YANG PALING PENTING: Memanggil BeritaSeeder Anda!
        $this->call([
            LayananSeeder::class,
            BeritaSeeder::class,
        ]);
    }
}