<?php

namespace App\Controllers;

class Makanan extends BaseController
{
    public function index()
    {
        return view('input_makanan'); // Menampilkan form input makanan
    }

    public function hitung()
    {
        $nama = $this->request->getPost('nama_makanan');
        $berat = $this->request->getPost('berat');

        // Logika hitung kalori
        $kalori = $berat * 4; // Contoh sederhana, 1 gram = 4 kkal

        // Menambahkan saran berdasarkan jumlah kalori
        if ($kalori > 500) {
            $saran = "Kurangi makanan tinggi lemak! Lebih baik makan sayur dan buah.";
        } else {
            $saran = "Bagus! Pola makan kamu sehat.";
        }

        return view('hasil', ['nama' => $nama, 'kalori' => $kalori, 'saran' => $saran]);
    }
}
