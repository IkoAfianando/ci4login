<?php

namespace App\Models\Pelaporan;

use CodeIgniter\Model;

class ContactModel extends Model
{
      protected $table  = 'contact';
      protected $primaryKey = 'id';
      protected $useTimestamp = 'true';
      protected $allowedFields = ['nama', 'telepon'];
      
      
}