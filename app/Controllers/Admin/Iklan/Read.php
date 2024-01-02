<?php

namespace App\Controllers\Admin\Iklan;

use \App\Controllers\BaseController;

class Read extends BaseController
{
    protected $iklanModel;

    public function index()
    {
        $iklan =  $this->iklanModel
        ->findAll();
        $data =
            [
                'title'     => 'Mutiara - List Iklan',
                'iklan' => $iklan
            ];
        return view('admin/iklan/read', $data);
    }
}