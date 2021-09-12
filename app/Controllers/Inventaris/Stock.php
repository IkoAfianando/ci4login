<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\StokModel;

class Stock extends BaseController
{     
      protected $stokModel;

      public function __construct()
      {
            $this->stokModel = new StokModel;
      }

      public function index()
      {     
            // $currentPage = $this->request->getVar('page_stok') ? $this->request->getVar('page_stok') : 1;
            
            // $keyword = $this->request->getVar('keyword');
            // if($keyword){
            //       $stok = $this->stokModel->search($keyword);
            // }else{
            //       $stok = $this->stokModel;
            // }

            $data = [
                  'title' => 'Stok Barang',
                  'stok'  => $this->stokModel->findAll()
                  // 'pager' => $this->stokModel->pager,
                  // 'currentPage' => $currentPage
            ];

            return view('inventaris/stock', $data);
      }
}