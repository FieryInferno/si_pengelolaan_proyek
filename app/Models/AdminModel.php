<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
  protected $table      = 'admin';
  protected $primaryKey = 'id_admin';

  protected $allowedFields = ['id_admin', 'user_id', 'email_admin', 'nomor_telp', 'nip', 'created_at', 'updated_at'];

  protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}