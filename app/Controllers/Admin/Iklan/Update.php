<?php

namespace App\Controllers\Admin\Iklan;

use App\Controllers\BaseController;

class Update extends BaseController
{
    protected $iklanModel;

    public function index($id)
    {

            $getIklan = $this->iklanModel->find($id);
            $data = [
                'title' => 'Mutiara - Edit Iklan',
                'iklan' => $getIklan,
            ];
            return view('admin/iklan/update', $data);

    }

    public function Action_Update()
{
    $namaiklan = $this->request->getPost('nama_iklan');
    $deskripsiiklan = $this->request->getPost('deskripsi_iklan');
    $idiklan = $this->request->getPost('id_iklan');
    $gambariklan = $this->request->getFile('gambar_iklan');

    $existingData = $this->iklanModel
        ->where('id_iklan', $idiklan)
        ->first();

    if ($existingData) {
        $updateData = [];

        if (!empty($gambariklan)) {
            $newFileName = $gambariklan->getRandomName();
            $gambariklan->move(ROOTPATH . 'public/uploads/iklan', $newFileName);
            $updateData['gambar_iklan'] = $newFileName;

        }

        if (!empty($namaiklan)) {
            $updateData['nama_iklan'] = $namaiklan;
        }

        if (!empty($deskripsiiklan)) {
            $updateData['deskripsi_iklan'] = $deskripsiiklan;
        }

        if (!empty($updateData)) {
            $this->iklanModel
                ->where('id_iklan', $idiklan)
                ->set($updateData)  // Menggunakan set untuk mengatur nilai
                ->update();

            session()->setFlashdata('success', 'Iklan berhasil diperbarui.');
        } else {
            session()->setFlashdata('info', 'Tidak ada perubahan yang dilakukan pada iklan.');
        }
    } else {
        session()->setFlashdata('error', 'Iklan gagal Update');
    }

    return redirect()->back();
}



}