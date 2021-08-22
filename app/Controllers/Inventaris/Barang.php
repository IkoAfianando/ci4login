<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

class Barang extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Barang Masuk'
            ];

            return view('inventaris/barang', $data);
      }
}