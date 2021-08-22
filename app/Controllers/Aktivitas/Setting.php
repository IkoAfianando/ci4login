<?php 

namespace App\Controllers\Aktivitas;
use App\Controllers\BaseController;

class Setting extends BaseController
{
      public function index()
      {
            $data = [
                  'title' => 'Setting'
            ];

            return view('aktivitas/setting', $data);
      }
}