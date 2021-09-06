<?php

namespace App\Controllers;

class Registercontroller extends BaseController
{

  private $register;
  private $proyek;
  
  public function __construct()
  {
    $this->register = new \App\Models\RegisterModel;
    $this->proyek   = new \App\Models\ProyekModel;
  }
  
  public function index()
	{
    $data['konten']   = 'admin/register/index';
    $data['title']    = 'Register';
    $data['register'] = $this->register->join('proyek', 'register.proyek_id = proyek.id_proyek')->get()->getResult();
		return view('template', $data);
	}

  public function create()
  {
    $data['konten'] = 'admin/register/tambah';
    $data['title']  = 'Register';
    $data['proyek'] = $this->proyek->get()->getResult();
		return view('template', $data);
  }

  public function store()
  {
    $file     = $this->request->getFile('dokumen');
    $filename = $file->getName();
    $file->move('upload', $filename);
    $this->register->insert([
      'id_dokumen'        => uniqid('dokumen'),
      'proyek_id'         => $this->request->getPost('proyek_id'),
      'dokumen_title'     => $this->request->getPost('dokumen_title'),
      'dokumen_kategori'  => $this->request->getPost('dokumen_kategori'),
      'departemen'        => $this->request->getPost('departemen'),
      'tipe'              => $this->request->getPost('tipe'),
      'industri'          => $this->request->getPost('industri'),
      'dokumen_url'       => $filename,
      'created_at'        => date('Y-m-d h:i:s')
    ]);
    return redirect()->to('/admin/register')->with('sukses', 'Berhasil tambah register');
  }

  public function edit($id_register)
  {
    $data           = $this->register->find($id_register);
    $data['konten'] = 'admin/register/edit';
    $data['title']  = 'Register';
    $data['proyek'] = $this->proyek->get()->getResult();
		return view('template', $data);
  }

  public function update($id_register)
  {
    $file = $this->request->getFile('dokumen');
    // print_r();die();
    if ($file->getName()) {
      $filename = $file->getName();
      $file->move('upload', $filename);
      file_exists('public/upload/' . $this->request->getPost('dokumen_lama')) ? unlink('public/upload/' . $this->request->getPost('dokumen_lama')) : '';
    } else {
      $filename = $this->request->getPost('dokumen_lama');
    }
    $this->register->update($id_register, [
      'proyek_id'         => $this->request->getPost('proyek_id'),
      'dokumen_title'     => $this->request->getPost('dokumen_title'),
      'dokumen_kategori'  => $this->request->getPost('dokumen_kategori'),
      'departemen'        => $this->request->getPost('departemen'),
      'tipe'              => $this->request->getPost('tipe'),
      'industri'          => $this->request->getPost('industri'),
      'dokumen_url'       => $filename,
      'updated_at'        => date('Y-m-d h:i:s')
    ]);
    return redirect()->to('/admin/register')->with('sukses', 'Berhasil edit register');
  }

  public function destroy($id_register)
  {
    $this->register->delete($id_register);
    return redirect()->to('/admin/register')->with('sukses', 'Berhasil hapus register');
  }
}
