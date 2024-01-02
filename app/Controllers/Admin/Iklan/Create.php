<?php

namespace App\Controllers\Admin\Iklan;

use \App\Controllers\BaseController;

class Create extends BaseController
{
    protected $iklanModel;

    public function index()
    {
        if (!$this->request->is('post')) {
            $data = [
                'title' => 'Admin - Tambah iklan',
            ];
            return view('admin/iklan/create', $data);
        }
        
        $newFileName = ''; // Inisialisasi dengan nilai default kosong
        $gambariklan = $this->request->getFile('gambar_iklan');
        $newFileName = $gambariklan->getRandomName();
        $gambariklan->move(ROOTPATH . 'public/uploads/iklan', $newFileName);


        $iklanData = [
            'nama_iklan' => $this->request->getPost('nama_iklan'),
            'gambar_iklan' => $newFileName,
            'deskripsi_iklan' => $this->request->getPost('deskripsi_iklan'),
        ];

        $this->iklanModel->insert($iklanData);

        session()->setFlashdata('success', 'Iklan Berhasil ditambahkan.');
        return redirect()->to('admin/iklan/create');
    }
}
