<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggajianModel extends Model
{
    protected $table         = 'penggajian';
    protected $primaryKey    = false; // karena tidak ada kolom PK tunggal
    protected $allowedFields = ['id_komponen', 'id_anggota'];

    /**
     * Ambil seluruh data penggajian + perhitungan Take Home Pay
     */
    public function getAllWithTakeHomePay($keyword = null)
    {
        $builder = $this->db->table('anggota a')
            ->select('a.id_anggota, a.gelar_depan, a.nama_depan, a.nama_belakang, a.gelar_belakang,
                      a.jabatan, a.status_pernikahan, a.jumlah_anak')
            ->select('SUM(k.nominal) as gaji_pokok')
            ->join('penggajian p', 'p.id_anggota = a.id_anggota', 'left')
            ->join('komponen_gaji k', 'k.id_komponen = p.id_komponen', 'left')
            ->groupBy('a.id_anggota');

        if ($keyword) {
            $builder->groupStart()
                ->like('a.nama_depan', $keyword)
                ->orLike('a.nama_belakang', $keyword)
                ->orLike('a.jabatan', $keyword)
                ->orLike('a.id_anggota', $keyword)
                ->groupEnd();
        }

        $result = $builder->get()->getResultArray();

        foreach ($result as &$row) {
            $takeHome = (int) $row['gaji_pokok'];

            if ($row['status_pernikahan'] === 'Kawin') {
                $takeHome += $this->getNominalKomponen('Tunjangan Istri/Suami', $row['jabatan']);
            }

            if ((int)$row['jumlah_anak'] > 0) {
                $jumlahAnak = min((int)$row['jumlah_anak'], 2);
                $tunjAnak   = $this->getNominalKomponen('Tunjangan Anak', $row['jabatan']);
                $takeHome  += $tunjAnak * $jumlahAnak;
            }

            $row['take_home_pay'] = $takeHome;
        }

        return $result;
    }

    /**
     * Ambil nominal komponen gaji tertentu sesuai jabatan
     */
    public function getNominalKomponen(string $namaKomponen, string $jabatan): int
    {
        $row = $this->db->table('komponen_gaji')
            ->select('nominal')
            ->where('nama_komponen', $namaKomponen)
            ->groupStart()
                ->where('jabatan', $jabatan)
                ->orWhere('jabatan', 'Semua')
            ->groupEnd()
            ->get()
            ->getRowArray();

        return $row ? (int) $row['nominal'] : 0;
    }

    /**
     * Ambil daftar komponen gaji berdasarkan ID anggota
     */
    public function getByAnggota($idAnggota)
    {
        return $this->db->table('penggajian p')
            ->select('k.nama_komponen, k.kategori, k.nominal, k.satuan')
            ->join('komponen_gaji k', 'k.id_komponen = p.id_komponen')
            ->where('p.id_anggota', $idAnggota)
            ->get()
            ->getResultArray();
    }

    /**
     * Insert manual (bypass primaryKey problem)
     */
    public function insertPenggajian(array $data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    /**
     * Update manual berdasarkan composite key (id_anggota + id_komponen)
     */
    public function updatePenggajian($oldIdAnggota, $oldIdKomponen, array $data)
    {
        return $this->db->table($this->table)
            ->where('id_anggota', $oldIdAnggota)
            ->where('id_komponen', $oldIdKomponen)
            ->update($data);
    }

    /**
     * Delete manual berdasarkan composite key
     */
    public function deletePenggajian($idAnggota, $idKomponen)
    {
        return $this->db->table($this->table)
            ->where('id_anggota', $idAnggota)
            ->where('id_komponen', $idKomponen)
            ->delete();
    }
}
