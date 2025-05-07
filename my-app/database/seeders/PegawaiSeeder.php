<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            [
                'nip' => '1234567890',
                'nama' => 'John Doe',
                'unit_kerja_id' => 1,
            ],
            [
                'nip' => '0987654321',
                'nama' => 'Jane Smith',
                'unit_kerja_id' => 2,
            ],
            [
                'nip' => '1122334455',
                'nama' => 'Alice Johnson',
                'unit_kerja_id' => 3,
            ],
            [
                'nip' => '5566778899',
                'nama' => 'Bob Brown',
                'unit_kerja_id' => 4,
            ],
            [
                'nip' => '2233445566',
                'nama' => 'Charlie Davis',
                'unit_kerja_id' => 5,
            ],
            [
                'nip' => '6677889900',
                'nama' => 'Diana Evans',
                'unit_kerja_id' => 1,
            ],
            [
                'nip' => '3344556677',
                'nama' => 'Ethan Green',
                'unit_kerja_id' => 2,
            ],
            [
                'nip' => '8899001122',
                'nama' => 'Fiona Harris',
                'unit_kerja_id' => 3,
            ],
            [
                'nip' => '4455667788',
                'nama' => 'George King',
                'unit_kerja_id' => 4,
            ],
            [
                'nip' => '7788990011',
                'nama' => 'Hannah Lee',
                'unit_kerja_id' => 5,
            ],
        ]);
    }
}
