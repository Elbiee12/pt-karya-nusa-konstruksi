<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Reset tabel users terlebih dahulu
        DB::table('users')->where('email', 'admin@karyanusa.co.id')->delete();

        // Buat Akun Admin Resmi
        DB::table('users')->insert([
            'name' => 'Admin Karya Nusa',
            'email' => 'admin@karyanusa.co.id',
            'password' => Hash::make('password123'), // Password yang akan digunakan
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}