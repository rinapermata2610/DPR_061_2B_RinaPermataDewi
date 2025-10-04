<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\PenggajianModel;

class ClientPenggajianController extends BaseController
{
    public function index()
    {
        $model = new PenggajianModel();

        // Ambil data dengan perhitungan Take Home Pay
        $data = [
            'title'      => 'Data Penggajian',
            'penggajian' => $model->getAllWithTakeHomePay()
        ];

        return view('client/penggajian/index', $data);
    }
}
