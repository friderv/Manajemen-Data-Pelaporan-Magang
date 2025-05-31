<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama'            => 'Razian',
            'npm'             => '',
            'email'           => 'razian@gmail.com',
            'jabatan'         => 'Admin',
            'semester'        => '',
            'nama_perusahaan' => '',
            'password'        => Hash::make('123123123'),
            'is_magang'       => false,
        ]);

        User::create([
            'nama'            => 'Tono',
            'npm'             => '112233445566',
            'email'           => 'tono@gmail.com',
            'jabatan'         => 'Mahasiswa',
            'semester'        => '6',
            'nama_perusahaan' => 'Preflic',
            'password'        => Hash::make('123123123'),
            'is_magang'       => false,
        ]);
    }
}
