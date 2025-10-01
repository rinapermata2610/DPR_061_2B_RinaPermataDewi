<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Anggota extends BaseController
{
    protected $anggotaModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        $anggota = $keyword ? $this->anggotaModel->search($keyword)->findAll() : $this->anggotaModel->findAll();

        return view('anggota/index', [
            'title' => 'Kelola Anggota DPR',
            'anggota' => $anggota
        ]);
    }

    public function create()
    {
        return view('anggota/create', ['title' => 'Tambah Data Anggota']);
    }

    public function store()
    {
        $this->anggotaModel->save([
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'jumlah_anak' => $this->request->getPost('jumlah_anak'),
        ]);

        return redirect()->to('/admin/anggota')->with('success', 'Data anggota berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $anggota = $this->anggotaModel->find($id);

        return view('anggota/edit', [
            'title' => 'Ubah Data Anggota',
            'anggota' => $anggota
        ]);
    }

    public function update($id)
    {
        $this->anggotaModel->update($id, [
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'jumlah_anak' => $this->request->getPost('jumlah_anak'),
        ]);

        return redirect()->to('/admin/anggota')->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->anggotaModel->delete($id);
        return redirect()->to('/admin/anggota')->with('success', 'Data anggota berhasil dihapus.');
    }
}
