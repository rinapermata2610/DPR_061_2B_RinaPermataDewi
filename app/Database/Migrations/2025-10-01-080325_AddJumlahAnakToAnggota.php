<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddJumlahAnakToAnggota extends Migration
{
    public function up()
    {
        $this->forge->addColumn('anggota', [
            'jumlah_anak' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
                'null'       => false,
                'after'      => 'status_pernikahan'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('anggota', 'jumlah_anak');
    }
}
