<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Kalau sudah login → redirect sesuai role
        $session = session();
        if ($session->get('isLoggedIn')) {
            $role = $session->get('role');
            if ($role === 'admin') {
                return redirect()->to('/admin/dashboard');
            } elseif ($role === 'client') {
                return redirect()->to('/client/dashboard');
            }
        }

        // Kalau belum login → ke halaman login
        return redirect()->to('/login');
    }
}
