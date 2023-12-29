<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class RajaOngkir extends BaseConfig
{
    /**
     * API Key RajaOngkir
     *
     * Isi dengan API key yang Anda peroleh dari RajaOngkir.
     */
    public $apiKey = '2d0c536fb8b9498938cb3479dbfb435c';

    /**
     * Endpoint RajaOngkir
     *
     * URL endpoint dari API RajaOngkir.
     * Jangan ubah kecuali ada perubahan pada API endpoint.
     */
    public $endpoint = 'https://api.rajaongkir.com/starter/';

    /**
     * Kota Asal Pengiriman
     *
     * Isi dengan nama kota asal dari pengiriman Anda.
     * Contoh: 'Jakarta'.
     */
    public $origin = 'Bekasi';
}
