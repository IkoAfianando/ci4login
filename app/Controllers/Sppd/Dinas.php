<?php

namespace App\Controllers\sppd;
use App\Controllers\BaseController;

class Dinas extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Dinas Dalam & Luar'
            ];
            
            return view('sppd/dinas', $data);

      }

}