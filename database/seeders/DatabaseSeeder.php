<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Reset/Kosongkan Tabel Terlebih Dahulu
        DB::table('services')->truncate();
        DB::table('projects')->truncate();

        // 2. Data Layanan Utama PT Karya Nusa Konstruksi
        DB::table('services')->insert([
            [
                'title' => 'Konstruksi Gedung & Commercial',
                'description' => 'Pembangunan struktur gedung bertingkat, area perkantoran, dan pusat perbelanjaan dengan standar keselamatan (K3) serta presisi rekayasa tinggi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Perencanaan Arsitektur & BIM',
                'description' => 'Perancangan gambar kerja 3D, konsep fasad modern, dan pemodelan Building Information Modeling (BIM) untuk akurasi estimasi material.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Infrastruktur & Rekayasa Sipil',
                'description' => 'Pekerjaan tanah, perkerasan jalan, drainase utama, serta pembuatan fondasi berat untuk kebutuhan kawasan industri dan publik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Renovasi & Fit-Out Interior',
                'description' => 'Transformasi arsitektur interior, renovasi fasad eksterior, dan penataan ulang tata ruang komersial maupun hunian eksklusif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // 3. Data Portofolio Proyek Utama
        DB::table('projects')->insert([
            [
                'title' => 'Nusa Tower Office & Commercial',
                'category' => 'Gedung Komersial',
                'location' => 'Jakarta Selatan, DKI Jakarta',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Karya Modern Minimalist Residence',
                'category' => 'Hunian Eksklusif',
                'location' => 'Bandung, Jawa Barat',
                'image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=800&q=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bengkulu Coastal Bridge & Highway',
                'category' => 'Infrastruktur Sipil',
                'location' => 'Kota Bengkulu, Bengkulu',
                'image' => 'https://images.unsplash.com/photo-1545558014-8692077e9b5c?auto=format&fit=crop&w=800&q=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nusa Horizon Resort & Villa Fasad',
                'category' => 'Arsitektur Hospitality',
                'location' => 'Badung, Bali',
                'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Central Hub Logistics Warehouse',
                'category' => 'Kawasan Industri',
                'location' => 'Surabaya, Jawa Timur',
                'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}