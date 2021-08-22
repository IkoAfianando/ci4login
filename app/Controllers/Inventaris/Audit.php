<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

class Audit extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Audit Infrastruktur'
            ];

            return view('inventaris/audit', $data);
      }
}