<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
  protected $table      = 'register';
  protected $primaryKey = 'id_register';
  
  protected $allowedFields = ['id_register', 'proyek_id', 'dokumen_url', 'dokumen_title', 'dokumen_kategori', 'departemen', 'tipe', 'industri', 'created_at', 'updated_at'];

  protected $useTimestamps = false;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
}