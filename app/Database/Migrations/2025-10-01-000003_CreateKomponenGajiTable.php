<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKomponenGajiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_komponen' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'nama_komponen' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'jabatan' => [
                'type'    => "ENUM('Ketua','Wakil Ketua','Anggota','Semua')",
                'default' => 'Semua',
            ],
            'nominal' => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2',
            ],
            'satuan' => [
                'type'    => "ENUM('Bulan','Periode')",
                'default' => 'Bulan',
            ],
        ]);
        $this->forge->addKey('id_komponen', true);
        $this->forge->createTable('komponen_gaji');
    }

    public function down()
    {
        $this->forge->dropTable('komponen_gaji');
    }
}
