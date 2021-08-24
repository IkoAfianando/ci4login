<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\StokModel;

class Stock extends BaseController
{     
      protected $stokModel;

      public function __construct()
      {
            $this->stokModel = new StokModel;
      }

      public function index()
      {     
            $data = [
                  'title' => 'Stok Barang',
                  'stok'  => $this->stokModel->findAll()
            ];

            return view('inventaris/stock', $data);
      }
}