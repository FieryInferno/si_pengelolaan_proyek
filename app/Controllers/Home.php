<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
    $data['konten'] = 'home';
    $data['title']  = 'Home';
		return view('template_awal', $data);
	}

  public function tentang()
  {
    $data['konten'] = 'tentang';
    $data['title']  = 'Tentang';
		return view('template_awal', $data);
  }
}
