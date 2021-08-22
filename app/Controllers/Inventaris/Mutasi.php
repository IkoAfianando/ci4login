<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

class Mutasi extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Mutasi'
            ];

            return view('inventaris/mutasi', $data);
      }
}