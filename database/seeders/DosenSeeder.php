<?php

namespace Database\Seeders;

use App\Models\Dosen;

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create([
            'nidn' => '5520204077',
            'nama' => 'Budi Santoso ST',
        ]);
    }
}
