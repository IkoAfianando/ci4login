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
            // $currentPage = $this->request->getVar('page_mutasi') ? $this->request->getVar('page_mutasi') : 1;

            // $keyword = $this->request->getVar('keyword');
            // if($keyword){
            //       $mutasi = $this->mutasiModel->search($keyword);
            // }else {
            //       $mutasi = $this->mutasiModel;
            // }
            
            // $kunci = $this->request->getVar('kunci');
            // if($kunci){
            //       $mutasi = $this->mutasiModel->cari($kunci);
            // }else {
            //       $mutasi = $this->mutasiModel;
            // }
            
            $data = [
                  'title' => 'Mutasi',
                  'mutasi' => $this->mutasiModel->findAll()
            ];

            return view('inventaris/mutasi', $data);
      }
}