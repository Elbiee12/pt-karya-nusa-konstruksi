<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        // Sample Services
        DB::table('services')->insert([
            [
                'title' => 'Konstruksi Bangunan Komersial & Gedung',
                'description' => 'Pembangunan gedung bertingkat, perkantoran, dan pusat perbelanjaan dengan standar struktur terbaik dan ketepatan waktu tinggi.',
                'icon' => 'building-office-2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perencanaan Arsitektur & Struktur',
                'description' => 'Desain arsitektur modern yang memadukan fungsi, estetika minimalis, serta kalkulasi kekuatan struktur yang presisi.',
                'icon' => 'pencil-square',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Infrastruktur Sipil & Jalan',
                'description' => 'Pengerjaan fasilitas umum, jembatan, jalan raya, dan sistem drainase kawasan dengan daya tahan jangka panjang.',
                'icon' => 'truck',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Renovasi & General Contracting',
                'description' => 'Layanan pembaruan fasad, alih fungsi ruangan, dan pemeliharaan struktur bangunan dengan manajemen proyek yang efisien.',
                'icon' => 'wrench-screwdriver',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Sample Projects
        DB::table('projects')->insert([
            [
                'title' => 'Nusa Tower Office & Commerce',
                'category' => 'Gedung Komersial',
                'location' => 'Bengkulu',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1200&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Jembatan Penghubung Kawasan Industri',
                'category' => 'Infrastruktur Sipil',
                'location' => 'Bengkulu',
                'image' => 'https://images.unsplash.com/photo-1545558014-8692077e9b5c?q=80&w=1200&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Desain Fasad & Interior Hub Kreatif',
                'category' => 'Arsitektur & Interior',
                'location' => 'Bengkulu',
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1200&auto=format&fit=crop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}