<?php

namespace App\Controllers\Pelaporan;
use App\Controllers\BaseController;

use App\Models\Pelaporan\ContactModel;

class Contact extends BaseController
{	
	protected $contactModel;

	public function __construct()
	{
		$this->contactModel = new ContactModel;
	}

	public function index()
	{	
		$data = [
                  'title' => 'Contact Center',
			'contact' => $this->contactModel->findAll()
            ];
		
		return view('pelaporan/contact', $data);

	}
}