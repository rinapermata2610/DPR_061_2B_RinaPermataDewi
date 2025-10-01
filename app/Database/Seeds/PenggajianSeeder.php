<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggajianSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Ketua DPR (Puan)
            ['id_komponen'=>201,'id_anggota'=>101],['id_komponen'=>204,'id_anggota'=>101],
            ['id_komponen'=>205,'id_anggota'=>101],['id_komponen'=>206,'id_anggota'=>101],
            ['id_komponen'=>207,'id_anggota'=>101],['id_komponen'=>210,'id_anggota'=>101],
            ['id_komponen'=>213,'id_anggota'=>101],['id_komponen'=>216,'id_anggota'=>101],
            ['id_komponen'=>219,'id_anggota'=>101],['id_komponen'=>222,'id_anggota'=>101],
            ['id_komponen'=>224,'id_anggota'=>101],['id_komponen'=>225,'id_anggota'=>101],

            // Wakil Ketua DPR (Lodewijk)
            ['id_komponen'=>202,'id_anggota'=>102],['id_komponen'=>204,'id_anggota'=>102],
            ['id_komponen'=>205,'id_anggota'=>102],['id_komponen'=>206,'id_anggota'=>102],
            ['id_komponen'=>208,'id_anggota'=>102],['id_komponen'=>210,'id_anggota'=>102],
            ['id_komponen'=>214,'id_anggota'=>102],['id_komponen'=>217,'id_anggota'=>102],
            ['id_komponen'=>220,'id_anggota'=>102],['id_komponen'=>222,'id_anggota'=>102],
            ['id_komponen'=>224,'id_anggota'=>102],['id_komponen'=>225,'id_anggota'=>102],

            // Anggota DPR (Fadli)
            ['id_komponen'=>203,'id_anggota'=>103],['id_komponen'=>204,'id_anggota'=>103],
            ['id_komponen'=>205,'id_anggota'=>103],['id_komponen'=>206,'id_anggota'=>103],
            ['id_komponen'=>209,'id_anggota'=>103],['id_komponen'=>210,'id_anggota'=>103],
            ['id_komponen'=>215,'id_anggota'=>103],['id_komponen'=>218,'id_anggota'=>103],
            ['id_komponen'=>221,'id_anggota'=>103],['id_komponen'=>222,'id_anggota'=>103],
            ['id_komponen'=>224,'id_anggota'=>103],['id_komponen'=>225,'id_anggota'=>103],

            // Wakil Ketua DPR (Dasco)
            ['id_komponen'=>202,'id_anggota'=>104],['id_komponen'=>204,'id_anggota'=>104],
            ['id_komponen'=>205,'id_anggota'=>104],['id_komponen'=>206,'id_anggota'=>104],
            ['id_komponen'=>208,'id_anggota'=>104],['id_komponen'=>210,'id_anggota'=>104],
            ['id_komponen'=>214,'id_anggota'=>104],['id_komponen'=>217,'id_anggota'=>104],
            ['id_komponen'=>220,'id_anggota'=>104],['id_komponen'=>222,'id_anggota'=>104],
            ['id_komponen'=>224,'id_anggota'=>104],['id_komponen'=>225,'id_anggota'=>104],

            // Anggota DPR (Muhaimin)
            ['id_komponen'=>203,'id_anggota'=>105],['id_komponen'=>204,'id_anggota'=>105],
            ['id_komponen'=>205,'id_anggota'=>105],['id_komponen'=>206,'id_anggota'=>105],
            ['id_komponen'=>209,'id_anggota'=>105],['id_komponen'=>210,'id_anggota'=>105],
            ['id_komponen'=>215,'id_anggota'=>105],['id_komponen'=>218,'id_anggota'=>105],
            ['id_komponen'=>221,'id_anggota'=>105],['id_komponen'=>222,'id_anggota'=>105],
            ['id_komponen'=>224,'id_anggota'=>105],['id_komponen'=>225,'id_anggota'=>105],

            // Anggota DPR (Herman)
            ['id_komponen'=>203,'id_anggota'=>106],['id_komponen'=>204,'id_anggota'=>106],
            ['id_komponen'=>205,'id_anggota'=>106],['id_komponen'=>206,'id_anggota'=>106],
            ['id_komponen'=>209,'id_anggota'=>106],['id_komponen'=>210,'id_anggota'=>106],
            ['id_komponen'=>215,'id_anggota'=>106],['id_komponen'=>218,'id_anggota'=>106],
            ['id_komponen'=>221,'id_anggota'=>106],['id_komponen'=>222,'id_anggota'=>106],
            ['id_komponen'=>224,'id_anggota'=>106],['id_komponen'=>225,'id_anggota'=>106],
        ];

        $this->db->table('penggajian')->insertBatch($data);
    }
}
