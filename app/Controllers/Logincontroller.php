<?php

namespace App\Controllers;

class Logincontroller extends BaseController
{
  private $user;

  public function __construct()
  {
    $this->user = new \App\Models\UserModel;
  }
  
	public function index()
	{
		return view('login');
	}

  public function login()
  {
    $encrypter  = \Config\Services::encrypter();
    
    if ($this->validate([
      'username'  => 'required',
      'password'  => 'required'
    ])) {
      $user = $this->user->where('username', $this->request->getPost('username'))->first();
      if ($user) {
        if (password_verify($this->request->getPost('password'), $user['password'])) {
          $session  = session();
          $session->set([
            'id_user'       => $user['id_user'],
            'username'      => $user['username'],
            'password'      => $user['password'],
            'nama_lengkap'  => $user['nama_lengkap'],
            'role'          => $user['role'],
          ]);

          switch ($session->role) {
            case 'admin':
              return redirect()->to('/admin');
              break;
            case 'member':
              return redirect()->to('/member');
              break;
            case 'pj':
              return redirect()->to('/pj');
              break;
            case 'pegawai':
              return redirect()->to('/pegawai');
              break;
            
            default:
              # code...
              break;
          }

        } else {
          return redirect()->back()->with('error', 'Password salah');
        }
        
      } else {
        return redirect()->back()->with('error', 'Username salah');
      }
      
    } else {
      return redirect()->back()->with('error', 'Username atau password tidak boleh kosong');
    }
  }

  public function logout()
  {
    $session  = session();
    $session->destroy();
    return redirect()->to('/');
  }
}
