<?php

namespace App\Controllers;

class Chat extends BaseController
{
    public function index($id = null)
    {
        // Simulasi data dokter berdasarkan ID
        $dokter = [
            1 => 'dr. Gizi A',
            2 => 'dr. Gizi B',
        ];

        if (!isset($dokter[$id])) {
            return "Dokter tidak ditemukan.";
        }

        return view('chat_view', ['nama_dokter' => $dokter[$id]]);
    }
}
