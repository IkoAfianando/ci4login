<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\MasterModel;

class Master extends BaseController
{     

      protected $masterModel;

      public function __construct()
      {
            $this->masterModel = new MasterModel;
      }


      public function index()
      {     
            $currentPage = $this->request->getVar('page_master') ? $this->request->getVar('page_master') : 1;

            $keyword = $this->request->getVar('keyword');
            if($keyword)
            {
                  $master = $this->masterModel->search($keyword);
            }else {
                  $master = $this->masterModel;
            }

            $data = [
                  'title' => 'Master Barang',
                  'master' => $master->paginate(6, 'master'),
                  'pager'  => $this->masterModel->pager,
                  'currentPage' => $currentPage
            ];

            return view('inventaris/master', $data);
      }
}