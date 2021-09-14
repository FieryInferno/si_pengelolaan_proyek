<?php

namespace App\Controllers;

class Proyekcontroller extends BaseController
{
  
  private $pegawai;
  private $admin;
  private $proyek;
  
  public function __construct()
  {
    $this->pegawai  = new \App\Models\PegawaiModel;
    $this->admin    = new \App\Models\AdminModel;
    $this->proyek   = new \App\Models\ProyekModel;
  }
  
  public function index()
	{
    $data['konten'] = 'admin/proyek/index';
    $data['title']  = 'Proyek';
    $data['proyek'] = $this->proyek
    ->select('proyek.id_proyek, user_pegawai.nama_lengkap as nama_pegawai, user_admin.nama_lengkap as nama_admin, proyek.nama_proyek, proyek.lokasi_proyek')
    ->join('admin', 'proyek.admin_id = admin.id_admin')
    ->join('pegawai', 'proyek.pegawai_id = pegawai.id_pegawai')
    ->join('user as user_admin', 'admin.user_id = user_admin.id_user')
    ->join('user as user_pegawai', 'pegawai.user_id = user_pegawai.id_user')
    ->get()->getResult();
		return view('template', $data);
	}

  public function create()
  {
    $data['konten']   = 'admin/proyek/tambah';
    $data['title']    = 'Proyek';
    $data['pegawai']  = $this->pegawai->join('user', 'pegawai.user_id = user.id_user')->get()->getResult();
    $data['admin']    = $this->admin->join('user', 'admin.user_id = user.id_user')->get()->getResult();
		return view('template', $data);
  }

  public function store()
  {
    $this->proyek->insert([
      'id_proyek'     => uniqid('proyek'),
      'pegawai_id'    => $this->request->getPost('id_pegawai'),
      'admin_id'      => $this->request->getPost('id_admin'),
      'nama_proyek'   => $this->request->getPost('nama_proyek'),
      'lokasi_proyek' => $this->request->getPost('lokasi_proyek'),
      'created_at'    => date('Y-m-d h:i:s')
    ]);
    return redirect()->to('/admin/proyek')->with('sukses', 'Berhasil tambah proyek');
  }

  public function edit($id_proyek)
  {
    $data             = $this->proyek->find($id_proyek);
    $data['konten']   = 'admin/proyek/edit';
    $data['title']    = 'Proyek';
    $data['pegawai']  = $this->pegawai->join('user', 'pegawai.user_id = user.id_user')->get()->getResult();
    $data['admin']    = $this->admin->join('user', 'admin.user_id = user.id_user')->get()->getResult();
		return view('template', $data);
  }

  public function update($id_proyek)
  {
    $this->proyek->update($id_proyek, [
      'pegawai_id'    => $this->request->getPost('id_pegawai'),
      'admin_id'      => $this->request->getPost('id_admin'),
      'nama_proyek'   => $this->request->getPost('nama_proyek'),
      'lokasi_proyek' => $this->request->getPost('lokasi_proyek'),
      'updated_at'    => date('Y-m-d h:i:s')
    ]);
    return redirect()->to('/admin/proyek')->with('sukses', 'Berhasil edit proyek');
  }

  public function destroy($id_proyek)
  {
    $this->proyek->delete($id_proyek);
    return redirect()->to('/admin/proyek')->with('sukses', 'Berhasil hapus proyek');
  }

  public function proyekPegawai()
  {
    $data['konten']         = 'pegawai/proyek';
    $data['title']          = 'Proyek';
    $data['proyekPegawai']  = $this->proyek
    ->select('proyek.id_proyek, user_pegawai.nama_lengkap as nama_pegawai, user_admin.nama_lengkap as nama_admin, proyek.nama_proyek, proyek.lokasi_proyek')
    ->join('admin', 'proyek.admin_id = admin.id_admin')
    ->join('pegawai', 'proyek.pegawai_id = pegawai.id_pegawai')
    ->join('user as user_admin', 'admin.user_id = user_admin.id_user')
    ->join('user as user_pegawai', 'pegawai.user_id = user_pegawai.id_user')
    ->where('pegawai_id', session('id_pegawai'))
    ->get()->getResult();
    $data['proyek'] = $this->proyek
    ->select('proyek.id_proyek, user_pegawai.nama_lengkap as nama_pegawai, user_admin.nama_lengkap as nama_admin, proyek.nama_proyek, proyek.lokasi_proyek')
    ->join('admin', 'proyek.admin_id = admin.id_admin')
    ->join('pegawai', 'proyek.pegawai_id = pegawai.id_pegawai')
    ->join('user as user_admin', 'admin.user_id = user_admin.id_user')
    ->join('user as user_pegawai', 'pegawai.user_id = user_pegawai.id_user')
    ->get()->getResult();
		return view('template', $data);
  }
}
