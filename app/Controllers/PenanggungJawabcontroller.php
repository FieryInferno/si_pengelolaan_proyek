<?php

namespace App\Controllers;

class PenanggungJawabcontroller extends BaseController
{
  
  public function index()
	{
    $data['konten'] = 'penanggung_jawab/dashboard';
    $data['title']  = 'Dashboard';
		return view('template', $data);
	}
}
