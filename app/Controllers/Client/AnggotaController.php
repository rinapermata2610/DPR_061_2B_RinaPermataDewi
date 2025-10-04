<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function index()
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->findAll();

        return view('client/anggota/index', $data);
    }
}
