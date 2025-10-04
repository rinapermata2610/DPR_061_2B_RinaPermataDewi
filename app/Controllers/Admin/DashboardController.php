<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        // Ambil session
        $session = session();

        // Cek apakah user sudah login
        if (! $session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Ambil data dari session
        $username = $session->get('username');
        $role = $session->get('role');

        // Kirim ke view
        $data = [
            'username' => $username,
            'role'     => $role,
        ];

        return view('admin/dashboard/index', $data);
    }
}
