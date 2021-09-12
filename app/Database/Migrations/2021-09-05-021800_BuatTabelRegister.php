<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelRegister extends Migration
{
	public function up()
	{
    $this->forge->addField([
      'id_register' => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'proyek_id' => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'dokumen_url' => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'dokumen_title' => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'dokumen_kategori' => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'departemen'  => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'tipe'  => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'industri'  => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'created_at'  => [
        'type'    => 'DATETIME',
        'default' => NULL
      ],
      'updated_at'  => [
        'type'    => 'DATETIME',
        'default' => NULL
      ],
    ]);
    $this->forge->addKey('id_register', true);
    $this->forge->addForeignKey('proyek_id', 'proyek', 'id_proyek', 'CASCADE', 'CASCADE');
    $this->forge->createTable('register');
	}

	public function down()
	{
		//
	}
}
