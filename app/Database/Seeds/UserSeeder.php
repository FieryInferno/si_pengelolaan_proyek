<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
      [
        'id_user'       => uniqid('user'),
        'username'      => 'admin',
        'password'      => password_hash('admin', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'admin',
        'role'          => 'admin'
      ], [
        'id_user'       => uniqid('user'),
        'username'      => ',member',
        'password'      => password_hash('member', PASSWORD_DEFAULT),
        'nama_lengkap'  => ',member',
        'role'          => ',member'
      ], [
        'id_user'       => uniqid('user'),
        'username'      => 'pegawai',
        'password'      => password_hash('pegawai', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'pegawai',
        'role'          => 'pegawai'
      ], [
        'id_user'       => uniqid('user'),
        'username'      => 'penanggung_jawab',
        'password'      => password_hash('penanggung_jawab', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'penanggung_jawab',
        'role'          => 'pj'
      ]
    ];

    // Using Query Builder
    $this->db->table('user')->insertBatch($data);
	}
}
