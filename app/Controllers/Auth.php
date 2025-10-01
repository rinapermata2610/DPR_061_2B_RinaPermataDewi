<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        helper(['form', 'url']);
        $session = session();
        $model   = new PenggunaModel();

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $model->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                $session->set([
                    'id_pengguna' => $user['id_pengguna'],
                    'username'    => $user['username'],
                    'role'        => $user['role'],
                    'isLoggedIn'  => true,
                ]);
                return redirect()->to('/dashboard');
            }

            return redirect()->back()->with('error', 'Username atau password salah.');
        }

        return view('auth/login', ['title' => 'Login']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
