<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\BarangModel;
class Barang extends BaseController
{     
      protected $barangModel;

      public function __construct()
      {
            $this->barangModel = new BarangModel;
      }

      public function index()
      {       
            $data = [
                  'title' => 'Barang Masuk',
                  'barang' => $this->barangModel->findAll()
            ];

            return view('inventaris/barang', $data);
      }
}