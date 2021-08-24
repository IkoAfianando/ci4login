<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\MutasiModel;

class Mutasi extends BaseController
{     
      protected $mutasiModel;

      public function __construct()
      {
            $this->mutasiModel = new MutasiModel;
      }

      public function index()
      {     
            $currentPage = $this->request->getVar('page_mutasi') ? $this->request->getVar('page_mutasi') : 1;

            $keyword = $this->request->getVar('keyword');
            if($keyword){
                  $mutasi = $this->mutasiModel->search($keyword);
            }else {
                  $mutasi = $this->mutasiModel;
            }
            
            $data = [
                  'title' => 'Mutasi',
                  'mutasi' => $mutasi->paginate(6, 'mutasi'),
                  'pager' => $this->mutasiModel->pager,
                  'currentPage' => $currentPage
            ];

            return view('inventaris/mutasi', $data);
      }
}