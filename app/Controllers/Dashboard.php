<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Ambil data dari session
        $username = session()->get('username');
        $role     = session()->get('role');

        $data = [
            'title'    => 'Dashboard',
            'username' => $username,
            'role'     => $role
        ];

        return view('dashboard/index', $data);
    }
}
