<?php

namespace App\Models\Pelaporan;

use CodeIgniter\Model;

class PelaporanModel extends Model
{
      protected $table  = 'pelaporan';
      protected $useTimestamp = 'true';
      protected $allowedFields = ['nama', 'telepon'];
      
      
}