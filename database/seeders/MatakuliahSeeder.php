<?php

namespace Database\Seeders;

use App\Models\Matakuliah;

use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matakuliah::create([
            'kode_matakuliah' => 'BSD24',
            'nama_matakuliah' => 'Basis Data',
            'sks' => 3,
        ]);
    }
}
