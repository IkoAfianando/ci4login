<?php 

namespace App\Controllers\Inventaris;
use App\Controllers\BaseController;

use App\Models\Inventaris\AuditModel;

class Audit extends BaseController
{     
      protected $auditModel;

      public function __construct()
      {
            $this->auditModel = new AuditModel;
      }
      public function index()
      {     
            $currentpage = $this->request->getVar('page_audit') ? $this->request->getVar('page_audit') : 1;
            
            $keyword = $this->request->getVar('keyword');
            if($keyword){
                  $audit = $this->auditModel->search($keyword);
            }else{
                  $audit = $this->auditModel;
            }

            $data = [
                  'title' => 'Audit Infrastruktur',
                  'audit' => $audit->paginate(6, 'audit'),
                  'pager' => $this->auditModel->pager,
                  'currentPage' => $currentpage
            ];

            return view('inventaris/audit', $data);
      }
}