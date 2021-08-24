<?php

namespace App\Models\Pelaporan;

use CodeIgniter\Model;

class ContactModel extends Model
{
      protected $table  = 'contact';
      protected $useTimestamp = 'true';
      protected $allowedFields = ['nama', 'telepon'];

      public function search($keyword)
      {
            return $this->table('contact')->like('nama', $keyword)->orlike('skpd', $keyword);
      }
      
      
}