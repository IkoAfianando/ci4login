<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{     protected $table          = 'users';
      protected $useTimestamp   = 'true';
      protected $allowedFields  = ['username', 'email', 'password_hash', 'user_image'];
}