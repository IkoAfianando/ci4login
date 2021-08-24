<?php

namespace App\Controllers\sppd;
use App\Controllers\BaseController;

use App\Models\Sppd\DinasModel;

class Dinas extends BaseController
{     
      protected $dinasModel;

      public function __construct()
      {
            $this->dinasModel = new DinasModel;
      }
      public function index()
      {
            $data = [
                  'title' => 'Dinas Dalam & Luar',
                  'dinas' => $this->dinasModel->findAll()
            ];
            
            return view('sppd/dinas', $data);

      }

}