<?php

namespace App\Models;

use CodeIgniter\Model;

class PenanggungJawabModel extends Model
{
  protected $table      = 'penanggung_jawab';
  protected $primaryKey = 'id_penanggung_jawab';

  protected $allowedFields = ['id_pj', 'user_id', 'email_pj', 'nomor_telp', 'nip', 'created_at', 'updated_at'];

  protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}