<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\MasterModel;

class Master extends BaseController
{     

      protected $masterModel;

      public function __construct()
      {
            $this->masterModel = new MasterModel;
      }


      public function index()
      {     

            $data = [
                  'title' => 'Master Barang',
                  'master' => $this->masterModel->findAll()
            ];

            return view('inventaris/master', $data);
      }
}