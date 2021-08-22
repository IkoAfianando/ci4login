<?php 

namespace App\Controllers\Aktivitas;
use App\Controllers\BaseController;

class Aktivitas extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'List Aktivitas'
            ];

            return view('aktivitas/list', $data);
      }
}