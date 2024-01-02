<?php

namespace App\Controllers\Admin\Iklan;

use \App\Controllers\BaseController;

class Delete extends BaseController
{
    protected $iklanModel;

    public function index($id)
    {
        $this->iklanModel->where('id_iklan', $id)->delete();

        $response = [
            'success' => true,
            'message' => 'Data berhasil dihapus.'
        ];

        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}