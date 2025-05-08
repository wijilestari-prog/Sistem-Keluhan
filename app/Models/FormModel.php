<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'form';
    protected $primaryKey = 'id_formulir';
    protected $allowedFields = ['jenis_keluhan', 'tanggal'];
}