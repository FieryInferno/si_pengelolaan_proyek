<?php

namespace App\Controllers;

class Admincontroller extends BaseController
{
  
  public function index()
	{
    $data['konten'] = 'admin/dashboard';
    $data['title']  = 'Dashboard';
		return view('template', $data);
	}
}
