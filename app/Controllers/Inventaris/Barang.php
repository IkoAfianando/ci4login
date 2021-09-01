<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\BarangModel;
class Barang extends BaseController
{     
      protected $barangModel;

      public function __construct()
      {
            $this->barangModel = new BarangModel;
      }

      public function index()
      {     
            // $currentPage = $this->request->getVar('page_barang') ? $this->request->getVar('page_barang') : 1;
            
            // $keyword = $this->request->getVar('keyword');
            // if($keyword){
            //       $barang = $this->barangModel->search($keyword);
            // }else {
            //       $barang = $this->barangModel;
            // }

            $data = [
                  'title' => 'Barang Masuk',
                  'barang' => $this->barangModel->findAll()
            ];

            return view('inventaris/barang', $data);
      }
}