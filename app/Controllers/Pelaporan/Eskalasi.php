<?php

namespace App\Controllers\Pelaporan;
use App\Controllers\BaseController;

class Eskalasi extends BaseController
{	

	public function index()
	{	
		$data = [
                  'title' => 'Eskalasi'
            ];
		
		return view('pelaporan/eskalasi', $data);

	}
}