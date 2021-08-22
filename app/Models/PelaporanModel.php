<?php

namespace App\Models;

use CodeIgniter\Model;

class PelaporanModel extends Model
{
      protected $table  = 'pelaporan';
      protected $useTimestamp = 'true';
      protected $allowedFields = ['nama', 'telepon', 'keterangan', 'koord'];
      
      
}