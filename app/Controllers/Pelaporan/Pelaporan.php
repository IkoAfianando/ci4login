<?php

namespace App\Controllers\Pelaporan;
use App\Controllers\BaseController;

use App\Models\Pelaporan\PelaporanModel;
use App\Models\PelaporanModel as ModelsPelaporanModel;
use CodeIgniter\HTTP\Request;

class Pelaporan extends BaseController
{	
	// public function __construct()
	// {
	// 	$this->pelaporanModel = new pelaporanModel();
	// }
	protected $pelaporanModel;

	public function __construct()
	{
		$this->pelaporanModel = new PelaporanModel;
	}
	
	public function index()
	{		
		$data = [
			'title' => 'Pelaporan Item',
			// 'pelaporan' => $this->pelaporanModel->findAll()
			'pelaporan' => $this->pelaporanModel->findAll()
			
		];
		
		return view('pelaporan/pelaporan', $data);

	}

	public function delete()
	{
		
	}
}