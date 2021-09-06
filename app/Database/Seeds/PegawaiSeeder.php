<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PegawaiSeeder extends Seeder
{
	public function run()
	{
		$data = [
      [
        'id_user'       => '1',
        'username'      => 'pegawai1',
        'password'      => password_hash('pegawai', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'pegawai',
        'role'          => 'pegawai',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_user'       => '2',
        'username'      => 'pegawai2',
        'password'      => password_hash('pegawai', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'pegawai',
        'role'          => 'pegawai',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_user'       => '3',
        'username'      => 'pegawai3',
        'password'      => password_hash('pegawai', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'pegawai',
        'role'          => 'pegawai',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_user'       => '4',
        'username'      => 'pegawai4',
        'password'      => password_hash('pegawai', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'pegawai',
        'role'          => 'pegawai',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_user'       => '5',
        'username'      => 'pegawai5',
        'password'      => password_hash('pegawai', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'pegawai',
        'role'          => 'pegawai',
        'created_at'    => date('Y-m-d h:i:s')
      ],
    ];

    // Using Query Builder
    $this->db->table('user')->insertBatch($data);

		$data = [
      [
        'id_pegawai'    => '1',
        'user_id'       => '1',
        'email_pegawai' => 'pegawai@gmail.com',
        'nomor_telp'    => '085723853284',
        'nip'           => '3213012611980001',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_pegawai'    => '2',
        'user_id'       => '2',
        'email_pegawai' => 'pegawai@gmail.com',
        'nomor_telp'    => '085723853284',
        'nip'           => '3213012611980001',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_pegawai'    => '3',
        'user_id'       => '3',
        'email_pegawai' => 'pegawai@gmail.com',
        'nomor_telp'    => '085723853284',
        'nip'           => '3213012611980001',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_pegawai'    => '4',
        'user_id'       => '4',
        'email_pegawai' => 'pegawai@gmail.com',
        'nomor_telp'    => '085723853284',
        'nip'           => '3213012611980001',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_pegawai'    => '5',
        'user_id'       => '5',
        'email_pegawai' => 'pegawai@gmail.com',
        'nomor_telp'    => '085723853284',
        'nip'           => '3213012611980001',
        'created_at'    => date('Y-m-d h:i:s')
      ],
    ];

    // Using Query Builder
    $this->db->table('pegawai')->insertBatch($data);
	}
}
