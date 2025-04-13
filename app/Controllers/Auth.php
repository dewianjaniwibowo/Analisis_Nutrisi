<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function register()
    {
        return view('register');
    }

    public function save()
    {
        // logika menyimpan user baru nanti ditulis di sini
        // contoh sederhana:
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // bisa ditambah hash password dll

        // sementara redirect balik ke login
        return redirect()->to('/');
    }
}
