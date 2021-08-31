<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTabelUser extends Migration
{
	public function up()
	{
    $this->forge->addField([
      'id_user' => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'username'  => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'password'  => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'nama_lengkap'  => [
        'type'        => 'VARCHAR',
        'constraint'  => '191',
      ],
      'role'  => [
        'type'        => 'ENUM',
        'constraint'  => ['admin', 'member', 'pj', 'pegawai'],
      ]
    ]);
    $this->forge->addKey('id_user', true);
    $this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
