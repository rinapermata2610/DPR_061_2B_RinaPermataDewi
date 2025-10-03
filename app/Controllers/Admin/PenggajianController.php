<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggajianModel;
use App\Models\AnggotaModel;
use App\Models\KomponenGajiModel;

class PenggajianController extends BaseController
{
    protected $penggajianModel;
    protected $anggotaModel;
    protected $komponenGajiModel;

    public function __construct()
    {
        $this->penggajianModel   = new PenggajianModel();
        $this->anggotaModel      = new AnggotaModel();
        $this->komponenGajiModel = new KomponenGajiModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        $data = [
            'title'      => 'Kelola Penggajian',
            'penggajian' => $this->penggajianModel->getAllWithTakeHomePay($keyword)
        ];
        return view('penggajian/index', $data);
    }

    public function create()
    {
        return view('penggajian/create', [
            'title'    => 'Tambah Data Penggajian',
            'anggota'  => $this->anggotaModel->findAll(),
            'komponen' => $this->komponenGajiModel->findAll()
        ]);
    }

    public function store()
    {
        $idAnggota  = $this->request->getPost('id_anggota');
        $idKomponen = $this->request->getPost('id_komponen');

        $anggota  = $this->anggotaModel->find($idAnggota);
        $komponen = $this->komponenGajiModel->find($idKomponen);

        if (!$anggota || !$komponen) {
            return redirect()->back()->with('error', 'Data anggota atau komponen tidak ditemukan.');
        }

        // Validasi jabatan
        if ($komponen['jabatan'] !== 'Semua' && $komponen['jabatan'] !== $anggota['jabatan']) {
            return redirect()->back()->with('error', 'Komponen gaji tidak sesuai dengan jabatan anggota.');
        }

        // Cek duplikasi
        $exists = $this->penggajianModel
            ->where('id_anggota', $idAnggota)
            ->where('id_komponen', $idKomponen)
            ->first();

        if ($exists) {
            return redirect()->back()->with('error', 'Komponen gaji ini sudah ditambahkan.');
        }

        // insertPenggajian
        $this->penggajianModel->insertPenggajian([
            'id_anggota'  => $idAnggota,
            'id_komponen' => $idKomponen
        ]);

        return redirect()->to('/admin/penggajian')->with('success', 'Data penggajian berhasil ditambahkan.');
    }

    public function detail($idAnggota)
    {
        $anggota = $this->anggotaModel->find($idAnggota);
        $detail  = $this->penggajianModel->getByAnggota($idAnggota);

        if (!$anggota) {
            return redirect()->to('/admin/penggajian')->with('error', 'Data anggota tidak ditemukan.');
        }

        // Hitung Take Home Pay
        $takeHome = 0;
        foreach ($detail as $d) {
            $takeHome += (int)$d['nominal'];
        }

        if ($anggota['status_pernikahan'] === 'Kawin') {
            $takeHome += $this->penggajianModel->getNominalKomponen('Tunjangan Istri/Suami', $anggota['jabatan']);
        }

        if ((int)$anggota['jumlah_anak'] > 0) {
            $jumlahAnak = min((int)$anggota['jumlah_anak'], 2);
            $tunjAnak   = $this->penggajianModel->getNominalKomponen('Tunjangan Anak', $anggota['jabatan']);
            $takeHome  += $tunjAnak * $jumlahAnak;
        }

        return view('penggajian/detail', [
            'title'         => 'Detail Penggajian',
            'anggota'       => $anggota,
            'detail'        => $detail,
            'take_home_pay' => $takeHome
        ]);
    }

    public function edit($idAnggota, $idKomponen)
    {
        $penggajian = $this->penggajianModel
            ->where('id_anggota', $idAnggota)
            ->where('id_komponen', $idKomponen)
            ->first();

        if (!$penggajian) {
            return redirect()->to('/admin/penggajian')->with('error', 'Data tidak ditemukan.');
        }

        return view('penggajian/edit', [
            'title'      => 'Ubah Data Penggajian',
            'penggajian' => $penggajian,
            'anggota'    => $this->anggotaModel->findAll(),
            'komponen'   => $this->komponenGajiModel->findAll()
        ]);
    }

    public function update($idAnggota, $idKomponen)
    {
        $newIdAnggota  = $this->request->getPost('id_anggota');
        $newIdKomponen = $this->request->getPost('id_komponen');

        $anggota  = $this->anggotaModel->find($newIdAnggota);
        $komponen = $this->komponenGajiModel->find($newIdKomponen);

        if (!$anggota || !$komponen) {
            return redirect()->back()->with('error', 'Data tidak valid.');
        }

        if ($komponen['jabatan'] !== 'Semua' && $komponen['jabatan'] !== $anggota['jabatan']) {
            return redirect()->back()->with('error', 'Komponen gaji tidak sesuai dengan jabatan anggota.');
        }

        $exists = $this->penggajianModel
            ->where('id_anggota', $newIdAnggota)
            ->where('id_komponen', $newIdKomponen)
            ->first();

        if ($exists && !($newIdAnggota == $idAnggota && $newIdKomponen == $idKomponen)) {
            return redirect()->back()->with('error', 'Komponen gaji ini sudah ditambahkan.');
        }

        // updatePenggajian (hapus lama + insert baru)
        $this->penggajianModel->updatePenggajian($idAnggota, $idKomponen, [
            'id_anggota'  => $newIdAnggota,
            'id_komponen' => $newIdKomponen
        ]);

        return redirect()->to('/admin/penggajian')->with('success', 'Data penggajian berhasil diperbarui.');
    }

    public function delete($idAnggota)
    {
        $this->penggajianModel
            ->where('id_anggota', $idAnggota)
            ->delete();

        return redirect()->to('/admin/penggajian')->with('success', 'Semua data penggajian anggota berhasil dihapus.');
    }

}
