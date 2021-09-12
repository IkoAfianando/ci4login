<?php

namespace App\Models\Inventaris;

use CodeIgniter\Model;

class PengembalianModel extends Model
{
      protected $table  = 'pengembalian';
      protected $useTimestamp = 'true';
      // protected $allowedFields = ['nama', 'telepon'];

      // public function search($keyword)
      // {
      //       return $this->table('pengembalian')->like('barang', $keyword)->orlike('id_barang', $keyword);
      // }
}