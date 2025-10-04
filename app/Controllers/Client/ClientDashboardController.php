<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;

class ClientDashboardController extends BaseController
{
    public function index()
    {
        // Ambil data user dari session
        $session = session();
        $username = $session->get('username');
        $role = $session->get('role');

        // Kirim data ke view
        return view('client/dashboard/index', [
            'title' => 'Dashboard Client',
            'username' => $username,
            'role' => $role
        ]);
    }
}
