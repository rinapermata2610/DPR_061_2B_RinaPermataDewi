<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenggajianTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_komponen' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'id_anggota' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey(['id_komponen', 'id_anggota'], true);
        $this->forge->addForeignKey('id_komponen', 'komponen_gaji', 'id_komponen', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_anggota', 'anggota', 'id_anggota', 'CASCADE', 'CASCADE');
        $this->forge->createTable('penggajian');
    }

    public function down()
    {
        $this->forge->dropTable('penggajian');
    }
}
