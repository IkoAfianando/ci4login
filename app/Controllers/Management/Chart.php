<?php

namespace App\Controllers\Management;
use App\Controllers\BaseController;

class Chart extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Ganti Chart'
            ];

            return view('management/chart', $data);
      }
}