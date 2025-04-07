<?php

namespace App\Controllers;

class Konsultasi extends BaseController
{
    public function index()
    {
        // Simulasi data dokter (bisa ganti dengan DB nanti)
        $data['dokters'] = [
            [
                'nama' => 'Dr. Febri Kurnia',
                'spesialis' => 'Dokter Umum',
                'pengalaman' => '18 tahun',
                'rating' => '98%',
                'harga' => 75000,
                'foto' => 'febri.jpg',
            ],
            [
                'nama' => 'Dr. Aliqa Citra Septiani',
                'spesialis' => 'Dokter Umum',
                'pengalaman' => '7 tahun',
                'rating' => '96%',
                'harga' => 25000,
                'foto' => 'aliqa.jpg',
            ]
        ];
        
        return view('konsultasi_view', $data);
    }
}
