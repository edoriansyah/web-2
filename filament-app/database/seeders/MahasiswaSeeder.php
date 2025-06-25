<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Budi Santoso',
                'nim' => '1234567890',
                'email' => 'budi@gmail.com',
                'telepon' => '081234567890',
                'alamat' => 'Jl. Merdeka No. 1, Jakarta',
                'tanggal_lahir' => '2000-01-01',
                'jurusan' => 'Teknik Informatika',
                'foto' => 'budi.jpg',
                'status' => 'aktif',
                'angkatan' => '2020',
                'jenis_kelamin' => 'L',
                'agama' => 'Islam',
            ],
            [
                'nama' => 'Siti Aminah',
                'nim' => '0987654321',
                'email' => 'siti@gmail.com',
                'telepon' => '082345678901',
                'alamat' => 'Jl. Kebangsaan No. 2, Bandung',
                'tanggal_lahir' => '2001-02-02',
                'jurusan' => 'Sistem Informasi',
                'foto' => 'siti.jpg',
                'status' => 'aktif',
                'angkatan' => '2021',
                'jenis_kelamin' => 'P',
                'agama' => 'Kristen',
            ],
            [
                'nama' => 'Andi Wijaya',
                'nim' => '1122334455',
                'email' => 'andi@gmail.com',
                'telepon' => '083456789012',
                'alamat' => 'Jl. Raya No. 3, Surabaya',
                'tanggal_lahir' => '2002-03-03',
                'jurusan' => 'Teknik Elektro',
                'foto' => 'andi.jpg',
                'status' => 'tidak aktif',
                'angkatan' => '2019',
                'jenis_kelamin' => 'L',
                'agama' => 'Hindu',
            ],
        ]);
        // Tambahkan data lainnya sesuai kebutuhan
    }
}
