<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'email'    => 'thoriq@simanjuntak.com',
                'nama_depan' => 'Thoriq',
                'nama_belakang' => 'Simanjuntak',
                'role'     => 'Admin',
            ],
            [
                'username' => 'citizen',
                'password' => password_hash('public123', PASSWORD_DEFAULT),
                'email'    => 'richard@subakat.com',
                'nama_depan' => 'Richard',
                'nama_belakang' => 'Subakat',
                'role'     => 'Public',
            ],
        ];

        $this->db->table('pengguna')->insertBatch($data);
    }
}
