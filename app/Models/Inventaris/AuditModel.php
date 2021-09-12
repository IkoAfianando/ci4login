<?php

namespace App\Models\Inventaris;

use CodeIgniter\Model;

class AuditModel extends Model
{
      protected $table  = 'audit';
      protected $useTimestamp = 'true';
      // protected $allowedFields = ['nama', 'telepon'];

      // public function search($keyword)
      // {
      //       return $this->table('audit')->like('skpd', $keyword)->orlike('telepon', $keyword);
      // }
}