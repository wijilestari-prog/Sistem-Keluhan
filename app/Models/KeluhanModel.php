<?php

namespace App\Models;

use CodeIgniter\Model;

class KeluhanModel extends Model
{
    protected $table = 'keluhan';
    protected $primaryKey = 'id_keluhan';
    protected $allowedFields = ['id_formulir', 'nama_lengkap', 'email','nomor_wa', 'jenis_keluhan', 'rincian', 'tanggapan'];
}