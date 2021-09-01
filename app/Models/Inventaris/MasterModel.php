<?php

namespace App\Models\Inventaris;

use CodeIgniter\Model;

class MasterModel extends Model
{
      protected $table  = 'master';
      protected $useTimestamp = 'true';
      // protected $allowedFields = ['nama', 'telepon'];

//       public function search($keyword)
//       {
//             return $this->table('master')->like('nama', $keyword)->orlike('kode', $keyword);
//       }
// 
}