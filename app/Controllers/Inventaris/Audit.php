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
            $data = [
                  'title' => 'Audit Infrastruktur',
                  'audit' => $this->auditModel->findall()
            ];

            return view('inventaris/audit', $data);
      }
}