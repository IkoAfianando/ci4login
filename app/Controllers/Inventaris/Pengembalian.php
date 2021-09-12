<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\PengembalianModel;

class Pengembalian extends BaseController
{     
      protected $pengembalianModel;

      public function __construct()
      {
            $this->pengembalianModel = new PengembalianModel;
      }

      public function index()
      {     

            $data = [
                  'title' => 'Pengembalian',
                  'pengembalian' => $this->pengembalianModel->findAll()
            ];

            return view('inventaris/pengembalian', $data);
      }
}