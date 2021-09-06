<?php

namespace App\Controllers;

class Pegawaicontroller extends BaseController
{
  
  private $pegawai;
  
  public function __construct()
  {
    $this->pegawai  = new \App\Models\PegawaiModel;
    $this->user     = new \App\Models\UserModel;
  }
  
  public function index()
	{
    $data['konten']   = 'admin/pegawai/index';
    $data['title']    = 'Pegawai';
    $data['pegawai']  = $this->pegawai->join('user', 'pegawai.user_id = user.id_user')->get()->getResult();
		return view('template', $data);
	}

  public function create()
  {
    $data['konten']   = 'admin/pegawai/tambah';
    $data['title']    = 'Pegawai';
		return view('template', $data);
  }

  public function store()
  {
    $id_user  = uniqid('user');
    $this->user->insert([
      'id_user'       => $id_user,
      'username'      => $this->request->getPost('username'),
      'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
      'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
      'role'          => 'pegawai',
      'created_at'    => date('Y-m-d h:i:s')
    ]);

    $this->pegawai->insert([
      'id_pegawai'    => uniqid('pegawai'),
      'user_id'       => $id_user,
      'email_pegawai' => $this->request->getPost('email_pegawai'),
      'nomor_telp'    => $this->request->getPost('nomor_telp'),
      'nip'           => $this->request->getPost('nip'),
      'created_at'    => date('Y-m-d h:i:s')
    ]);
    return redirect()->to('/admin/pegawai')->with('sukses', 'Berhasil tambah pegawai');
  }

  public function edit($id_pegawai)
  {
    $data             = $this->pegawai->join('user', 'pegawai.user_id = user.id_user')->find($id_pegawai);
    $data['konten']   = 'admin/pegawai/edit';
    $data['title']    = 'Pegawai';
		return view('template', $data);
  }

  public function update($id_user)
  {
    $data = [
      'username'      => $this->request->getPost('username'),
      'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
      'role'          => 'pegawai',
      'updated_at'    => date('Y-m-d h:i:s')
    ];

    if ($this->request->getPost('password')) {
      $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
    }

    $this->user->update($id_user, $data);

    $this->pegawai->where('user_id', $id_user)->set([
      'email_pegawai' => $this->request->getPost('email_pegawai'),
      'nomor_telp'    => $this->request->getPost('nomor_telp'),
      'nip'           => $this->request->getPost('nip'),
      'updated_at'    => date('Y-m-d h:i:s')
    ])->update();
    return redirect()->to('/admin/pegawai')->with('sukses', 'Berhasil edit pegawai');
  }

  public function destroy($id_user)
  {
    $this->user->delete($id_user);
    return redirect()->to('/admin/pegawai')->with('sukses', 'Berhasil hapus pegawai');
  }
}
