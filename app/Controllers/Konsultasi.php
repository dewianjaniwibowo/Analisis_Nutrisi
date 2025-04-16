<?php

namespace App\Controllers;

class Konsultasi extends BaseController
{
    private $dokters;

    public function __construct()
    {
        // Simulasi data dokter
        $this->dokters = [
            1 => [
                'nama' => 'Dr. Febri Kurnia',
                'spesialis' => 'Dokter Umum',
                'pengalaman' => '18 tahun',
                'rating' => '98%',
                'harga' => 75000,
                'foto' => 'doktergizi1.jpg',
            ],
            2 => [
                'nama' => 'Dr. Aliqa Zahra',
                'spesialis' => 'Dokter Gizi Klinik',
                'pengalaman' => '10 tahun',
                'rating' => '95%',
                'harga' => 85000,
                'foto' => 'doktergizi2.jpg',
            ]
        ];
    }

    public function index()
    {
        return view('konsultasi_view', ['dokters' => $this->dokters]);
    }

    public function chat($id)
{
    // Cek apakah ID dokter valid
    if (!isset($this->dokters[$id])) {
        return redirect()->to('/konsultasi')->with('error', 'Dokter tidak ditemukan');
    }

    $data = [
        'dokter' => $this->dokters[$id]
    ];

    return view('chat_views', $data);
}
}
