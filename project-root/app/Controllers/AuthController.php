<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        helper(['form']);

        $session = session();
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            // Password check
            if ($password === $user['password']) {
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to(base_url('dashboard'));
            } else {
                return redirect()->back()->with('error', 'Wrong password');
            }
        } else {
            return redirect()->back()->with('error', 'Username not found');
        }
    }

    public function dashboard()
    {
        return view('dashboard/index');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/auth/login'));
    }
}
