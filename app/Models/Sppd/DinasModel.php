<?php

namespace App\Models\Sppd;

use CodeIgniter\Model;

class DinasModel extends Model
{
      protected $table  = 'dinas';
      protected $useTimestamp = 'true';
      protected $allowedFields = ['nama', 'telepon'];

      // public function search($keyword)
      // {
      //       // $builder = $this->table('pelaporan');
      //       // $builder->like('nama', $keyword);
      //       // return $builder; 
            
      //       return $this->table('pelaporan')->like('nama', $keyword)->orlike('telepon', $keyword);
      // }
      
      
}