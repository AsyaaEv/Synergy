<?php

namespace Database\Seeders;

use App\Models\Wali;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wali::create([
            'nama' => 'Asya',
            'foto' => '',
            'mapel' => 'BE',
            'kode' => 'A',
            'guru' => 'produktif',
            'nip' => '09876868'
        ]);
        Wali::create([
            'nama' => 'Rully',
            'foto' => '',
            'mapel' => 'BE',
            'kode' => 'A',
            'guru' => 'non-produktif',
            'nip' => '09876868'
        ]);
        Wali::create([
            'nama' => 'Rifal',
            'foto' => '',
            'mapel' => 'BE',
            'kode' => 'A',
            'guru' => 'non-produktif',
            'nip' => '09876868'
        ]);
    }
}
