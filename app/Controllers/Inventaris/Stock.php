<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

class Stock extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Stok Barang'
            ];

            return view('inventaris/stock', $data);
      }
}