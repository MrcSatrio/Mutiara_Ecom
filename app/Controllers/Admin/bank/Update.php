<?php

namespace App\Controllers\Admin\Bank;

use App\Controllers\BaseController;

class Update extends BaseController
{
    protected $rekeningModel;

    public function index($id)
    {

            $rekening = $this->rekeningModel->find($id);
            $data = [
                'title' => 'Mutiara - Edit Rekening',
                'rekening' => $rekening,
            ];
            return view('admin/bank/update', $data);

    }

    public function Action_Update()
{
    $bank_rekening = $this->request->getPost('bank_rekening');
    $nama_rekening = $this->request->getPost('nama_rekening');
    $no_rekening = $this->request->getPost('no_rekening');
    $id_rekening = $this->request->getPost('id_rekening');

    $existingData = $this->rekeningModel
        ->where('id_rekening', $id_rekening)
        ->first();

    if ($existingData) {
        $updateData = [];

        if (!empty($bank_rekening)) {
            $updateData['bank_rekening'] = $bank_rekening;
        }

        if (!empty($nama_rekening)) {
            $updateData['nama_rekening'] = $nama_rekening;
        }

        if (!empty($no_rekening)) {
            $updateData['no_rekening'] = $no_rekening;
        }

        if (!empty($updateData)) {
            $this->rekeningModel
                ->where('id_rekening', $id_rekening)
                ->set($updateData)  // Menggunakan set untuk mengatur nilai
                ->update();

            session()->setFlashdata('success', 'Rekening berhasil diperbarui.');
        } else {
            session()->setFlashdata('info', 'Tidak ada perubahan yang dilakukan pada rekening.');
        }
    } else {
        session()->setFlashdata('error', 'Rekening gagal Update');
    }

    return redirect()->back();
}



}