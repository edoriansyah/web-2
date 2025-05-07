<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peminjaman')->insert([
            [
                'ruang_id' => 1,
                'pegawai_id' => 1,
                'tanggal' => '2025-05-07',
                'jam_mulai' => '09:00:00',
                'jam_akhir' => '11:00:00',
                'keterangan' => 'Rapat Tim',
            ],
            [
                'ruang_id' => 2,
                'pegawai_id' => 2,
                'tanggal' => '2025-05-08',
                'jam_mulai' => '13:00:00',
                'jam_akhir' => '15:00:00',
                'keterangan' => 'Presentasi Produk',
            ],
            [
                'ruang_id' => 3,
                'pegawai_id' => 3,
                'tanggal' => '2025-05-09',
                'jam_mulai' => '10:00:00',
                'jam_akhir' => '12:00:00',
                'keterangan' => 'Diskusi Proyek',
            ],
            [
                'ruang_id' => 4,
                'pegawai_id' => 4,
                'tanggal' => '2025-05-10',
                'jam_mulai' => '14:00:00',
                'jam_akhir' => '16:00:00',
                'keterangan' => 'Rapat Strategi',
            ],
            [
                'ruang_id' => 5,
                'pegawai_id' => 5,
                'tanggal' => '2025-05-11',
                'jam_mulai' => '08:00:00',
                'jam_akhir' => '10:00:00',
                'keterangan' => 'Pelatihan Karyawan',
            ],
            [
                'ruang_id' => 1,
                'pegawai_id' => 6,
                'tanggal' => '2025-05-12',
                'jam_mulai' => '11:00:00',
                'jam_akhir' => '13:00:00',
                'keterangan' => 'Rapat Evaluasi',
            ],
            [
                'ruang_id' => 2,
                'pegawai_id' => 7,
                'tanggal' => '2025-05-13',
                'jam_mulai' => '15:00:00',
                'jam_akhir' => '17:00:00',
                'keterangan' => 'Koordinasi Tim',
            ],
            [
                'ruang_id' => 3,
                'pegawai_id' => 8,
                'tanggal' => '2025-05-14',
                'jam_mulai' => '09:00:00',
                'jam_akhir' => '11:00:00',
                'keterangan' => 'Rapat Anggaran',
            ],
        ]);
    }
}
