<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_anggota'       => 101,
                'nama_depan'       => 'Puan',
                'nama_belakang'    => 'Maharani',
                'gelar_depan'      => 'Dr. (H.C.)',
                'gelar_belakang'   => 'S.Sos.',
                'jabatan'          => 'Ketua',
                'status_pernikahan'=> 'Kawin',
            ],
            [
                'id_anggota'       => 102,
                'nama_depan'       => 'Lodewijk',
                'nama_belakang'    => 'Paulus',
                'gelar_depan'      => null,
                'gelar_belakang'   => null,
                'jabatan'          => 'Wakil Ketua',
                'status_pernikahan'=> 'Kawin',
            ],
            [
                'id_anggota'       => 103,
                'nama_depan'       => 'Fadli',
                'nama_belakang'    => 'Zon',
                'gelar_depan'      => 'Dr.',
                'gelar_belakang'   => 'S.S., M.Sc.',
                'jabatan'          => 'Anggota',
                'status_pernikahan'=> 'Kawin',
            ],
            [
                'id_anggota'       => 104,
                'nama_depan'       => 'Sufmi_
