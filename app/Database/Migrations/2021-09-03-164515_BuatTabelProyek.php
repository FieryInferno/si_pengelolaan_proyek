<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelProyek extends Migration
{
	public function up()
	{
    $this->forge->addField([
      'id_proyek' => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'pegawai_id'  => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'admin_id'  => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'nama_proyek' => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'lokasi_proyek' => [
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
    $this->forge->addKey('id_proyek', true);
    $this->forge->addForeignKey('pegawai_id', 'pegawai', 'id_pegawai', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('admin_id', 'admin', 'id_admin', 'CASCADE', 'CASCADE');
    $this->forge->createTable('proyek');
	}

	public function down()
	{
		//
	}
}
