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
		$currentPage = $this->request->getVar('page_pelaporan') ? $this->request->getVar('page_pelaporan') : 1;

		$keyword = $this->request->getVar('keyword');
		if($keyword)
		{
			$pelaporan = $this->pelaporanModel->search($keyword);
		}else {
			$pelaporan = $this->pelaporanModel;
		}
		
		$data = [
			'title' => 'Pelaporan Item',
			// 'pelaporan' => $this->pelaporanModel->findAll()
			'pelaporan' => $pelaporan->paginate(6, 'pelaporan'),
			'pager'     => $this->pelaporanModel->pager,
			'currentPage' => $currentPage
		];
		
		return view('pelaporan/pelaporan', $data);

	}
}