<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruang')->insert([
            [
                'kode' => 'R001',
                'nama' => 'Ruang Rapat 1',
                'status' => 'Tersedia',
            ],
            [
                'kode' => 'R002',
                'nama' => 'Ruang Rapat 2',
                'status' => 'Tersedia',
            ],
            [
                'kode' => 'R003',
                'nama' => 'Ruang Rapat 3',
                'status' => 'Tersedia',
            ],
            [
                'kode' => 'R004',
                'nama' => 'Ruang Rapat 4',
                'status' => 'Tersedia',
            ],
            [
                'kode' => 'R005',
                'nama' => 'Ruang Rapat 5',
                'status' => 'Tersedia',
            ],
        ]);
    }
}
