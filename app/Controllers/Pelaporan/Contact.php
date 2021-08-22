<?php

namespace App\Controllers\Pelaporan;
use App\Controllers\BaseController;

class Contact extends BaseController
{	

	public function index()
	{	
		$data = [
                  'title' => 'Contact Center'
            ];
		
		return view('pelaporan/contact', $data);

	}
}