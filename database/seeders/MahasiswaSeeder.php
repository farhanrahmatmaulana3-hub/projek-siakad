<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Mahasiswa::create([
            'npm' => '5520124089',
            'nidn' => '5520204077',
            'nama' => 'farham',
        ]);
    }
}
