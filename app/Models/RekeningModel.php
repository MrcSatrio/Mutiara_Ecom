<?php

namespace App\Models;

use CodeIgniter\Model;

class RekeningModel extends Model
{
    protected $table      = 'rekening';
    protected $primaryKey = 'id_rekening';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'id_rekening',
        'nama_rekening',
        'no_rekening',
        'bank_rekening',
    ];
}
