<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table      = 'user';
  protected $primaryKey = 'id_user';
  
  protected $allowedFields = ['id_user', 'username', 'password', 'nama_lengkap', 'role', 'created_at', 'updated_at'];

  protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}