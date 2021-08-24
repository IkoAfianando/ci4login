<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\MutasiModel;

class Mutasi extends BaseController
{     
      protected $mutasiModel;

      public function __construct()
      {
            $this->mutasiModel = new MutasiModel;
      }

      public function index()
      {     
            $data = [
                  'title' => 'Mutasi',
                  'mutasi' => $this->mutasiModel->findAll()
            ];

            return view('inventaris/mutasi', $data);
      }
}