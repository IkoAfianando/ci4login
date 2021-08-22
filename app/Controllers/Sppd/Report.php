<?php

namespace App\Controllers\Sppd;
use App\Controllers\BaseController;

class Report extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Report Data'
            ];
            
            return view('sppd/report', $data);

      }

}