<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $allowedFields = [
        'gelar_depan', 'nama_depan', 'nama_belakang',
        'gelar_belakang', 'jabatan', 'status_pernikahan', 'jumlah_anak'
    ];

    // Search multiple columns
    public function search($keyword)
    {
        return $this->table($this->table)
            ->like('nama_depan', $keyword)
            ->orLike('nama_belakang', $keyword)
            ->orLike('jabatan', $keyword)
            ->orLike('id_anggota', $keyword);
    }
}
