<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuatTableMember extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_member'	=> [
			  'type'        => 'VARCHAR',
			  'constraint'  => '191',
			],
			'user_id' => [
			  'type'        => 'VARCHAR',
			  'constraint'  => '191',
			],
			'email_member'	=> [
			  'type'        => 'VARCHAR',
			  'constraint'  => '191',
			],
			'nomor_telp'  => [
			  'type'        => 'VARCHAR',
			  'constraint'  => '191',
			],
			'nip' => [
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
		$this->forge->addKey('id_member', true);
		$this->forge->addForeignKey('user_id', 'user', 'id_user', 'CASCADE', 'CASCADE');
		$this->forge->createTable('member');
	}

	public function down()
	{
		//
	}
}
