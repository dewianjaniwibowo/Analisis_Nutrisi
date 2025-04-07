<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Artikel extends BaseController
{
    public function index()
    {
        // Data dummy untuk daftar artikel
        $data['artikelList'] = [
            [
                'judul' => 'Pentingnya Gizi Seimbang',
                'deskripsi' => 'Gizi seimbang sangat penting untuk menjaga kesehatan tubuh...',
                'slug' => 'gizi-seimbang'
            ],
            [
                'judul' => 'Manfaat Serat dalam Makanan',
                'deskripsi' => 'Serat membantu sistem pencernaan dan mengurangi risiko penyakit kronis...',
                'slug' => 'manfaat-serat'
            ],
            [
                'judul' => 'Makanan Bergizi untuk Anak',
                'deskripsi' => 'Pemenuhan gizi anak berpengaruh besar pada tumbuh kembang...',
                'slug' => 'gizi-anak'
            ],
            [
                'judul' => 'Tips Pola Makan Sehat',
                'deskripsi' => 'Cara mengatur pola makan agar tetap sehat dan bertenaga...',
                'slug' => 'pola-makan-sehat'
            ],
            [
                'judul' => 'Nutrisi untuk Ibu Hamil',
                'deskripsi' => 'Nutrisi yang tepat sangat penting bagi ibu hamil dan janin...',
                'slug' => 'nutrisi-ibu-hamil'
            ],
            [
                'judul' => 'Vitamin dan Mineral Harian',
                'deskripsi' => 'Kenali kebutuhan vitamin dan mineral harian tubuhmu...',
                'slug' => 'vitamin-mineral'
            ]
        ];

        return view('artikel', $data);
    }

    public function detail($slug)
    {
        // Konten artikel dummy berdasarkan slug
        $artikels = [
            'gizi-seimbang' => 'Konten lengkap: Gizi seimbang mencakup berbagai zat makanan yang dibutuhkan tubuh seperti karbohidrat, protein, lemak, vitamin, dan mineral.',
            'manfaat-serat' => 'Konten lengkap: Serat penting untuk menjaga kesehatan usus, menurunkan kolesterol, dan membantu menjaga berat badan.',
            'gizi-anak' => 'Konten lengkap: Anak-anak memerlukan makanan bergizi seimbang seperti susu, sayur, buah, dan protein hewani untuk tumbuh optimal.',
            'pola-makan-sehat' => 'Konten lengkap: Pola makan sehat mencakup makan teratur, konsumsi sayur & buah, serta cukup air.',
            'nutrisi-ibu-hamil' => 'Konten lengkap: Ibu hamil perlu asupan seperti asam folat, zat besi, kalsium, dan DHA.',
            'vitamin-mineral' => 'Konten lengkap: Vitamin A, B, C, D, E serta mineral seperti zat besi dan zinc dibutuhkan setiap hari.'
        ];

        if (!isset($artikels[$slug])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        echo "<h2>Detail Artikel</h2>";
        echo "<p>{$artikels[$slug]}</p>";
        echo "<p><a href='" . site_url('artikel') . "'>← Kembali ke daftar artikel</a></p>";
    }
}
