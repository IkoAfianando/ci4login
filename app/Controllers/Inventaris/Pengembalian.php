<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

class Pengembalian extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Pengembalian'
            ];

            return view('inventaris/pengembalian', $data);
      }
}