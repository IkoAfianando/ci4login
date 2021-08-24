<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\PengembalianModel;

class Pengembalian extends BaseController
{     
      protected $pengembalianModel;

      public function __construct()
      {
            $this->pengembalianModel = new PengembalianModel;
      }

      public function index()
      {     
            $currentPage = $this->request->getVar('page_pengembalian') ? $this->request->getVar('page_pengembalian') : 1;

            $keyword = $this->request->getVar('keyword');
            if($keyword)
            {
                  $pengembalian = $this->pengembalianModel->search($keyword);
            }else {
                  $pengembalian = $this->pengembalianModel;
            }

            $data = [
                  'title' => 'Pengembalian',
                  'pengembalian' => $pengembalian->paginate(6, 'pengembalian'),
                  'pager' => $this->pengembalianModel->pager,
                  'currentPage' => $currentPage
            ];

            return view('inventaris/pengembalian', $data);
      }
}