<?php

namespace App\Models;

use CodeIgniter\Model;

class KomponenGajiModel extends Model
{
    protected $table      = 'komponen_gaji';
    protected $primaryKey = 'id_komponen';
    protected $allowedFields = [
        'id_komponen', 'nama_komponen', 'kategori', 'jabatan', 'nominal', 'satuan'
    ];

    public function search($keyword)
    {
        return $this->table($this->table)
            ->like('id_komponen', $keyword)
            ->orLike('nama_komponen', $keyword)
            ->orLike('kategori', $keyword)
            ->orLike('jabatan', $keyword)
            ->orLike('nominal', $keyword)
            ->orLike('satuan', $keyword);
    }
}
