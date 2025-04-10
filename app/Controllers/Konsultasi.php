<?php

namespace App\Controllers;

class Konsultasi extends BaseController
{
    private $dokters;

    public function __construct()
    {
        // Simulasi data dokter (nanti bisa diganti ke DB)
        $this->dokters = [
            1 => [
                'nama' => 'Dr. Febri Kurnia',
                'spesialis' => 'Dokter Umum',
                'pengalaman' => '18 tahun',
                'rating' => '98%',
                'harga' => 75000,
                'foto' => 'febri.jpg',
            ],
            2 => [
                'nama' => 'Dr. Aliqa Citra Septiani',
                'spesialis' => 'Dokter Umum',
                'pengalaman' => '7 tahun',
                'rating' => '96%',
                'harga' => 25000,
                'foto' => 'aliqa.jpg',
            ]
        ];
    }

    public function index()
    {
        $data['dokters'] = $this->dokters;
        return view('konsultasi_view', $data);
    }

    public function chat($id_dokter)
    {
        if (!isset($this->dokters[$id_dokter])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Dokter tidak ditemukan");
        }

        $dokter = $this->dokters[$id_dokter];

        return view('chat_view', [
            'nama_dokter' => $dokter['nama'],
            'id_dokter' => $id_dokter
        ]);
    }
}
