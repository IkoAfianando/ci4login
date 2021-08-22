<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

class Master extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Master Barang'
            ];

            return view('inventaris/master', $data);
      }
}