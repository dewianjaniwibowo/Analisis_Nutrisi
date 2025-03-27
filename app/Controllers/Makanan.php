<?php

namespace App\Controllers;
use App\Models\MakananModel; // Tambahkan ini untuk menggunakan model

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

    public function simpan()
    {
        $model = new MakananModel();
        $model->insert([
            'nama_makanan' => $this->request->getPost('nama_makanan'),
            'kalori' => $this->request->getPost('berat') * 4, // Perhitungan kalori
        ]);

        return redirect()->to(base_url('makanan/daftar'));
    }

    public function daftar()
    {
        $makanan = [
            ['nama' => 'Nasi', 'kalori' => 130],
            ['nama' => 'Ayam Goreng', 'kalori' => 240],
            ['nama' => 'Telur Rebus', 'kalori' => 70],
        ];

        $total_kalori = array_sum(array_column($makanan, 'kalori'));

        return view('rencana_makanan', ['makanan' => $makanan, 'total_kalori' => $total_kalori]);
    }
}
