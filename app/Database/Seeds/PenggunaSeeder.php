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
                'role'     => 'admin',
            ],
            [
                'username' => 'citizen',
                'password' => password_hash('public123', PASSWORD_DEFAULT),
                'role'     => 'client',
            ],
        ];

        $this->db->table('pengguna')->insertBatch($data);
    }
}
