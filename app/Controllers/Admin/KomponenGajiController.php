<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KomponenGajiModel;

class KomponenGajiController extends BaseController
{
    protected $komponenModel;

    public function __construct()
    {
        $this->komponenModel = new KomponenGajiModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        $komponen = $keyword
            ? $this->komponenModel->search($keyword)->findAll()
            : $this->komponenModel->findAll();

        return view('komponen/index', [
            'title' => 'Kelola Komponen Gaji & Tunjangan',
            'komponen' => $komponen
        ]);
    }

    public function create()
    {
        return view('komponen/create', ['title' => 'Tambah Komponen Gaji']);
    }

    public function store()
    {
        $this->komponenModel->save([
            'id_komponen'   => $this->request->getPost('id_komponen'),
            'nama_komponen' => $this->request->getPost('nama_komponen'),
            'kategori'      => $this->request->getPost('kategori'),
            'jabatan'       => $this->request->getPost('jabatan'),
            'nominal'       => $this->request->getPost('nominal'),
            'satuan'        => $this->request->getPost('satuan'),
        ]);

        return redirect()->to('/admin/komponen')->with('success', 'Komponen gaji berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $komponen = $this->komponenModel->find($id);

        return view('komponen/edit', [
            'title' => 'Ubah Komponen Gaji',
            'komponen' => $komponen
        ]);
    }

    public function update($id)
    {
        $this->komponenModel->update($id, [
            'nama_komponen' => $this->request->getPost('nama_komponen'),
            'kategori'      => $this->request->getPost('kategori'),
            'jabatan'       => $this->request->getPost('jabatan'),
            'nominal'       => $this->request->getPost('nominal'),
            'satuan'        => $this->request->getPost('satuan'),
        ]);

        return redirect()->to('/admin/komponen')->with('success', 'Komponen gaji berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->komponenModel->delete($id);
        return redirect()->to('/admin/komponen')->with('success', 'Komponen gaji berhasil dihapus.');
    }
}
