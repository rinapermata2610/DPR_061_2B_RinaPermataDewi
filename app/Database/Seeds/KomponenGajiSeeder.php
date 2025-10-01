<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KomponenGajiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Gaji Pokok
            ['id_komponen'=>201,'nama_komponen'=>'Gaji Pokok Ketua','kategori'=>'Gaji Pokok','jabatan'=>'Ketua','nominal'=>5040000,'satuan'=>'Bulan'],
            ['id_komponen'=>202,'nama_komponen'=>'Gaji Pokok Wakil Ketua','kategori'=>'Gaji Pokok','jabatan'=>'Wakil Ketua','nominal'=>4620000,'satuan'=>'Bulan'],
            ['id_komponen'=>203,'nama_komponen'=>'Gaji Pokok Anggota','kategori'=>'Gaji Pokok','jabatan'=>'Anggota','nominal'=>4200000,'satuan'=>'Bulan'],

            // Tunjangan Melekat
            ['id_komponen'=>204,'nama_komponen'=>'Tunjangan Istri/Suami','kategori'=>'Tunjangan Melekat','jabatan'=>'Semua','nominal'=>420000,'satuan'=>'Bulan'],
            ['id_komponen'=>205,'nama_komponen'=>'Tunjangan Anak','kategori'=>'Tunjangan Melekat','jabatan'=>'Semua','nominal'=>168000,'satuan'=>'Bulan'],
            ['id_komponen'=>206,'nama_komponen'=>'Uang Sidang/Paket','kategori'=>'Tunjangan Melekat','jabatan'=>'Semua','nominal'=>2000000,'satuan'=>'Bulan'],
            ['id_komponen'=>207,'nama_komponen'=>'Tunjangan Jabatan Ketua','kategori'=>'Tunjangan Melekat','jabatan'=>'Ketua','nominal'=>18900000,'satuan'=>'Bulan'],
            ['id_komponen'=>208,'nama_komponen'=>'Tunjangan Jabatan Wakil Ketua','kategori'=>'Tunjangan Melekat','jabatan'=>'Wakil Ketua','nominal'=>15600000,'satuan'=>'Bulan'],
            ['id_komponen'=>209,'nama_komponen'=>'Tunjangan Jabatan Anggota','kategori'=>'Tunjangan Melekat','jabatan'=>'Anggota','nominal'=>9700000,'satuan'=>'Bulan'],
            ['id_komponen'=>210,'nama_komponen'=>'Tunjangan Beras','kategori'=>'Tunjangan Melekat','jabatan'=>'Semua','nominal'=>12000000,'satuan'=>'Bulan'],

            // Tunjangan Lain
            ['id_komponen'=>213,'nama_komponen'=>'Tunjangan Kehormatan Ketua','kategori'=>'Tunjangan Lain','jabatan'=>'Ketua','nominal'=>6690000,'satuan'=>'Bulan'],
            ['id_komponen'=>214,'nama_komponen'=>'Tunjangan Kehormatan Wakil Ketua','kategori'=>'Tunjangan Lain','jabatan'=>'Wakil Ketua','nominal'=>6450000,'satuan'=>'Bulan'],
            ['id_komponen'=>215,'nama_komponen'=>'Tunjangan Kehormatan Anggota','kategori'=>'Tunjangan Lain','jabatan'=>'Anggota','nominal'=>5580000,'satuan'=>'Bulan'],
            ['id_komponen'=>216,'nama_komponen'=>'Tunjangan Komunikasi Ketua','kategori'=>'Tunjangan Lain','jabatan'=>'Ketua','nominal'=>16468000,'satuan'=>'Bulan'],
            ['id_komponen'=>217,'nama_komponen'=>'Tunjangan Komunikasi Wakil Ketua','kategori'=>'Tunjangan Lain','jabatan'=>'Wakil Ketua','nominal'=>16009000,'satuan'=>'Bulan'],
            ['id_komponen'=>218,'nama_komponen'=>'Tunjangan Komunikasi Anggota','kategori'=>'Tunjangan Lain','jabatan'=>'Anggota','nominal'=>15554000,'satuan'=>'Bulan'],
            ['id_komponen'=>219,'nama_komponen'=>'Tunjangan Fungsi Ketua','kategori'=>'Tunjangan Lain','jabatan'=>'Ketua','nominal'=>5250000,'satuan'=>'Bulan'],
            ['id_komponen'=>220,'nama_komponen'=>'Tunjangan Fungsi Wakil Ketua','kategori'=>'Tunjangan Lain','jabatan'=>'Wakil Ketua','nominal'=>4500000,'satuan'=>'Bulan'],
            ['id_komponen'=>221,'nama_komponen'=>'Tunjangan Fungsi Anggota','kategori'=>'Tunjangan Lain','jabatan'=>'Anggota','nominal'=>3750000,'satuan'=>'Bulan'],
            ['id_komponen'=>222,'nama_komponen'=>'Bantuan Listrik & Telepon','kategori'=>'Tunjangan Lain','jabatan'=>'Semua','nominal'=>7700000,'satuan'=>'Bulan'],
            ['id_komponen'=>223,'nama_komponen'=>'Asisten Anggota','kategori'=>'Tunjangan Lain','jabatan'=>'Semua','nominal'=>2250000,'satuan'=>'Bulan'],
            ['id_komponen'=>224,'nama_komponen'=>'Tunjangan Perumahan','kategori'=>'Tunjangan Lain','jabatan'=>'Semua','nominal'=>50000000,'satuan'=>'Bulan'],
            ['id_komponen'=>225,'nama_komponen'=>'Fasilitas Kredit Mobil','kategori'=>'Tunjangan Lain','jabatan'=>'Semua','nominal'=>70000000,'satuan'=>'Periode'],
        ];

        $this->db->table('komponen_gaji')->insertBatch($data);
    }
}
