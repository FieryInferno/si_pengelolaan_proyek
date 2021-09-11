<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
  protected $table      = 'member';
  protected $primaryKey = 'id_member';

  protected $allowedFields = ['id_member', 'user_id', 'email_member', 'nomor_telp', 'nip', 'created_at', 'updated_at'];

  protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}