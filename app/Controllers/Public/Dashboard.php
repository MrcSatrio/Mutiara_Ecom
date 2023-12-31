<?php

namespace App\Controllers\Public;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $produkModel;
    protected $keranjangModel;
    protected $iklanModel;

    public function index()
    {
        $data =
        [
        'produk' => $this->produkModel
                ->join('kategori', 'produk.id_kategori = kategori.id_kategori')
                ->limit(3)
                ->findAll(), 
        'iklan' => $this->iklanModel
                ->where('nama_iklan', 'popup') // Mengganti 'iklan' dengan 'jenis_iklan' dan menggunakan nilai 'popup'
                ->findAll(),
        'keranjang' => $this->keranjangModel
                ->join('akun', 'keranjang.id_akun = akun.id_akun')
                ->where('keranjang.id_akun', session('id_akun'))
                ->countAllResults(),
            ]; 

        return view('public/dashboard', $data);
    }

    public function search($kategori)
    {
        $data = [
            'produk' => $this->produkModel
                ->join('kategori', 'produk.id_kategori = kategori.id_kategori')
                ->where('kategori.nama_kategori', $kategori)
                ->findAll(),
            'iklan' => $this->iklanModel
                ->where('nama_iklan', 'banner') // Mengganti 'iklan' dengan 'jenis_iklan' dan menggunakan nilai 'popup'
                ->findAll(),
            'keranjang' => $this->keranjangModel
                ->join('akun', 'keranjang.id_akun = akun.id_akun')
                ->where('keranjang.id_akun', session('id_akun'))
                ->countAllResults(),
        ];
        return view('public/shop', $data);
    }

    public function shop()
    {
    $data =
    [
    'produk' => $this->produkModel
            ->join('kategori', 'produk.id_kategori = kategori.id_kategori')
            ->findAll(), 
    'iklan' => $this->iklanModel
            ->where('nama_iklan', 'banner') // Mengganti 'iklan' dengan 'jenis_iklan' dan menggunakan nilai 'popup'
            ->findAll(),
    'keranjang' => $this->keranjangModel
            ->join('akun', 'keranjang.id_akun = akun.id_akun')
            ->where('keranjang.id_akun', session('id_akun'))
            ->countAllResults(),
        ]; 

    return view('public/shop', $data);
}

    
    
}