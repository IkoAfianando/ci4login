<?php

namespace App\Controllers\Management;
use App\Controllers\BaseController;

class Aplikasi extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'List Aplikasi'
            ];

            return view('management/list', $data);
      }
}