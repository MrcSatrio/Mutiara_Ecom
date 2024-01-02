<?php

namespace App\Models;

use CodeIgniter\Model;

class IklanModel extends Model
{
    protected $table      = 'iklan';
    protected $primaryKey = 'id_iklan';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'id_iklan',
        'nama_iklan',
        'gambar_iklan',
        'deskripsi_iklan',
    ];
}
