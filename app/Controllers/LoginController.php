<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class LoginController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new LoginModel();
    }

    public function register()
    {
        // Handle user registration logic
    }

    public function login()
    {
        helper(['form']);
        $validation = \Config\Services::validation();

        if ($this->request->getMethod() === 'post') {
            // Validate the user input
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            if (!$this->validate($rules)) {
                // Validation failed, display errors
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            } else {
                // Check if the user exists
                $username = $this->request->getPost('username');

                $user = $this->userModel->where('username', $username)->first();

                if ($user) {
                    // Verify the password
                    $password = $this->request->getPost('password');

                    if ($password == $user['password']) {
                        // Store user data in the session
                        $userData = [
                            'id_pengguna' => $user['id_pengguna'],
                            'username' => $user['username'],
                            'nama_pengguna' => $user['nama_pengguna'],
                            'logged_in' => true
                        ];

                        session()->set($userData);

                        // Redirect to the dashboard or any other page
                        return redirect()->to('dashboard')->with('success', 'Login successful!');
                    }
                }

                // Invalid email or password
                return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
            }
        }

        if (session()->get('logged_in')) {
            $isLoggedIn = true;
        } else {
            $isLoggedIn = false;
        }

        if ($isLoggedIn) {
            return redirect()->back();
        } else {
            return view('login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login')->with('success', 'Logout successful!');
    }
}
