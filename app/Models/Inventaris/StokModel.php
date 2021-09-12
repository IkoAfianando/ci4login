<?php

namespace App\Models\Inventaris;

use CodeIgniter\Model;

class stokModel extends Model
{
      protected $table  = 'stok';
      protected $useTimestamp = 'true';
      // protected $allowedFields = ['nama', 'telepon'];

      // public function search($keyword)
      // {
      //       return $this->table('stok')->like('nama', $keyword)->orlike('kode', $keyword);
      // }
}