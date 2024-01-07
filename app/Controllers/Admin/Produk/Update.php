<?php

namespace App\Controllers\Admin\Produk;

use App\Controllers\BaseController;

class Update extends BaseController
{
    protected $produkModel;
    protected $kategoriModel;

    public function index($id)
    {
        // Periksa jika permintaan bukan metode POST
        if (!$this->request->is('post')) {
            $getproduk = $this->produkModel
                ->join('kategori', 'kategori.id_kategori = produk.id_kategori')
                ->find($id);
            $getkategori = $this->kategoriModel->findAll();
            $data = [
                'title' => 'Koperasi - Edit Produk',
                'produk' => $getproduk,
                'kategoriList' => $getkategori,
            ];
            return view('admin/produk/update', $data);
        }

        // Aturan validasi hanya untuk 'harga_produk'
        $validation = \Config\Services::validation();
        // Manual validation
        $validationRules = [
            'id_kategori' => 'required',
            'nama_produk' => 'required|alpha_numeric_punct|max_length[25]',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'berat' => 'required|numeric',
            'deskripsi' => 'required',
        ];

        $validationMessages = [
            'id_kategori' => [
                'required' => 'Kolom Harus Terisi',
                // Add more custom error messages as needed
            ],
            'nama_produk' => [
                'required' => 'Kolom Harus Terisi',
                'max_length' => 'Kolom tidak boleh lebih dari 25 huruf',
                // Add more custom error messages as needed
            ],
            'harga' => [
                'required' => 'Kolom Harus Terisi',
                'numeric' => 'Kolom Harus Berupa Angka',
                // Add more custom error messages as needed
            ],
            'stok' => [
                'required' => 'Kolom Harus Terisi',
                'numeric' => 'Kolom Harus Berupa Angka',
                // Add more custom error messages as needed
            ],
            'berat' => [
                'required' => 'Kolom Harus Terisi',
                'numeric' => 'Kolom Harus Berupa Angka',
            ],
    ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->to('admin/produk/update/' . $id)->withInput()->with('validation', $this->validator);
        }

        // Simpan perubahan pada produk
        $id_produk = $id;
        $id_kategori = $this->request->getPost('id_kategori');
        $nama_produk = $this->request->getPost('nama_produk');
        $harga = $this->request->getPost('harga');
        $stok = $this->request->getPost('stok');
        $berat = $this->request->getPost('berat');
        $deskripsi = $this->request->getPost('deskripsi');
        $gambar_produk = $this->request->getFile('gambar_produk');

        $updateData = [];

        if (!empty($id_kategori)) {
            $updateData['id_kategori'] = $id_kategori;
        }
        if (!empty($nama_produk)) {
            $updateData['nama_produk'] = $nama_produk;
        }
        if (!empty($harga)) {
            $updateData['harga'] = $harga;
        }
        if (!empty($stok)) {
            $updateData['stok'] = $stok;
        }
        if (!empty($berat)) {
            $updateData['berat'] = $berat;
        }
        if (!empty($deskripsi)) {
            $updateData['deskripsi'] = $deskripsi;
        }

        if ($gambar_produk->isValid() && !$gambar_produk->hasMoved()) {
            $newFileName = $gambar_produk->getRandomName();
            $gambar_produk->move(ROOTPATH . 'public/uploads', $newFileName);
            $updateData['gambar_produk'] = $newFileName;
        }

        if (!empty($updateData)) {
            $this->produkModel
                ->where('id_produk', $id_produk)
                ->set($updateData)
                ->update();

            // Simpan pesan sukses dalam session
            session()->setFlashdata('success', 'Data berhasil disimpan.');
            return redirect()->back()->withInput();
        }
    }
}
