<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
	public function run()
	{
		$data = [
      [
        'id_user'       => '6',
        'username'      => 'admin1',
        'password'      => password_hash('admin', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'admin1',
        'role'          => 'admin',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_user'       => '7',
        'username'      => 'admin2',
        'password'      => password_hash('admin', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'admin2',
        'role'          => 'admin',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_user'       => '8',
        'username'      => 'admin3',
        'password'      => password_hash('admin', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'admin3',
        'role'          => 'admin',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_user'       => '9',
        'username'      => 'admin4',
        'password'      => password_hash('admin', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'admin4',
        'role'          => 'admin',
        'created_at'    => date('Y-m-d h:i:s')
      ],
      [
        'id_user'       => '10',
        'username'      => 'admin5',
        'password'      => password_hash('admin', PASSWORD_DEFAULT),
        'nama_lengkap'  => 'admin5',
        'role'          => 'admin',
        'created_at'    => date('Y-m-d h:i:s')
      ],
    ];

    // Using Query Builder
    $this->db->table('user')->insertBatch($data);

		$data = [
      [
        'id_admin'    => '1',
        'user_id'     => '6',
        'email_admin' => 'admin@gmail.com',
        'nomor_telp'  => '085723853284',
        'nip'         => '3213012611980001',
        'created_at'  => date('Y-m-d h:i:s')
      ],
      [
        'id_admin'    => '2',
        'user_id'     => '7',
        'email_admin' => 'admin@gmail.com',
        'nomor_telp'  => '085723853284',
        'nip'         => '3213012611980001',
        'created_at'  => date('Y-m-d h:i:s')
      ],
      [
        'id_admin'    => '3',
        'user_id'     => '8',
        'email_admin' => 'admin@gmail.com',
        'nomor_telp'  => '085723853284',
        'nip'         => '3213012611980001',
        'created_at'  => date('Y-m-d h:i:s')
      ],
      [
        'id_admin'    => '4',
        'user_id'     => '9',
        'email_admin' => 'admin@gmail.com',
        'nomor_telp'  => '085723853284',
        'nip'         => '3213012611980001',
        'created_at'  => date('Y-m-d h:i:s')
      ],
      [
        'id_admin'    => '5',
        'user_id'     => '10',
        'email_admin' => 'admin@gmail.com',
        'nomor_telp'  => '085723853284',
        'nip'         => '3213012611980001',
        'created_at'  => date('Y-m-d h:i:s')
      ],
    ];

    // Using Query Builder
    $this->db->table('admin')->insertBatch($data);
	}
}
