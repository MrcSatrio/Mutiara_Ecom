<?php

namespace App\Controllers\Admin\Bank;

use \App\Controllers\BaseController;

class Read extends BaseController
{
    protected $rekeningModel;

    public function index()
    {
        $rekening =  $this->rekeningModel
        ->first();
        $data =
            [
                'title'     => 'Mutiara - List Iklan',
                'rekening' => $rekening
            ];
        return view('admin/bank/read', $data);
    }
}