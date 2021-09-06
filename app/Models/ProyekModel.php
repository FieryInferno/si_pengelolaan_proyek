<?php

namespace App\Models;

use CodeIgniter\Model;

class ProyekModel extends Model
{
  protected $table      = 'proyek';
  protected $primaryKey = 'id_proyek';

  protected $allowedFields = ['id_proyek', 'pegawai_id', 'admin_id', 'nama_proyek', 'lokasi_proyek', 'created_at', 'updated_at'];

  protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}