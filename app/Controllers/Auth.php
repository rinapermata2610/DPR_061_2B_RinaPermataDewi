<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Auth extends BaseController
{
    public function login()
    {
        helper(['form', 'url']);
        $session = session();

        // Sudah login? langsung arahkan
        if ($session->get('isLoggedIn')) {
            return $this->redirectByRole($session->get('role'));
        }

        $model = new PenggunaModel();

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $model->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Simpan session
                $session->set([
                    'id_pengguna' => $user['id_pengguna'],
                    'username'    => $user['username'],
                    'role'        => $user['role'],
                    'isLoggedIn'  => true,
                ]);

                log_message('debug', 'User login: ' . json_encode($session->get()));
                
                return $this->redirectByRole($user['role']);
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

    private function redirectByRole($role)
    {
        switch ($role) {
            case 'admin':
                return redirect()->to('/admin/dashboard');
            case 'client':
                return redirect()->to('/client/dashboard');
                // fallback: logout supaya tidak infinite loop
                session()->destroy();
                return redirect()->to('/login')->with('error', 'Role tidak valid.');
        }
    }
}
