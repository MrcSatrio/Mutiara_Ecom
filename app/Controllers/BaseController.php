<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\AkunModel;
use App\Models\AlamatModel;
use App\Models\DetailTransaksiModel;
use App\Models\EkspedisiModel;
use App\Models\KategoriModel;
use App\Models\KeranjangModel;
use App\Models\ProdukModel;
use App\Models\RoleModel;
use App\Models\StatusModel;
use App\Models\TransaksiModel;
use App\Models\IklanModel;
use App\Models\RekeningModel;
use Config\Services;



/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{

    protected $akunModel = AkunModel::class;
    protected $alamatModel = AlamatModel::class;
    protected $detailtransaksiModel = DetailTransaksiModel::class;
    protected $ekspedisiModel = EkspedisiModel::class;
    protected $kategoriModel = KategoriModel::class;
    protected $keranjangModel = KeranjangModel::class;
    protected $produkModel = ProdukModel::class;
    protected $roleModel = RoleModel::class;
    protected $statusModel = StatusModel::class;
    protected $transaksiModel = TransaksiModel::class;
    protected $iklanModel = IklanModel::class;
    protected $rekeningModel = RekeningModel::class;

    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        $this->akunModel = new AkunModel();
        $this->alamatModel = new AlamatModel();
        $this->detailtransaksiModel = new DetailTransaksiModel();
        $this->ekspedisiModel = new EkspedisiModel();
        $this->kategoriModel = new KategoriModel();
        $this->keranjangModel = new KeranjangModel();
        $this->produkModel = new ProdukModel();
        $this->roleModel = new RoleModel();
        $this->statusModel = new StatusModel();
        $this->transaksiModel = new TransaksiModel();
        $this->iklanModel = new IklanModel();
        $this->rekeningModel = new RekeningModel();
  
    }
}
