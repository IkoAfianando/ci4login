<?php

namespace App\Models\Inventaris;

use CodeIgniter\Model;

class BarangModel extends Model
{
      protected $table  = 'barang';
      protected $useTimestamp = 'true';
      // protected $allowedFields = ['nama', 'telepon'];

      // public function search($keyword)
      // {
      //       return $this->table('barang')->like('nomor', $keyword)->orlike('kode', $keyword);
      // }
}