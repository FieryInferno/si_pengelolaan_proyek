<?php

namespace App\Controllers;

class Pegawaicontroller extends BaseController
{
  
  private $pegawai;
  private $user;
  private $admin;
  private $pj;
  private $member;
  
  public function __construct()
  {
    $this->pegawai  = new \App\Models\PegawaiModel;
    $this->user     = new \App\Models\UserModel;
    $this->admin    = new \App\Models\AdminModel;
    $this->pj       = new \App\Models\PenanggungJawabModel;
    $this->member   = new \App\Models\MemberModel;
  }
  
  public function index()
	{
    $data['konten']   = 'admin/pegawai/index';
    $data['title']    = 'Pegawai';
    $data['pegawai']  = $this->user
                          ->select('user.username, user.nama_lengkap, pegawai.email_pegawai, pegawai.nomor_telp as nomor_telp_pegawai, pegawai.nip as nip_pegawai,  admin.email_admin, admin.nomor_telp as nomor_telp_admin, admin.nip as nip_admin,  member.email_member, member.nomor_telp as nomor_telp_member, member.nip as nip_member,  penanggung_jawab.email_pj, penanggung_jawab.nomor_telp as nomor_telp_pj, penanggung_jawab.nip as nip_pj, user.id_user, user.role')
                          ->join('pegawai', 'user.id_user = pegawai.user_id', 'left')
                          ->join('admin', 'user.id_user = admin.user_id', 'left')
                          ->join('member', 'user.id_user = member.user_id', 'left')
                          ->join('penanggung_jawab', 'user.id_user = penanggung_jawab.user_id', 'left')->get()->getResult();
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
    $role     = $this->request->getPost('role');
    $this->user->insert([
      'id_user'       => $id_user,
      'username'      => $this->request->getPost('username'),
      'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
      'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
      'role'          => $role,
      'created_at'    => date('Y-m-d h:i:s')
    ]);

    switch ($role) {
      case 'admin':
        $this->admin->insert([
          'id_admin'    => uniqid('admin'),
          'user_id'     => $id_user,
          'email_admin' => $this->request->getPost('email'),
          'nomor_telp'  => $this->request->getPost('nomor_telp'),
          'nip'         => $this->request->getPost('nip'),
          'created_at'  => date('Y-m-d h:i:s')
        ]);
        break;
      case 'pj':
        $this->pj->insert([
          'id_pj'    => uniqid('pj'),
          'user_id'     => $id_user,
          'email_pj' => $this->request->getPost('email'),
          'nomor_telp'  => $this->request->getPost('nomor_telp'),
          'nip'         => $this->request->getPost('nip'),
          'created_at'  => date('Y-m-d h:i:s')
        ]);
        break;
      case 'member':
        $this->member->insert([
          'id_member'    => uniqid('member'),
          'user_id'     => $id_user,
          'email_member' => $this->request->getPost('email'),
          'nomor_telp'  => $this->request->getPost('nomor_telp'),
          'nip'         => $this->request->getPost('nip'),
          'created_at'  => date('Y-m-d h:i:s')
        ]);
        break;
      case 'pegawai':
        $this->pegawai->insert([
          'id_pegawai'    => uniqid('pegawai'),
          'user_id'       => $id_user,
          'email_pegawai' => $this->request->getPost('email'),
          'nomor_telp'    => $this->request->getPost('nomor_telp'),
          'nip'           => $this->request->getPost('nip'),
          'created_at'    => date('Y-m-d h:i:s')
        ]);
        break;
      
      default:
        # code...
        break;
    }
    
    return redirect()->to('/admin/pegawai')->with('sukses', 'Berhasil tambah pegawai');
  }

  public function edit($id_user)
  {
    $data = $this->user
              ->select('user.username, user.nama_lengkap, pegawai.email_pegawai, pegawai.nomor_telp as nomor_telp_pegawai, pegawai.nip as nip_pegawai,  admin.email_admin, admin.nomor_telp as nomor_telp_admin, admin.nip as nip_admin,  member.email_member, member.nomor_telp as nomor_telp_member, member.nip as nip_member,  penanggung_jawab.email_pj, penanggung_jawab.nomor_telp as nomor_telp_pj, penanggung_jawab.nip as nip_pj, user.id_user, user.role')
              ->join('pegawai', 'user.id_user = pegawai.user_id', 'left')
              ->join('admin', 'user.id_user = admin.user_id', 'left')
              ->join('member', 'user.id_user = member.user_id', 'left')
              ->join('penanggung_jawab', 'user.id_user = penanggung_jawab.user_id', 'left')->find($id_user);

    switch ($data['role']) {
      case 'admin':
        $data['email']      = $data['email_admin'];
        $data['nomor_telp'] = $data['nomor_telp_admin'];
        $data['nip']        = $data['nip_admin'];
        break;
      case 'pegawai':
        $data['email']      = $data['email_pegawai'];
        $data['nomor_telp'] = $data['nomor_telp_pegawai'];
        $data['nip']        = $data['nip_pegawai'];
        break;
      case 'member':
        $data['email']      = $data['email_member'];
        $data['nomor_telp'] = $data['nomor_telp_member'];
        $data['nip']        = $data['nip_member'];
        break;
      case 'pj':
        $data['email']      = $data['email_pj'];
        $data['nomor_telp'] = $data['nomor_telp_pj'];
        $data['nip']        = $data['nip_pj'];
        break;
      
      default:
        # code...
        break;
    }

    $data['konten']   = 'admin/pegawai/edit';
    $data['title']    = 'Pegawai';
		return view('template', $data);
  }

  public function update($id_user)
  {
    $data = [
      'username'      => $this->request->getPost('username'),
      'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
      'role'          => $this->request->getPost('role'),
      'updated_at'    => date('Y-m-d h:i:s')
    ];

    if ($this->request->getPost('password')) {
      $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
    }

    $this->user->update($id_user, $data);
    
    $this->pegawai->where('user_id', $id_user)->delete();
    $this->member->where('user_id', $id_user)->delete();
    $this->pj->where('user_id', $id_user)->delete();
    $this->admin->where('user_id', $id_user)->delete();

    switch ($this->request->getPost('role')) {
      case 'admin':
        $this->admin->insert([
          'id_admin'    => uniqid('admin'),
          'user_id'     => $id_user,
          'email_admin' => $this->request->getPost('email'),
          'nomor_telp'  => $this->request->getPost('nomor_telp'),
          'nip'         => $this->request->getPost('nip'),
          'created_at'  => date('Y-m-d h:i:s')
        ]);
        break;
      case 'pj':
        $this->pj->insert([
          'id_pj'    => uniqid('pj'),
          'user_id'     => $id_user,
          'email_pj' => $this->request->getPost('email'),
          'nomor_telp'  => $this->request->getPost('nomor_telp'),
          'nip'         => $this->request->getPost('nip'),
          'created_at'  => date('Y-m-d h:i:s')
        ]);
        break;
      case 'member':
        $this->member->insert([
          'id_member'    => uniqid('member'),
          'user_id'     => $id_user,
          'email_member' => $this->request->getPost('email'),
          'nomor_telp'  => $this->request->getPost('nomor_telp'),
          'nip'         => $this->request->getPost('nip'),
          'created_at'  => date('Y-m-d h:i:s')
        ]);
        break;
      case 'pegawai':
        $this->pegawai->insert([
          'id_pegawai'    => uniqid('pegawai'),
          'user_id'       => $id_user,
          'email_pegawai' => $this->request->getPost('email'),
          'nomor_telp'    => $this->request->getPost('nomor_telp'),
          'nip'           => $this->request->getPost('nip'),
          'created_at'    => date('Y-m-d h:i:s')
        ]);
        break;
      
      default:
        # code...
        break;
    }

    return redirect()->to('/admin/pegawai')->with('sukses', 'Berhasil edit pegawai');
  }

  public function destroy($id_user)
  {
    $this->user->delete($id_user);
    return redirect()->to('/admin/pegawai')->with('sukses', 'Berhasil hapus pegawai');
  }
}
