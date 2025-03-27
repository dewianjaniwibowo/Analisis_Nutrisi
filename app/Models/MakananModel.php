<?php
namespace App\Models;

use CodeIgniter\Model;

class MakananModel extends Model
{
    protected $table = 'makanan';  // Nama tabel di database
    protected $primaryKey = 'id';  // Primary key tabel
    protected $allowedFields = ['nama_makanan', 'kalori']; // Field yang bisa diisi
}
