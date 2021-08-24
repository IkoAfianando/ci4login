<?php

namespace App\Models\Pelaporan;

use CodeIgniter\Model;

class PelaporanModel extends Model
{
      protected $table  = 'pelaporan';
      protected $useTimestamp = 'true';
      protected $allowedFields = ['nama', 'telepon'];

      public function search($keyword)
      {
            // $builder = $this->table('pelaporan');
            // $builder->like('nama', $keyword);
            // return $builder; 
            
            return $this->table('pelaporan')->like('nama', $keyword)->orlike('telepon', $keyword);
      }
      
      
}