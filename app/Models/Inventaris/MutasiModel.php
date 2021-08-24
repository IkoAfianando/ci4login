<?php

namespace App\Models\Inventaris;

use CodeIgniter\Model;

class MutasiModel extends Model
{
      protected $table  = 'mutasi';
      protected $useTimestamp = 'true';
      // protected $allowedFields = ['nama', 'telepon'];

      public function search($keyword)
      {
            return $this->table('mutasi')->like('kode', $keyword)->orlike('id_peminjaman', $keyword);
      }
}