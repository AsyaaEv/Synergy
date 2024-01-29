<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'nama' => 'X PPLG 1',
            'angkatan' => '2023',
            'cover' => '',
            'wali' => 'Asya',
            'prestasi' => '',
            'memories' => '',
            'slogan' => 'SOLIDDDD',
        ]);
    }
}
