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
		$currentPage = $this->request->getvar('page_contact') ? $this->request->getvar('page_contact') : 1;

		$keyword = $this->request->getvar('keyword');
		if($keyword)
		{
			$contact = $this->contactModel->search($keyword);
		}else {
			$contact = $this->contactModel;
		}


		$data = [
                  'title' => 'Contact Center',
			'contact' => $contact->paginate(6, 'contact'),
			'pager' => $this->contactModel->pager,
			'currentPage' => $currentPage
            ];
		
		return view('pelaporan/contact', $data);

	}
}